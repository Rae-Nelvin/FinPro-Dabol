<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'name' => 'ELMATADORE',
            'category' => 'Kursi',
            'price' => 12999000,
            'stock' => 100,
            'description' => 'sofa set, light brown, 285x200 cm',
            'image' => 'Kursi/Pict 1.png'
        ]);

        Barang::create([
            'name' => 'REXWEE',
            'category' => 'Kursi',
            'price' => 10999000,
            'stock' => 100,
            'description' => 'Kursi Kecil, White',
            'image' => 'Kursi/Pict 2.png'
        ]);

        Barang::create([
            'name' => 'TINWY',
            'category' => 'Kursi',
            'price' => 9999000,
            'stock' => 100,
            'description' => 'Kursi Kecil, Brown',
            'image' => 'Kursi/Pict 3.png'
        ]);

        Barang::create([
            'name' => 'KURS',
            'category' => 'Kursi',
            'price' => 11999000,
            'stock' => 100,
            'description' => 'Kursi Kecil, Black',
            'image' => 'Kursi/Pict 4.png'
        ]);

        Barang::create([
            'name' => 'TABEL',
            'category' => 'Meja',
            'price' => 12999000,
            'stock' => 100,
            'description' => 'Meja Kecil, Brown',
            'image' => 'Meja/Pict 4.png'
        ]);

        Barang::create([
            'name' => 'DEKSO',
            'category' => 'Meja',
            'price' => 14999000,
            'stock' => 100,
            'description' => 'Meja Rias, Brown',
            'image' => 'Meja/Pict 5.png'
        ]);

        Barang::create([
            'name' => 'LAMPON',
            'category' => 'Lampu',
            'price' => 899000,
            'stock' => 100,
            'description' => 'Lampu, Bronze',
            'image' => 'Lampu/Pict 6.png'
        ]);
    }
}
