<?php
class Buah {
    // Properties
    public $nama;
    public $warna;

    // constructor
    function __construct($nama, $warna) {
        $this->nama = $nama;
        $this->warna = $warna;
    }

    // destructor
    function __destruct() {
        echo "Buah {$this->nama}, warna {$this->warna}: dihancurkan dari memory.";
    }
}
?>