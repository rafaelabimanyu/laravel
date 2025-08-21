<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    // $nama = 'Rafael Abimanyu';
    $data = 'Rafael Abimanyu';
    $umur = 17;
    return view('about', ['data' => $data, 'umur' => 17 ]);
    // return view('about', compact('data'))->with('umur', 17);
    // return view('about')
    //     ->with('data', "ABI")
    //     ->with('umur', 17);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/siswa', function () {
    return view('siswa.index');
});

Route::get('/siswa/{id}', function ($id) {
    // dd($id);
    return view('siswa.show', ['id' => $id]);
});