<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;


Route::get('/beranda', [MerkController::class, 'beranda'])->name('merk.beranda');


Route::get('/', function () {
    return view('layouts.apps');
});
Route::get('/dash',function(){
return view('partial.dash');
});
Route::get('/dashboard',function(){
    return view('dashboard');
    });

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::resource('/merk',MerkController::class );
Route::resource('/jenis_barang',JenisBarangController::class, );
Route::resource('/lokasi',LokasiController::class, );
Route::resource('/supplier',SupplierController::class, );
Route::resource('/barangs',BarangController::class, );
