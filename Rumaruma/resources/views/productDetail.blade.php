<x-app-layout>
    <x-slot name="header">
        <div class="w-full bg-[#C69B7B] mt-8">
            <div class="max-w-6xl py-8 mx-auto">
                <h1 class="text-white font-semibold text-2xl">Home / Product / Product-Detail</h1>
            </div>
        </div>
    </x-slot>

    <div class="max-w-6xl mx-auto mb-[231px]">
        <div class="flex mt-16">
            <div class="flex-col w-1/2">
                <img src="{{ asset('assets/images/pict9.png') }}" class="w-[554px]" alt="">
                <div class="flex space-x-7 mt-7">
                    <img src="{{ asset('assets/images/pict9.png') }}" class="w-[165px]" alt="">
                    <img src="{{ asset('assets/images/pict9.png') }}" class="w-[165px]" alt="">
                    <img src="{{ asset('assets/images/pict9.png') }}" class="w-[165px]" alt="">
                </div>
            </div>
            <div class="flex-col w-1/2 pl-[72px]">
                <h3 class="font-semibold text-2xl text-[#6A3B2B]">Chair</h3>
                <h1 class="font-semibold text-5xl mt-[11px] text-[#6A3B2B]">White Chair</h1>
                <h2 class="font-semibold text-[32px] mt-14 text-[#6A3B2B]">Rp499,000,00</h2>
                <p class="mt-14 text-[#9D9EA0] leading-[32px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt cras tellus arcu gravida semper mi fringilla eu. Leo euismod ultrices sed natoque est molestie at. Egestas gravida pharetra, facilisi libero. Venenatis sagittis duis sed .cursus erat nibh. Sit massa mollis senectus gravida sit ornare sit magna. Nullam facilisis placerat congue et elit. Elit sed at montes, integer.
                    Fermentum accumsan id pellentesque varius cras mattis dictum lectus. Rutrum pellentesque donec amet risus tempus elit mattis. Nec amet metus dignissim enim lacus. Condimentum id lobortis cras auctor ac risus in in. Faucibus aliquam vitae amet, gravida tellus. Metus, urna sed gravida cursus urna in non mattis nullam.</p>
                <button class="bg-[#C69B7B] w-[327px] py-4 rounded-lg mt-14">
                    <h3 class="font-bold text-white text-center">Add to cart</h3>
                </button>
            </div>
        </div>
        <h1 class="font-semibold text-[32px] mt-[70px]">Maybe You Like it</h1>
        <div class="flex mt-[53px] justify-between px-[54px]">
            <div>
                <img src="{{ asset('assets/images/pict2.png') }}" class="w-[197px]" alt="">
                <h1 class="font-bold text-sm mt-2">KURS</h1>
                <p class="font-medium text-sm">Kursi Kecil, Black <br>
                    Rp 1,199,000,00
                </p>
                <button class="bg-[#C69B7B] w-full py-2 mt-2 rounded-3xl"><p class="font-bold text-white">Buy Now</p></button>
            </div>
            <div>
                <img src="{{ asset('assets/images/pict3.png') }}" class="w-[197px]" alt="">
                <h1 class="font-bold text-sm mt-2">TABEL</h1>
                <p class="font-medium text-sm">Meja Kecil, Brown <br>
                    Rp 1,199,000,00
                </p>
                <button class="bg-[#C69B7B] w-full py-2 mt-2 rounded-3xl"><p class="font-bold text-white">Buy Now</p></button>
            </div>
            <div>
                <img src="{{ asset('assets/images/pict4.png') }}" class="w-[197px]" alt="">
                <h1 class="font-bold text-sm mt-2">DEKSO</h1>
                <p class="font-medium text-sm">Meja Rias, Brown <br>
                    Rp 1,199,000,00
                </p>
                <button class="bg-[#C69B7B] w-full py-2 mt-2 rounded-3xl"><p class="font-bold text-white">Buy Now</p></button>
            </div>
            <div>
                <img src="{{ asset('assets/images/pict5.png') }}" class="w-[197px]" alt="">
                <h1 class="font-bold text-sm mt-2">LAMPON</h1>
                <p class="font-medium text-sm">Lampu, Bronze <br>
                    Rp 1,199,000,00
                </p>
                <button class="bg-[#C69B7B] w-full py-2 mt-2 rounded-3xl"><p class="font-bold text-white">Buy Now</p></button>
            </div>
        </div>
    </div>

</x-app-layout>