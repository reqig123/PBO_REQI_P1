<?php
// Mendefinisikan namespace untuk mengelompokkan class
namespace App\Models; 

class Produk {
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;
    public const PAJAK = 0.11;

    public function __construct(string $kode, string $nama, int $harga, int $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function hitungJumlahPajak(): float {
        return $this->harga * self::PAJAK;
    }

    public function hitungTotalHarga(): float {
        return $this->harga + $this->hitungJumlahPajak();
    }

    public function cetakInfo(): void {
        $persentasePajak = self::PAJAK * 100;
        echo "Produk: " . $this->nama . "<br>";
        echo "Kode: " . $this->kode . "<br>";
        echo "Harga: Rp." . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Stok: " . $this->stok . "<br>";
        echo "Pajak: " . $persentasePajak . "%" . "<br>";
        echo "Total harga setelah pajak: Rp." . number_format($this->hitungTotalHarga(), 0, ',', '.') . "<br>";
    }
}
?>