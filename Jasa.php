<?php

namespace Pbo\Marketplace;

require_once('./Produk.php');

use Pbo\Marketplace\Produk;

class Jasa {

    use Produk;

    public const PAJAK = 0.11;

    public function payment($tipe) {

        return match($tipe) {
            "virtual" => 'Virtual Account',
            "qris" => 'QRIS',
            default => 'hanya bisa pembayaran va dan qris'
        };

    }

}