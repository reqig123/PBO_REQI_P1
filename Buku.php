<?php

namespace Pbo\Marketplace;

require_once __DIR__ . '/Produk.php';

class Buku extends Produk {
    private string $penulis;

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
        return $this;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    // Overriding method getInfo()
    public function getInfo() {
        return parent::getInfo() . " | Penulis: {$this->penulis}";
    }
}