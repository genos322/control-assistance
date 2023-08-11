<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('login', function () {
    return view('login');
})->name('login');

Route::post('admin/panel', [LoginController::class, 'validarLogin'])->name('admin.panel');
