<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    
    
    /**
     * Display a listing of the resource.
     */
    public function services()
    {
        return view('admin-page.card-services');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userIndex()
    {
        // Fetch all users, paginated so the page doesn't lag with thousands of users
        $users = User::latest()->paginate(10);


        return view('admin.users.index', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:admin,user',
            'is_active' => 'required|boolean',
            'balance' => 'required|numeric|min:0',
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }




    public function updateImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = auth()->user();

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }

            // Store new image
            $path = $request->file('image')->store('profile_images', 'public');

            $user->update(['image' => $path]);
        }

        return back()->with('status', 'Profile image updated!');
    }

    

    /**
     * Remove the specified resource from storage.
     */
    //public function destroy(string $id)
    public function destroy(User $user)
    {
        // 1. Delete the user's profile image if it exists
        if ($user->image) {
            Storage::disk('public')->delete($user->image);
        }

        if (auth()->id() === $user->id) {
            return back()->with('error', 'You cannot delete your own admin account.');
        }

        // 2. Delete the user record
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User and their data deleted successfully.');
    }
}
