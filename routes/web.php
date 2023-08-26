<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('login', function () {
    return view('login');
})->name('login');

Route::post('admin/panel', [UserController::class, 'actionLogin']);

Route::match(['get','post'],'admin/insert', [AdminController::class, 'insert'])->name('admin.insert');
