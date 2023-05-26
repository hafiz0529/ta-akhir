<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Produk::create([
            "id_produk" => "P001",
            "kategori_id_kategori" => "C001",
            "nama" => "Kaos Oblong Hitam",
            "ukuran" => "M",
            "bahan" => "30 S",
            "stok" => "69",
            "harga" => "70000",
            "deskripsi" => "Baju Baru",
            "gambar" => "<img src=public/produk C001>"
        ]);

        // Produk::create([
        //     "id_produk" => "P002",
        //     "kategori_id_kategori" => "C001",
        //     "nama" => "Kaos Oblong Putih",
        //     "ukuran" => "M",
        //     "bahan" => "30 S",
        //     "stok" => "69",
        //     "harga" => "70000",
        //     "deskripsi" => "Baju Baru",
        //     "gambar" => "Gambar 1"
        // ]);

        // Produk::create([
        //     "id_produk" => "P003",
        //     "kategori_id_kategori" => "C001",
        //     "nama" => "Kaos Oblong Putih",
        //     "ukuran" => "M",
        //     "bahan" => "30 S",
        //     "stok" => "69",
        //     "harga" => "70000",
        //     "deskripsi" => "Baju Baru",
        //     "gambar" => "Gambar 1"
        // ]);

        // Kategori::create([
        //     "id_kategori" => "C001",
        //     "nama_kategori" => "Kaos"
        // ]);

        Kategori::create([
            "id_kategori" => "C002",
            "nama_kategori" => "Celana"
        ]);
    }
}
