<?php

class produk {
    
    //property
    public string $kode;
    public string $nama;
    public  int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;

}
 //object
 $produk = new produk ();
 //INPUTAN KE PROPERTY
 $produk -> kode = 'P001';
 $produk -> nama = 'Laptop';
 $produk -> harga = 10000000;
 $produk -> stok = 5;



//hasil

echo "produk: " . $produk -> nama . "<br>";
echo "kode: " . $produk -> kode . "<br>";
echo "harga: " . $produk -> harga . "<br>";
echo "stok: " . $produk -> stok . "<br>";
echo "pajak: " . $produk->pajak() . "%" . "<br>";


echo "total harga setelah pajak: Rp." . $produk->totalharga() . "<br>";