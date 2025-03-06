<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
  
    public function run(): void
    {
      
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin', 
        ]);

       
        DB::table('barangs')->insert([
            [
                'kategori' => 'Elektronik',
                'nama' => 'Mouse Gaming',
                'harga' => 250000,
                'jumlah' => 50,
                'foto' => 'mouse.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori' => 'ATK',
                'nama' => 'Kotak Pensil',
                'harga' => 15000,
                'jumlah' => 10,
                'foto' => 'kotak.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori' => 'Pakaian',
                'nama' => 'Baju Oversize',
                'harga' => 1000000,
                'jumlah' => 30,
                'foto' => 'baju.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
