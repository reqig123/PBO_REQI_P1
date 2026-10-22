<?php

class Produk {
    
    // Property diubah menjadi static agar bisa diakses oleh method static
    public static string $kode;
    public static string $nama;
    public static int $harga;
    public static int $stok;

    // Constant
    public const PAJAK = 0.11;

    // Membuat Method Static untuk memproses dan mencetak hasil
    public static function prosesProduk(string $kodeInput, string $namaInput, int $hargaInput, int $stokInput) {
        // Memasukkan inputan ke property static menggunakan self::
        self::$kode = $kodeInput;
        self::$nama = $namaInput;
        self::$harga = $hargaInput;
        self::$stok = $stokInput;

        // HITUNG PAJAK
        $pajak = self::PAJAK * 100;
        $jumlahpajak = self::$harga * self::PAJAK;

        // total
        $total = self::$harga + $jumlahpajak;

        // hasil
        echo "produk: " . self::$nama . "<br>";
        echo "kode: " . self::$kode . "<br>";
        echo "harga: " . self::$harga . "<br>";
        echo "stok: " . self::$stok . "<br>";
        echo "pajak: " . $pajak . "%" . "<br>";
        echo "total harga setelah pajak: Rp." . $total;
    }
}



// Tidak ada lagi '$produk = new produk();'
// Inputan langsung dikirim melalui pemanggilan method static-nya
Produk::prosesProduk('P001', 'Laptop', 10000000, 5);

?>
