<?php
// Menghubungkan file Produk.php (pastikan file berada di folder yang sama)
require_once 'Produk.php';

// Menerapkan konsep 'use' untuk memanggil class Produk dari namespace App\Models
use App\Models\Produk;

// Membuat object baru dari class Produk
$produk = new Produk('P001', 'Laptop', 10000000, 5);

// Menampilkan hasil
$produk->cetakInfo();
?>