<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    public function run()
    {
        Barang::create([
            'nama_barang' => 'Laptop ASUS',
            'id_kategori' => 1, // Elektronik
            'id_supplier' => 1, // Supplier A
            'harga' => 15000000.00,
            'stok' => 10,
            'tanggal_masuk' => now(),
        ]);

        Barang::create([
            'nama_barang' => 'Kemeja Formal',
            'id_kategori' => 2, 
            'id_supplier' => 2, 
            'harga' => 250000.00,
            'stok' => 20,
            'tanggal_masuk' => now(),
        ]);

        Barang::create([
            'nama_barang' => 'Sabun Mandi',
            'id_kategori' => 4, // Kecantikan
            'id_supplier' => 3, // Supplier C
            'harga' => 15000.00,
            'stok' => 100,
            'tanggal_masuk' => now(),
        ]);
    }
}