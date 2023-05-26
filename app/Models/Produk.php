<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['id_produk', 'kategori_id_kategori', 'nama', 'ukuran', 'bahan', 'stok', 'harga', 'deskripsi', 'gambar'];
}
