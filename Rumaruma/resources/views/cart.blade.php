<x-app-layout>

    <x-slot name="header">
    </x-slot>

    <div class="flex max-w-6xl mx-auto justify-between pt-14 space-x-16 pb-10">
        <div class="w-2/3 flex flex-col">
            <h1 class="font-bold text-4xl text-[#6A3B2B]">Your Cart</h1>
            <div class="flex justify-between mt-7 mb-11 items-center">
                <div class="flex">
                    <img src="{{ asset('assets/images/pict3.png') }}" class="w-[170px]" alt="">
                    <div class="flex flex-col ml-11">
                        <h1 class="text-[#C69B7B] font-bold text-4xl mt-4">WHIT</h1>
                        <p class="text-[#C69B7B] font-medium text-xl mt-3">Rp499,000,00</p>
                        <div class="flex-col mt-8">
                            <p class="text-xl">Kondisi : Baru</p>
                            <p class="text-xl">Berat : 25 KG</p>
                            <p class="text-xl">Kategori : <span class="font-bold">Kursi</span></p>
                        </div>
                    </div>
                </div>
                <div class="flex space-x-10">
                    <p class="text-xl font-semibold">-</p>
                    <p class="text-xl font-semibold">2</p>
                    <p class="text-xl font-semibold">+</p>
                    <p class="text-xl font-semibold">Stok 5</p>
                </div>
            </div>
            <div class="flex justify-between mt-7 mb-11 items-center">
                <div class="flex">
                    <img src="{{ asset('assets/images/pict3.png') }}" class="w-[170px]" alt="">
                    <div class="flex flex-col ml-11">
                        <h1 class="text-[#C69B7B] font-bold text-4xl mt-4">WHIT</h1>
                        <p class="text-[#C69B7B] font-medium text-xl mt-3">Rp499,000,00</p>
                        <div class="flex-col mt-8">
                            <p class="text-xl">Kondisi : Baru</p>
                            <p class="text-xl">Berat : 25 KG</p>
                            <p class="text-xl">Kategori : <span class="font-bold">Kursi</span></p>
                        </div>
                    </div>
                </div>
                <div class="flex space-x-10">
                    <p class="text-xl font-semibold">-</p>
                    <p class="text-xl font-semibold">2</p>
                    <p class="text-xl font-semibold">+</p>
                    <p class="text-xl font-semibold">Stok 5</p>
                </div>
            </div>
            <div class="flex justify-between mt-7 mb-11 items-center">
                <div class="flex">
                    <img src="{{ asset('assets/images/pict3.png') }}" class="w-[170px]" alt="">
                    <div class="flex flex-col ml-11">
                        <h1 class="text-[#C69B7B] font-bold text-4xl mt-4">WHIT</h1>
                        <p class="text-[#C69B7B] font-medium text-xl mt-3">Rp499,000,00</p>
                        <div class="flex-col mt-8">
                            <p class="text-xl">Kondisi : Baru</p>
                            <p class="text-xl">Berat : 25 KG</p>
                            <p class="text-xl">Kategori : <span class="font-bold">Kursi</span></p>
                        </div>
                    </div>
                </div>
                <div class="flex space-x-10">
                    <p class="text-xl font-semibold">-</p>
                    <p class="text-xl font-semibold">2</p>
                    <p class="text-xl font-semibold">+</p>
                    <p class="text-xl font-semibold">Stok 5</p>
                </div>
            </div>
        </div>
        <div class="w-1/3 flex flex-col">
            <h1 class="font-semibold text-2xl text-[#6A3B2B]">Shipping Details</h1>
            <form action="#" action="POST" class="flex flex-col mt-10" id="usrform">
                @csrf
                <label for="Name">Name</label>
                <input type="text" name="name" placeholder="Input your name" class="font-semibold border border-[#E7E5F4] rounded-xl mt-2" required>
                <label for="Phone" class="mt-8">Phone</label>
                <input type="tel" name="phone" placeholder="Input your phone number" class="font-semibold border border-[#E7E5F4] rounded-xl mt-2" required>
                <label for="Address" class="mt-8">Address</label>
                <textarea type="text" name="address" placeholder="Input your address" class="font-semibold border border-[#E7E5F4] rounded-xl mt-2 h-[145px]" form="usrform" required></textarea>
                <label for="Payment" class="font-semibold text-2xl text-[#6A3B2B] mt-10">Payment</label>
                <div class="flex justify-between space-x-2 mt-3">
                    <div class="flex w-1/2 justify-between items-center">
                        <input type="radio" name="payment" value="bca">
                        <div class="w-full ml-2 border border-[#E7E5F4] flex items-center justify-center mx-auto py-3 rounded-xl">
                            <img src="{{ asset('assets/images/BCAIcon.png') }}" class="w-[107px]" alt="">
                        </div>
                    </div>
                    <div class="flex w-1/2 justify-between items-center">
                        <input type="radio" name="payment" value="mandiri">
                        <div class="w-full ml-2 border border-[#E7E5F4] flex items-center justify-center mx-auto py-3 rounded-xl">
                            <img src="{{ asset('assets/images/MandiriIcon.png') }}" class="w-[107px]" alt="">
                        </div>
                    </div>
                </div>
                <h2 class="font-semibold text-2xl mt-8">Total</h2>
                <h2 class="font-semibold text-2xl mt-2">Rp900,000,00</h2>
                <button class="mt-8 w-full bg-[#C69B7B] py-3 rounded-xl text-center font-bold text-white">Checkout</button>
            </form>
        </div>
    </div>

</x-app-layout>