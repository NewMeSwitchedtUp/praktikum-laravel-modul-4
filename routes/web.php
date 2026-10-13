<?php

use Illuminate\Support\Facades\Route;

// Routing halaman beranda
Route::get('/', function () {
    return view('pages.beranda');
});

// Routing halaman about
Route::get('/about', function () {
    return view('pages.about', [
        'nama' => 'Zaki Syahrul Huda',
        'kelas' => 'D4SM - 48 -02',
        'nim' => '707082400133',
    ]);
});