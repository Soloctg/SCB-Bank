
@extends('layouts.app')

@section('content')



<div class="flex mx-auto bg-white min-h-[700px]">
    <main class="flex-1 p-8 pr-16">

        <h1 class="text-[#4e2e7f] text-3xl font-bold mb-6 tracking-tight">Setup Card Limit</h1>

        <div class="flex items-center space-x-4 mb-6 border-b-2 border-gray-300 pb-4">
            <div class="flex items-center bg-[#e0d6eb] text-gray-700 rounded-full px-6 py-1.5 shadow-sm">
                <span class="bg-white text-gray-500 w-5 h-5 rounded-full flex items-center justify-center font-bold mr-3 text-xs">1</span>
                <span class="font-medium text-sm">Limit Details</span>
            </div>
            <div class="flex items-center bg-[#3b2361] text-white rounded-full px-6 py-1.5 shadow-md">
                <span class="bg-white text-[#3b2361] w-5 h-5 rounded-full flex items-center justify-center font-bold mr-3 text-xs">2</span>
                <span class="font-medium text-sm">Review & Confirm</span>
            </div>
            <div class="flex items-center bg-[#e0d6eb] text-gray-700 rounded-full px-6 py-1.5">
                <span class="bg-white text-gray-500 w-5 h-5 rounded-full flex items-center justify-center font-bold mr-3 text-xs">3</span>
                <span class="font-medium text-sm">Summary</span>
            </div>
        </div>

        <h2 class="text-[#3b2361] text-xl font-bold mb-6">Review and Confirm limit</h2>

        <div class="space-y-4 text-[15px] text-gray-800">

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-4 pl-4 text-gray-700">Debit card no.</div>
                <div class="col-span-8">5404 8804 9093 4621</div>
            </div>

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-4 pl-4 text-gray-700">Card Withdrawal Limit</div>
                <div class="col-span-8">ไม่จำกัด</div>
            </div>

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-4 pl-4 text-gray-700">Activation</div>
                <div class="col-span-8">บน</div>
            </div>

            <hr class="border-gray-400 my-4">

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-4 pl-4 text-gray-700">Card Purchase Limit</div>
                <div class="col-span-8">ไม่จำกัด</div>
            </div>

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-4 pl-4 text-gray-700">Activation</div>
                <div class="col-span-8">บน</div>
            </div>

            <hr class="border-gray-400 my-4">

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-4 pl-4 text-gray-700">Online Purchase Limit</div>
                <div class="col-span-8">ไม่จำกัด</div>
            </div>

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-4 pl-4 text-gray-700">Activation</div>
                <div class="col-span-8">บน</div>
            </div>

            <hr class="border-gray-400 my-4">
        </div>

        <div class="flex justify-center space-x-6 mt-10">
            <button class="bg-[#d1bfe3] hover:bg-[#bba3d4] text-[#3b2361] w-32 py-2 rounded font-medium transition-colors">Back</button>
            <button class="bg-[#3b2361] hover:bg-[#2a1745] text-white w-32 py-2 rounded font-bold shadow-md transition-colors">Confirm</button>
            <button class="bg-[#d1bfe3] hover:bg-[#bba3d4] text-[#3b2361] w-32 py-2 rounded font-medium transition-colors">Cancel</button>
        </div>

    </main>

    <aside class="w-64 bg-[#f0f0f0] border-l border-gray-300 p-6 flex flex-col pt-32 space-y-6 text-[13px] text-gray-700">
        <p>- The max of Debit card is Unlimited Baht/Card/Day</p>

        <p>- The Max Limit of Debit's MasterCard = Unlimited Baht/Card/Day</p>

        <p>should you any inquiries concerning our services please contact SCB Via Email Address at <a href="mailto:siamcommercialbank03@gmail.com" class="text-[#3b2361] hover:underline">siamcommercialbank03@gmail.com</a></p>
    </aside>
</div>


@endsection