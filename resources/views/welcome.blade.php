@extends('layouts.app')

@section('content')



        <div class="min-h-screen flex flex-col">

            <nav class="sticky top-0 z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-100 dark:border-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16 lg:h-20 items-center">

                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 lg:w-10 lg:h-10 bg-indigo-600 rounded-xl flex items-center justify-center shadow-lg shadow-indigo-500/20">
                                <span class="text-white font-bold text-xl">S</span>
                            </div>
                            <span class="text-lg lg:text-xl font-bold tracking-tight uppercase">{{ config('app.name', 'NexusBank') }}</span>
                        </div>

                        <div class="hidden md:flex space-x-8 text-sm font-medium">
                            <a href="#" class="hover:text-indigo-600 transition">Personal</a>
                            <a href="#" class="hover:text-indigo-600 transition">Business</a>
                            <a href="#" class="hover:text-indigo-600 transition">Invest</a>
                            <a href="#" class="hover:text-indigo-600 transition">Security</a>
                        </div>

                        <div class="flex items-center gap-3 lg:gap-6">
                            @guest
                                @if (Route::has('login'))
                                    <a href="/login" class="text-sm font-semibold hidden sm:block">Login</a>
                                @endif


                                <a href="/register" class="bg-indigo-600 text-white px-4 py-2 lg:px-6 lg:py-2.5 rounded-full text-sm font-semibold hover:bg-indigo-700 transition shadow-md">
                                    Open Account
                                </a>
                                <button class="md:hidden p-2 text-gray-600 dark:text-gray-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                                </button>

                            @else
                                {{ Auth::user()->name }}

                                <a class="bg-indigo-600 text-white px-4 py-2 lg:px-6 lg:py-2.5 rounded-full text-sm font-semibold hover:bg-indigo-700 transition shadow-md" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            @endguest
                        </div>
                    </div>
                </div>
            </nav>

            <main class="flex-grow">
                <section class="relative py-12 md:py-20 lg:py-32 overflow-hidden">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">

                            <div class="text-center lg:text-left order-2 lg:order-1">
                        <span class="inline-block px-4 py-1.5 mb-6 text-[10px] lg:text-xs font-semibold tracking-widest text-indigo-600 uppercase bg-indigo-50 dark:bg-indigo-900/20 rounded-full">
                            New: High-Yield Savings (4.5% APY)
                        </span>
                                <h1 class="hero-title font-extrabold mb-6 tracking-tight">
                                    Banking built for the <span class="text-indigo-600">future.</span>
                                </h1>
                                <p class="text-base lg:text-lg text-gray-600 dark:text-gray-400 mb-10 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                                    Manage your finances, invest in your future, and secure your wealth with our all-in-one digital banking platform.
                                </p>
                                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                                    <button class="w-full sm:w-auto px-8 py-4 bg-gray-900 dark:bg-white dark:text-gray-900 text-white rounded-2xl font-bold hover:scale-[1.02] active:scale-95 transition-all">
                                        Get Started Today
                                    </button>
                                    <button class="w-full sm:w-auto px-8 py-4 border border-gray-200 dark:border-gray-700 rounded-2xl font-bold flex items-center justify-center gap-2 hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                                        <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"/></svg>
                                        Watch Demo
                                    </button>
                                </div>
                            </div>

                            <div class="order-1 lg:order-2 px-4 lg:px-0">
                                <div class="relative max-w-md mx-auto lg:max-w-none">
                                    <div class="credit-card-tilt relative z-10 bg-gradient-to-br from-indigo-600 via-indigo-500 to-purple-600 rounded-[2rem] p-6 lg:p-10 aspect-[1.6/1] shadow-2xl flex flex-col justify-between text-white hover:rotate-0 transition duration-700 ease-out">
                                        <div class="flex justify-between items-start">
                                            <div class="text-xl lg:text-2xl font-bold italic tracking-wider">NEXUS</div>
                                            <div class="w-10 h-8 lg:w-12 lg:h-10 bg-white/20 rounded-md backdrop-blur-md border border-white/20"></div>
                                        </div>
                                        <div>
                                            <div class="text-lg lg:text-2xl font-mono tracking-[0.15em] mb-4">**** **** **** 8842</div>
                                            <div class="flex justify-between items-end">
                                                <div>
                                                    <p class="text-[8px] lg:text-[10px] uppercase opacity-60 mb-1">Card Holder</p>
                                                    <p class="text-sm lg:text-base font-medium">ALEXANDER DUMAS</p>
                                                </div>
                                                <div class="flex -space-x-3">
                                                    <div class="w-8 h-8 lg:w-10 lg:h-10 bg-red-500/80 rounded-full"></div>
                                                    <div class="w-8 h-8 lg:w-10 lg:h-10 bg-yellow-500/80 rounded-full"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 lg:w-72 lg:h-72 bg-indigo-500 rounded-full blur-[80px] lg:blur-[120px] opacity-30"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-16 lg:py-24 bg-gray-50 dark:bg-gray-800/30">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="text-center max-w-2xl mx-auto mb-16">
                            <h2 class="text-3xl lg:text-4xl font-bold mb-4">Why choose {{ config('app.name', 'Nexus') }}?</h2>
                            <p class="text-gray-600 dark:text-gray-400">Everything you need to master your money in one secure application.</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                            @foreach([
                                ['title' => 'Military-Grade Security', 'desc' => 'Your data is encrypted with AES-256 and protected by multi-factor authentication.', 'icon' => 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z'],
                                ['title' => 'Instant Transfers', 'desc' => 'Send money to anyone, anywhere in the world, in under 60 seconds.', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                                ['title' => 'Smart Budgeting', 'desc' => 'AI-driven insights that help you save an average of $450 every month.', 'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z']
                            ] as $feature)
                                <div class="group p-8 lg:p-10 bg-white dark:bg-gray-900 rounded-[2rem] border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                                    <div class="w-12 h-12 bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"></path></svg>
                                    </div>
                                    <h3 class="text-xl font-bold mb-4 tracking-tight">{{ $feature['title'] }}</h3>
                                    <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">{{ $feature['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </main>

            <footer class="py-12 border-t border-gray-100 dark:border-gray-800">
                <div class="max-w-7xl mx-auto px-4 px-8 flex flex-col md:flex-row justify-between items-center gap-6 text-gray-500 text-xs lg:text-sm">
                    <p>&copy; {{ date('Y') }} {{ config('app.name', 'NexusBank') }} International. Member FDIC.</p>
                    <div class="flex gap-6">
                        <a href="#" class="hover:text-indigo-600">Privacy Policy</a>
                        <a href="#" class="hover:text-indigo-600">Terms of Service</a>
                    </div>
                </div>
            </footer>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif

@endsection