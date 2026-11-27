<?php

require_once './Produk.php';
require_once './Elektronik.php';
require_once './Buku.php';

use Pbo\Marketplace\Elektronik;
use Pbo\Marketplace\Buku;

// Object dari Child Class Elektronik
$laptop = new Elektronik();
$laptop->setKode('P0001')
    ->setNama('Laptop')
    ->setHarga(10000000)
    ->setStok(5)
    ->setGaransi(24);

// Object dari Child Class Buku
$buku = new Buku();
$buku->setKode('B0001')
    ->setNama('Belajar OOP PHP')
    ->setHarga(150000)
    ->setStok(10)
    ->setPenulis('Sandhika Galih');

// Hasil
echo "<h3>Produk Elektronik</h3>";
echo $laptop->getInfo() . "<br/>";
echo "Pajak: " . $laptop->pajak() . "%<br/>";
echo "Total harga setelah pajak: Rp." . $laptop->total();

echo "<hr/>";

echo "<h3>Produk Buku</h3>";
echo $buku->getInfo() . "<br/>";
echo "Pajak: " . $buku->pajak() . "%<br/>";
echo "Total harga setelah pajak: Rp." . $buku->total();