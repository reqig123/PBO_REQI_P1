<?php

namespace Pbo\Marketplace;

trait Produk {
    private string $kode;
    private string $nama;
    private int $harga;
    private int $stok;

    public function __construct() {
    }

    //setter
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

    //getter
    public function getKode() {
        return $this->kode;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getHarga() {
        return "Rp." . $this->harga;
    }

    public function getStok() {
        return $this->stok . "pcs";
    }

    public function pajak() {
        return constant(static::class . '::PAJAK') * 100;
    }

    public function total() {
        $pajak = constant(static::class . '::PAJAK');
        return $this->harga + ($this->harga * $pajak);
    }
}