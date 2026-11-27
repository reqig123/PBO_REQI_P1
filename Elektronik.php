<?php

namespace Pbo\Marketplace;

require_once __DIR__ . '/Produk.php';

class Elektronik extends Produk {
    private int $garansi;

    public function setGaransi($garansi) {
        if ($garansi < 0) {
            echo "garansi tidak boleh negatif";
            exit();
        }

        $this->garansi = $garansi;
        return $this;
    }

    public function getGaransi() {
        return $this->garansi;
    }

    // Overriding method getInfo()
    public function getInfo() {
        return parent::getInfo() . " | Garansi: {$this->garansi} bulan";
    }
}