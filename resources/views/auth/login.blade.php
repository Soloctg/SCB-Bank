@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100 flex flex-col items-center pt-10">
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
            <div class="text-xl font-bold tracking-widest opacity-80">EASY NET</div>
        </div>

        <div class="w-full max-w-4xl bg-white shadow-md flex">
            <div class="flex-1 p-10 border-r border-gray-200">
                <h1 class="text-[#4e2e7f] text-3xl font-bold mb-8">{{ __('Login') }}</h1>

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Email Address') }}</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required
                               class="w-full px-4 py-2 border @error('email') border-red-500 @else border-gray-300 @enderror rounded focus:ring-2 focus:ring-[#4e2e7f] focus:border-transparent outline-none transition"
                               autocomplete="email" autofocus>
                        @error('email')
                        <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Password') }}</label>
                        <input id="password" type="password" name="password" required
                               class="w-full px-4 py-2 border @error('password') border-red-500 @else border-gray-300 @enderror rounded focus:ring-2 focus:ring-[#4e2e7f] focus:border-transparent outline-none transition">
                        @error('password')
                        <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                        class="h-4 w-4 text-[#4e2e7f] focus:ring-[#4e2e7f] border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-600">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="flex items-center space-x-4 pt-4">
                        <button type="submit" class="bg-[#3b2361] hover:bg-[#2a1745] text-white px-8 py-2 rounded font-bold shadow-md transition transform active:scale-95">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-[#4e2e7f] hover:underline" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>

            <aside class="w-64 bg-[#f0f0f0] p-6 text-[13px] text-gray-600 space-y-4">
                <div class="font-bold text-gray-800 border-b border-gray-300 pb-2 mb-2">Security Tips</div>
                <p>- Never share your password with anyone.</p>
                <p>- Ensure you are on the official <strong>scbeasy.com</strong> domain.</p>
                <p>For inquiries, please contact our support team at the registered bank email.</p>
            </aside>
        </div>

        <footer class="w-full max-w-4xl mt-4 text-right text-[11px] text-gray-500">
            Siam Commercial Bank PO. 2026. All rights reserved.
        </footer>
    </div>
@endsection