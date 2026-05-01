@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Edit User: {{ $user->name }}</div>
            <div class="card-body">

                @if (session('status'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-sm">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('profile.image.update') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-gray-50 rounded-lg">
                    @csrf

                    <label class="block text-sm font-medium text-gray-700 mb-2">Change Profile Picture</label>
                    <div class="flex items-center space-x-3">
                        <input type="file" name="image" class="text-xs">
                        <button type="submit" class="bg-[#4e2e7f] text-white px-3 py-1 rounded text-xs hover:bg-[#3b2361]">
                            Upload
                        </button>
                    </div>
                </form>


                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf

                    <div class="flex flex-col items-center mb-6">
                        <img src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                             class="w-24 h-24 rounded-full border-4 border-[#d1c4e9] object-cover mb-2">
                        <span class="text-xs text-gray-500">Current Profile Picture</span>
                    </div>

                    @method('PUT') <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                    </div>

                    <div class="mb-3">
                        <label>Role</label>
                        <select name="role" class="form-control">
                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Status</label>
                        <select name="is_active" class="form-control">
                            <option value="1" {{ $user->is_active ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ !$user->is_active ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Balance</label>
                        <input type="number" step="0.01" name="balance" class="form-control" value="{{ $user->balance }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update User</button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection