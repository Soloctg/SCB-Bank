@extends('layouts.app')

@section('content')



    <div class="flex min-h-screen">
        <main class="flex-1 bg-white p-8">
            <h1 class="text-[#3b2361] text-3xl font-bold mb-6 tracking-tight">BANK ACCOUNT</h1>

            <div class="flex items-center space-x-4 mb-8 border-b pb-4">
                <div class="flex items-center bg-[#4e2e7f] text-white rounded-full px-6 py-2 shadow-sm">
                    <span class="bg-white text-[#4e2e7f] w-6 h-6 rounded-full flex items-center justify-center font-bold mr-3 text-sm">1</span>
                    <span class="font-medium">Balance</span>
                </div>
                <div class="flex items-center bg-[#d1c4e9] text-gray-600 rounded-full px-6 py-2">
                    <span class="bg-white text-gray-400 w-6 h-6 rounded-full flex items-center justify-center font-bold mr-3 text-sm">2</span>
                    <span class="font-medium">Today's Statement Transaction</span>
                </div>
                <div class="flex items-center bg-[#d1c4e9] text-gray-600 rounded-full px-6 py-2">
                    <span class="bg-white text-gray-400 w-6 h-6 rounded-full flex items-center justify-center font-bold mr-3 text-sm">3</span>
                    <span class="font-medium">Account Type</span>
                </div>
            </div>

            <div class="bg-gray-100 rounded-xl p-8 mb-4 relative shadow-inner">
                <div class="flex items-start justify-between">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-8 bg-gray-400 rounded-md opacity-50 shadow-sm"></div>
                        <div>
                            <p class="font-bold text-gray-700">Savings</p>
                            <p class="text-sm text-gray-600">278-237191-5</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="text-4xl font-light text-gray-800">958,000,000</span>
                        <span class="text-xl ml-2 text-gray-600">บาทไทย</span>
                    </div>
                </div>
            </div>

            <div class="bg-gray-200 text-center py-2 text-sm text-gray-600 mb-8 rounded-sm">
                Tab to view more details
            </div>

            <div class="flex justify-center space-x-2 mb-10">
                <div class="w-2.5 h-2.5 rounded-full bg-[#3b2361]"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-gray-300"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-gray-300"></div>
            </div>

            <div class="bg-gray-100 rounded-lg p-6 flex items-center justify-center border-2 border-dashed border-gray-300 hover:border-[#4e2e7f] cursor-pointer group transition-colors">
                <div class="flex items-center space-x-3">
                    <span class="text-2xl font-bold text-[#4e2e7f]">+</span>
                    <span class="text-[#4e2e7f] font-bold">Add Account</span>
                </div>
            </div>
        </main>

        <aside class="w-48 bg-gray-200 border-l border-gray-300"></aside>
    </div>

    <footer class="bg-white py-4 px-10 text-right border-t text-xs text-gray-500">
        Siam Commercial Bank PO. 2026. All rights reserved
    </footer>

@endsection
