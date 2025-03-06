<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run()
    {
        DB::table('barangs')->insert([
            ['kategori' => 'Elektronik', 'nama' => 'Mouse Gaming', 'harga' => 250000, 'jumlah' => 50, 'foto' => 'mouse.jpg'],
            ['kategori' => 'ATK', 'nama' => 'Kotak Pensil', 'harga' => 15000, 'jumlah' => 10, 'foto' => 'kotak.jpg'],
            ['kategori' => 'Pakaian', 'nama' => 'Baju Oversize', 'harga' => 1000000, 'jumlah' => 30, 'foto' => 'baju.jpg'],
        ]);
    }
}
