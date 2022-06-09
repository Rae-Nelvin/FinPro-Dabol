<x-app-layout>
    <x-slot name="header">
        <div class="mx-auto flex flex-col justify-center pt-[66px] items-center">
            <h1 class="text-5xl font-medium text-center">Furniture For <br>
                Your Dream House
            </h1>
            <p class="mt-4 font-medium text-sm text-center">Find your way to the good living with out furniture!</p>
            <div class="bg-[#C69B7B]/50 flex rounded-full py-[6px] px-3 w-[424px] mt-[30px] justify-between items-center">
                <p class="pl-5 font-medium">Office Chair</p>
                <div class="bg-white px-[21px] py-[10px] w-[95px] rounded-full">
                    <p class="text-center font-medium">Search</p>
                </div>
            </div>
            <h2 class="pt-[82px] text-center font-semibold text-2xl">Produk Terlaris Saat Ini</h2>
        </div>
    </x-slot>
    
    <div class="pt-[125px] max-w-5xl mx-auto">
        <div class="flex space-x-20">
            <div class="space-y-2">
                <img src="{{ asset('assets/images/pict1.png') }}" alt="">
                <p class="font-medium text-sm">
                    <span class="font-bold">ELMATADORE</span><br>
                    Sofa Set, Light Brown, 285 x 200cm <br>
                    Rp 1,299,000,00
                    @if(Auth::user())
                    <button class="bg-[#C69B7B] w-full py-1 rounded-lg mt-2 hover:bg-[#b48f72] transition-colors">
                        <p class="text-white text-center font-bold text-base">Buy Here</p>
                    </button>
                    @else
                        <button class="bg-[#9e9d9c] w-full py-1 rounded-lg mt-2 hover:bg-[#777777] transition-colors">
                            <a href="{{ route('login') }}"><p class="text-white text-center font-bold text-base">Buy Here</p></a>
                        </button>
                    @endif
                </p>
            </div>
            <div class="space-y-2">
                <img src="{{ asset('assets/images/pict2.png') }}" alt="">
                <p class="font-medium text-sm">
                    <span class="font-bold">REXWEE</span><br>
                    Kursi Kecil, White <br>
                    Rp 1,199,000,00
                    @if(Auth::user())
                    <button class="bg-[#C69B7B] w-full py-1 rounded-lg mt-2 hover:bg-[#b48f72] transition-colors">
                        <p class="text-white text-center font-bold text-base">Buy Here</p>
                    </button>
                    @else
                        <button class="bg-[#9e9d9c] w-full py-1 rounded-lg mt-2 hover:bg-[#777777] transition-colors">
                            <a href="{{ route('login') }}"><p class="text-white text-center font-bold text-base">Buy Here</p></a>
                        </button>
                    @endif
                </p>
            </div>
            <div class="space-y-2">
                <img src="{{ asset('assets/images/pict3.png') }}" alt="">
                <p class="font-medium text-sm">
                    <span class="font-bold">TINWY</span><br>
                    Kursi Kecil, Brown <br>
                    Rp 1,199,000,00
                    <button class="bg-[#C69B7B] w-full py-1 rounded-lg mt-2 hover:bg-[#b48f72] transition-colors">
                        <p class="text-white text-center font-bold text-base">Buy Here</p>
                    </button>
                </p>
            </div>
        </div>
        <div class="flex space-x-20 mt-[76px]">
            <div class="space-y-2">
                <img src="{{ asset('assets/images/pict4.png') }}" alt="">
                <p class="font-medium text-sm">
                    <span class="font-bold">KURS</span><br>
                    Kursi Kecil, Black <br>
                    Rp 1,199,000,00
                    <button class="bg-[#C69B7B] w-full py-1 rounded-lg mt-2 hover:bg-[#b48f72] transition-colors">
                        <p class="text-white text-center font-bold text-base">Buy Here</p>
                    </button>
                </p>
            </div>
            <div class="space-y-2">
                <img src="{{ asset('assets/images/pict5.png') }}" alt="">
                <p class="font-medium text-sm">
                    <span class="font-bold">TABEL</span><br>
                    Meja Kecil, Brown <br>
                    Rp 1,199,000,00
                    <button class="bg-[#C69B7B] w-full py-1 rounded-lg mt-2 hover:bg-[#b48f72] transition-colors">
                        <p class="text-white text-center font-bold text-base">Buy Here</p>
                    </button>
                </p>
            </div>
            <div class="space-y-2">
                <img src="{{ asset('assets/images/pict6.png') }}" alt="">
                <p class="font-medium text-sm">
                    <span class="font-bold">DEKSO</span><br>
                    Meja Rias, Brown <br>
                    Rp 1,199,000,00
                    <button class="bg-[#C69B7B] w-full py-1 rounded-lg mt-2 hover:bg-[#b48f72] transition-colors">
                        <p class="text-white text-center font-bold text-base">Buy Here</p>
                    </button>
                </p>
            </div>
            <div class="space-y-2">
                <img src="{{ asset('assets/images/pict7.png') }}" alt="">
                <p class="font-medium text-sm">
                    <span class="font-bold">LAMPON</span><br>
                    Lampu, Bronze <br>
                    Rp 1,199,000,00
                    <button class="bg-[#C69B7B] w-full py-1 rounded-lg mt-2 hover:bg-[#b48f72] transition-colors">
                        <p class="text-white text-center font-bold text-base">Buy Here</p>
                    </button>
                </p>
            </div>
        </div>
    </div>

    <div class="mt-[62px] mitra h-[450px] pt-[125px]">
        <div class="flex-col">
            <h1 class="text-center font-bold text-2xl">Ingin Bermitra dengan kami</h1>
            <h2 class="text-center text-lg pt-3">
                Kami membuka peluang kepada para pengrajin furniture lokal agar dapat menjual <br>
                produk mereka dikancah internasional
            </h2>
            <div class="bg-[#C69B7B] py-4 rounded-lg w-[300px] mt-6 mx-auto cursor-pointer hover:bg-[#b48f72] transition-colors">
                <p class="text-white text-center font-bold">Pelajari lebih lanjut</p>
            </div>
        </div>
    </div>

</x-app-layout>
