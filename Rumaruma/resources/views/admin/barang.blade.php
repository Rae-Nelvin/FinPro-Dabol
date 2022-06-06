@extends('layouts.admin')

@section('content')

    <div class="flex pt-20 max-w-6xl mx-auto space-x-4 pb-20">
        <div class="flex flex-col w-1/3 bg-[#C69B7B] pt-14 px-11 pb-8 justify-between rounded-2xl">
            <div class="flex flex-col space-y-8">
                <a href="{{ route('admin/dashboard') }}"><h2 class="text-white text-2xl font-bold">Manage Transactions</h2></a>
                <hr class="bg-white">
                <a href="{{ route('admin/barang') }}"><h2 class="text-white text-2xl font-bold">Manage Barang</h2></a>
                <hr class="bg-white">
            </div>
            <h2 class="text-2xl text-red-600 font-bold text-center">Logout</h2>
        </div>
        <div class="flex flex-col w-2/3 bg-white pt-14 px-11 pb-8 rounded-2xl">
            <div class="flex justify-between">
                <h1 class="text-3xl font-bold">Manage Barang</h1>
                <button class="bg-[#C69B7B] py-2 px-8 text-center text-white font-bold text-lg rounded-xl hover:bg-[#a07d63] transition-colors">Tambah Barang</button>
            </div>
            <div class="mt-16">
                <table id="datatables">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Barang ID</td>
                            <td>Stock</td>
                            <td>Harga</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>9 Square VIP Residence</td>
                            <td>Verified</td>
                            <td>Pesanggrahan</td>
                            <td>
                                <button class="py-2 px-4 text-center text-white bg-blue-500 rounded-2xl">Detail</button>
                                <button class="py-2 px-4 text-center text-white bg-green-500 rounded-2xl">Edit</button>
                                <button class="py-2 px-4 text-center text-white bg-red-500 rounded-2xl mt-2">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>9 Square VIP Residence</td>
                            <td>Verified</td>
                            <td>Pesanggrahan</td>
                            <td>
                                <button class="py-2 px-4 text-center text-white bg-blue-500 rounded-2xl">Detail</button>
                                <button class="py-2 px-4 text-center text-white bg-green-500 rounded-2xl">Edit</button>
                                <button class="py-2 px-4 text-center text-white bg-red-500 rounded-2xl mt-2">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>9 Square VIP Residence</td>
                            <td>Verified</td>
                            <td>Pesanggrahan</td>
                            <td>
                                <button class="py-2 px-4 text-center text-white bg-blue-500 rounded-2xl">Detail</button>
                                <button class="py-2 px-4 text-center text-white bg-green-500 rounded-2xl">Edit</button>
                                <button class="py-2 px-4 text-center text-white bg-red-500 rounded-2xl mt-2">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>9 Square VIP Residence</td>
                            <td>Verified</td>
                            <td>Pesanggrahan</td>
                            <td>
                                <button class="py-2 px-4 text-center text-white bg-blue-500 rounded-2xl">Detail</button>
                                <button class="py-2 px-4 text-center text-white bg-green-500 rounded-2xl">Edit</button>
                                <button class="py-2 px-4 text-center text-white bg-red-500 rounded-2xl mt-2">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>9 Square VIP Residence</td>
                            <td>Verified</td>
                            <td>Pesanggrahan</td>
                            <td>
                                <button class="py-2 px-4 text-center text-white bg-blue-500 rounded-2xl">Detail</button>
                                <button class="py-2 px-4 text-center text-white bg-green-500 rounded-2xl">Edit</button>
                                <button class="py-2 px-4 text-center text-white bg-red-500 rounded-2xl mt-2">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#datatables').DataTable({
                "bLengthChange" : false,
                pageLength: 5,
            });
        });
    </script>

@endsection