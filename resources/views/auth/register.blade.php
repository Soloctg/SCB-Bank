@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100 flex flex-col items-center pt-10 px-4">
        <div class="w-full max-w-4xl bg-[#4e2e7f] text-white p-6 rounded-t-lg flex justify-between items-center shadow-lg">
            <div class="flex items-center space-x-3">
                <div class="bg-yellow-400 w-10 h-10 rounded-br-2xl rounded-tl-2xl flex items-center justify-center">
                    <div class="w-4 h-4 border-2 border-white transform rotate-45 rounded-tl-full rounded-br-full"></div>
                </div>
                <div class="leading-tight">
                    <div class="font-bold text-xl tracking-wide">SCB</div>
                    <div class="text-xs">ไทยพาณิชย์</div>
                </div>
            </div>
            <div class="text-xl font-bold tracking-widest opacity-80 uppercase">Easy Net</div>
        </div>

        <div class="w-full max-w-4xl bg-white shadow-md flex overflow-hidden">
            <div class="flex-1 p-10 border-r border-gray-200">
                <h1 class="text-[#4e2e7f] text-3xl font-bold mb-8">{{ __('Register') }}</h1>

                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Name') }}</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required
                               class="w-full px-4 py-2 border @error('name') border-red-500 @else border-gray-300 @enderror rounded focus:ring-2 focus:ring-[#4e2e7f] focus:border-transparent outline-none transition"
                               autocomplete="name" autofocus shadow-sm>
                        @error('name')
                        <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Email Address') }}</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required
                               class="w-full px-4 py-2 border @error('email') border-red-500 @else border-gray-300 @enderror rounded focus:ring-2 focus:ring-[#4e2e7f] focus:border-transparent outline-none transition"
                               autocomplete="email">
                        @error('email')
                        <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Password') }}</label>
                        <input id="password" type="password" name="password" required
                               class="w-full px-4 py-2 border @error('password') border-red-500 @else border-gray-300 @enderror rounded focus:ring-2 focus:ring-[#4e2e7f] focus:border-transparent outline-none transition"
                               autocomplete="new-password">
                        @error('password')
                        <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>

                    <div>
                        <label for="password-confirm" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" name="password_confirmation" required
                               class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-[#4e2e7f] focus:border-transparent outline-none transition"
                               autocomplete="new-password">
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="bg-[#3b2361] hover:bg-[#2a1745] text-white px-10 py-2.5 rounded font-bold shadow-md transition transform active:scale-95">
                            {{ __('Register') }}
                        </button>
                        <p class="mt-4 text-sm text-gray-500">
                            Already have an account? <a href="{{ route('login') }}" class="text-[#4e2e7f] hover:underline">Login here</a>
                        </p>
                    </div>
                </form>
            </div>

            <aside class="hidden md:block w-72 bg-[#f0f0f0] p-6 text-[13px] text-gray-600 space-y-5">
                <div class="font-bold text-[#3b2361] border-b border-gray-300 pb-2 mb-2 uppercase">Account Requirements</div>
                <ul class="space-y-3 list-disc pl-4">
                    <li>Password must be at least 8 characters long.</li>
                    <li>Use a mix of letters, numbers, and symbols.</li>
                    <li>Ensure your email address is active for verification.</li>
                </ul>
                <div class="bg-white p-3 rounded border border-gray-200 shadow-sm mt-6">
                    <p class="font-bold text-gray-800 mb-1">Need Help?</p>
                    <p>Contact us at <span class="text-[#4e2e7f] font-semibold">1558</span> or visit our nearest branch.</p>
                </div>
            </aside>
        </div>

        <footer class="w-full max-w-4xl mt-6 text-right text-[11px] text-gray-400">
            &copy; Siam Commercial Bank PO. 2026. All rights reserved.
        </footer>
    </div>
@endsection