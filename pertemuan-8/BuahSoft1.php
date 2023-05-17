<?php
require_once "Buah5.php";
class BuahSoft extends Buah {
    public $berat;
    // override
    public function __construct($nama, $warna, $berat) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->berat = $berat;
    }
    public function message() {
        echo "Buah kategori Soft-Fruits: <br>";
    }
    // override
    public function intro() {
        echo "{$this->nama}, {$this->warna}, berat: {$this->berat} ons <br>";
    }
}
?>