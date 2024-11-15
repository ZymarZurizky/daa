<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        Supplier::create([
            'nama_supplier' => 'Supplier A',
            'kontak' => '08123456789'
        ]);

        Supplier::create([
            'nama_supplier' => 'Supplier B',
            'kontak' => '08234567890'
        ]);

        Supplier::create([
            'nama_supplier' => 'Supplier C',
            'kontak' => '08345678901'
        ]);
    }
}