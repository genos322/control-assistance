<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::match(['get','post'],'login',[UserController::class, 'actionLogin'])->name('login')->middleware('generic:login');

Route::get('logout',[UserController::class, 'actionLogout'])->name('logout')->middleware('generic:logout');

Route::get('admin/panel', [AdminController::class, 'adminPanel'])->name('admin.panel')->middleware('generic:admin/panel');

Route::match(['get','post'],'admin/insert', [AdminController::class, 'insert'])->name('admin.insert')->middleware('generic:admin/insert');
