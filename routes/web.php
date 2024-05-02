<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home', ["active" => 'home']);
})->name('home');

Route::get('produk', function () {

    $kode = ["BRG001", "BRG002"];
    $nama = ["pena", "buku"];
    $jenis = ["alat tulis", "alat tulis"];
    $harga = ["20000", "15000"];

    return view('produk', ["active" => 'produk'], compact('kode', 'nama', 'jenis', 'harga'));
})->name('produk');

Route::get('tambah', function() {

    $jenis = ["Alat Tulis", "Elektronik", "Sembako"];

    return view('tambah', ["active" => ''], compact("jenis"));
})->name('tambah');