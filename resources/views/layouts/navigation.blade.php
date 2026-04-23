<header class="bg-[#4e2e7f] text-white">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="flex items-center space-x-3">
            <div class="bg-yellow-400 w-10 h-10 rounded-br-2xl rounded-tl-2xl flex items-center justify-center relative">
                <div class="w-4 h-4 border-2 border-white transform rotate-45 rounded-tl-full rounded-br-full"></div>
            </div>
            <div class="leading-tight">
                <div class="font-bold text-xl leading-none tracking-wide">SCB</div>
                <div class="text-[13px]">ไทยพาณิชย์</div>
            </div>
        </div>
        <div class="text-xl font-bold tracking-widest text-gray-200">EASY NET</div>
    </div>

    <div class="bg-[#9d81bb] px-4 pt-2">
        <div class="flex space-x-1 overflow-x-auto items-end">

            <a href="{{ route('home') }}"
               class="{{ Route::is('home') ? 'bg-[#4e2e7f]' : 'bg-[#c4b3d8] hover:bg-[#8369a3]' }} text-white px-4 py-2 rounded-t-md text-sm whitespace-nowrap text-center leading-tight">
                {{ __('My Account') }}
            </a>

            <button class="bg-[#c4b3d8] text-white hover:bg-[#8369a3] px-4 py-2 rounded-t-md text-sm whitespace-nowrap text-center leading-tight">Fund <br>Transfer</button>
            <button class="bg-[#c4b3d8] text-white hover:bg-[#8369a3] px-4 py-2 rounded-t-md text-sm whitespace-nowrap text-center leading-tight">Payment <br>& E-bill</button>

            <a href="{{ route('card-services') }}"
               class="{{ Route::is('card-services') ? 'bg-[#4e2e7f] shadow-md' : 'bg-[#c4b3d8] hover:bg-[#8369a3]' }} text-white px-4 py-2 rounded-t-md text-sm whitespace-nowrap text-center leading-tight">
                {{ __('Card Services') }}
            </a>

            <button class="bg-[#c4b3d8] text-white hover:bg-[#8369a3] px-4 py-2 rounded-t-md text-sm whitespace-nowrap">SMS Alert</button>
            <button class="bg-[#c4b3d8] text-white hover:bg-[#8369a3] px-4 py-2 rounded-t-md text-sm whitespace-nowrap text-center">Investment</button>
            <button class="bg-[#c4b3d8] text-white hover:bg-[#8369a3] px-4 py-2 rounded-t-md text-sm whitespace-nowrap text-center">Setting</button>
        </div>
    </div>

    <div class="bg-[#3b2361] px-10 py-1 flex space-x-6 text-xs border-t border-[#6b4e9c]">
        <span class="cursor-pointer border-r border-white pr-6">Account Details</span>
        <span class="cursor-pointer">Account Summary</span>
    </div>
</header>

<div class="bg-white border-b flex justify-end items-center px-4 py-1.5 space-x-4">
    <div class="flex items-center space-x-3 border-r pr-4">
        <img src="https://ui-avatars.com/api/?name=Siriyada+Puttanon&background=random" class="w-9 h-9 rounded-full border border-gray-300" alt="User Profile">
        <span class="text-[#4e2e7f] text-sm font-medium">Mrs Siriyada Puttanon</span>
    </div>

    <button class="text-xs font-bold border px-2 py-1 rounded hover:bg-gray-100">

        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Log out') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </button>
</div>