<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', [
        'title' => 'Homepage',
        'header' => 'Homepage'
    ]);
});
Route::get('/home', function () {
    return view('home', [
        'title' => 'Homepage',
        'header' => 'Homepage'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'About Us',
        'header' => 'About Us'
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Us',
        'header' => 'Contact Us'
    ]);
});
route::get('/produk', function () {
    return view('produk', [
        'title' => 'Produk',
        'header' => 'Produk'
    ]);
});
