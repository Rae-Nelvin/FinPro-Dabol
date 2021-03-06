<x-app-layout>
    <x-slot name="header">
        <div class="w-full bg-[#C69B7B]">
            <div class="max-w-6xl py-8 mx-auto">
                <h1 class="text-white font-semibold text-2xl">Home / Product / Product-Detail</h1>
            </div>
        </div>
    </x-slot>

    <div class="max-w-6xl mx-auto pb-[231px]">
        <div class="flex pt-16">
            <div class="flex-col w-1/2">
                <img src="/barangImage/{{ $data->image }}" class="w-[554px]" alt="">
                <div class="flex space-x-7 mt-7">
                    <img src="/barangImage/{{ $data->image }}" class="w-[165px]" alt="">
                    <img src="/barangImage/{{ $data->image }}" class="w-[165px]" alt="">
                    <img src="/barangImage/{{ $data->image }}" class="w-[165px]" alt="">
                </div>
            </div>
            <div class="flex-col w-1/2 pl-[72px]">
                <h3 class="font-semibold text-2xl text-[#6A3B2B]">{{ $data->name }}</h3>
                <h1 class="font-semibold text-5xl mt-[11px] text-[#6A3B2B]">{{ $data->category }}</h1>
                <h2 class="font-semibold text-[32px] mt-14 text-[#6A3B2B]">Rp {{ $data->price }}</h2>
                <p class="mt-14 text-[#9D9EA0] leading-[32px]">{{ $data->description }}</p>
                <form action="{{ route('user/productDetail') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <button class="bg-[#C69B7B] w-[327px] py-4 rounded-lg mt-14 hover:bg-[#b48f72]">
                        <h3 class="font-bold text-white text-center">Add to cart</h3>
                    </button>
                </form>
            </div>
        </div>
        <h1 class="font-semibold text-[32px] mt-[70px]">Maybe You Like it</h1>
        <div class="flex mt-[53px] justify-between px-[54px]">
            @foreach ($like as $barang)
            <div>
                <img src="/barangImage/{{ $barang->image }}" class="w-[197px]" alt="">
                <h1 class="font-bold text-sm mt-2">{{ $barang->name }}</h1>
                <p class="font-medium text-sm">{{ $barang->category }}<br>
                    Rp {{ $barang->price }}
                </p>
                <a href="{{ route('productDetail', $barang->id) }}"><button class="bg-[#C69B7B] w-full py-2 mt-2 rounded-3xl hover:bg-[#b48f72]"><p class="font-bold text-white">Buy Now</p></button></a>
            </div>
            @endforeach
        </div>
    </div>

</x-app-layout>