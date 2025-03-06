<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs'; // Ubah ke nama tabel yang benar di database
    protected $fillable = ['nama', 'kategori', 'harga', 'jumlah', 'foto'];
}
