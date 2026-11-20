<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require('./Produk.php');

use Pbo\Marketplace\Produk;

$produk = new Produk();

$produk->setKode('P0001')
    ->setNama('Laptop')
    ->setHarga(10000000)
    ->setStok(5);

echo "Produk: " . $produk->getNama() . "<br/>";
echo "Harga: " . $produk->getHarga() . "<br/>";
echo "Stok: " . $produk->getStok() . "<br/>";
echo "Pajak: " . $produk->pajak() . "%<br/><br/>";
echo "Total harga setelah pajak: Rp." . $produk->total();