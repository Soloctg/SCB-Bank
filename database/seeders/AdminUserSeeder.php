<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        // Path to your source image in public/assets
        $sourcePath = public_path('assets/images/puttan.jpg');
        $filename = 'profile_images/puttan.jpg';

        // Check if the source file exists before trying to copy it
        if (File::exists($sourcePath)) {
            // Ensure the directory exists in storage
            Storage::disk('public')->makeDirectory('profile_images');

            // Copy file from public/assets to storage/app/public/profile_images
            File::copy($sourcePath, storage_path('app/public/' . $filename));
        } else {
            $filename = null; // Fallback if file doesn't exist
        }

        User::updateOrCreate(
            ['email' => 'admin@example.com'], // Unique identifier
            [
                'name' => 'System Admin',
                'password' => Hash::make('password123'), 
                'role' => 'admin',
                'is_active' => 1,
                'account' => mt_rand(1000000000, 9999999999),
                'balance' => 5000.00,
                'email_verified_at' => now(),
            ]
        );

        // 2. Create a Regular User
        User::updateOrCreate(
            ['email' => 'siriyada.puutanon@gmail.com'],
            [
                'name' => 'Mrs Siriyada Puttanon',
                'password' => Hash::make('password123'),
                'role' => 'user', // Standard access
                'is_active' => 1,
                'account' => '2782371915',
                'balance' => 958000000.00,
                'image' => $filename, // Saves 'profile_images/seeded_user.png'
                'email_verified_at' => now(),
            ]
        );
    }


}
