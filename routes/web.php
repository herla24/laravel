<?php

use Illuminate\Support\Facades\Route;
use App\Htpp\Controllers\MuridController;



Route::get('/', function () {
    return view('layout.home');
});

Route::get('/home', function () {
    return view('layout.home');
});

Route::get('murid', [MuridController::class, 'index'])->name('murid.index');
Route::post('murid', [MuridController::class, 'store'])->name('murid.store');
Route::get('murid/{nik}/edit', [MuridController::class, 'edit'])->name('murid.edit');
Route::put('murid/{nik}', [MuridController::class, 'update'])->name('murid.update');
Route::get('murid/{nik}', [MuridController::class, 'destroy'])->name('murid.destroy');

Route::resource('/murid', App\Htpp\Controllers\MuridController::class);