<?php

namespace Pbo\Marketplace;

class Produk {
    // Property diubah ke protected agar bisa diwarisi child class
    protected string $kode;
    protected string $nama;
    protected int $harga;
    protected int $stok;

    // Constant
    public const PAJAK = 0.11;

    public function __construct() {}

    // Setter dengan Method Chaining
    public function setKode($kode) {
        $this->kode = $kode;
        return $this;
    }

    public function setNama($nama) {
        $this->nama = $nama;
        return $this;
    }

    public function setHarga($harga) {
        if ($harga <= 0) {
            echo "harga tidak boleh 0";
            exit();
        }

        $this->harga = $harga;
        return $this;
    }

    public function setStok($stok) {
        if ($stok <= 0) {
            echo "stok tidak boleh 0";
            exit();
        }

        $this->stok = $stok;
        return $this;
    }

    // Getter
    public function getKode() {
        return $this->kode;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function getStok() {
        return $this->stok;
    }

    // Method Perhitungan & Info Dasar
    public function pajak() {
        return self::PAJAK * 100;
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }

    public function getInfo() {
        return "Kode: {$this->kode} | Produk: {$this->nama} | Harga: Rp.{$this->harga} | Stok: {$this->stok}";
    }
}