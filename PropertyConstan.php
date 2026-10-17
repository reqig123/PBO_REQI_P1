<?php

class Produk { // Gunakan huruf kapital untuk nama class
    
    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;

}

//object
$produk = new Produk(); // Panggil dengan huruf kapital tanpa spasi sebelum ()

//INPUTAN KE PROPERTY
$produk->kode = 'P001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//HITUNG PAJAK
$pajak = Produk::PAJAK * 100; // Hapus tanda strip dan tambahkan bintang (*)
$jumlahpajak = $produk->harga * Produk::PAJAK; // Hapus tanda strip dan tambahkan bintang (*)

//total
$total = $produk->harga + $jumlahpajak;

//hasil
echo "produk: " . $produk->nama . "<br>";
echo "kode: " . $produk->kode . "<br>";
echo "harga: " . $produk->harga . "<br>";
echo "stok: " . $produk->stok . "<br>";
echo "pajak: " . $pajak . "%" . "<br>";
echo "total harga setelah pajak: Rp." . $total . "<br>";

?>