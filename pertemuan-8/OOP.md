# Object-Oriented Programming (OOP) di PHP

Object-Oriented Programming adalah paradigma pemrograman di mana semua diibaratkan sebuah objek
OOP mempunyai properties dan behavior.
Properties adalah semacam atribut atau keterangan dari objek tersebut
Behavior adalah aksi atau fungsi yang dapat dijalankan oleh objek tersebut

Keungguan OOP dibandingkan procedural:
- Lebih cepat dan mudah dieksekusi
- Menjaga kode program tetap DRY-Code (Don't Repeat Yourself)
- Pembuatan aplikasi yang dapat digunakan kembali dengan kode yang lebih sedikit dan waktu pengembangan yang lebih singkat

## Class

Class adalah template untuk objek. Objek adalah turunan dari kelas.
Class memiliki properties (sifat bawaaan) dan method (kelakukan/kemampuan)

## Constructor

Constructor digunakan untuk menginisialisasi properti Objek saat pembuatan Objek.
Syntax:
```php
function __construct($properties) {
    $this->properties = $properties;
}
```

## Destructor

Destructor berfungsi untuk menghancurkan Objek. PHP akan secara otomatis memanggil fungsi destructor di akhir skrip.
Syntax:
```php
function __destruct() {
    // code here
}
```
## Access Modifiers

Properti dan method dapat memiliki access modifiers untuk mengontrol hak akses.
Jenis access modifiers:
- public : properti atau method dapat diakses dari mana saja (default)
- protected : properti atau method dapat diakses di dalam Class dan oleh Class yang diturunkan
- private : HANYA dapat diakses di dalam Class itu sendiri

## Inheritance

Inheritance/pewarisan: Ketika suatu Class mewariskan Class lain.
Kelas anak akan mewarisi semua property dan method public dan protected dari Class induk.
Inheritance menggunakan kata kunci extends.

## Overriding Inherited Methods

Method yang diwariskan dari Class induk dapat diganti dengan mendefinisikan ulang method (dengan nama method yang sama) di Class anak.