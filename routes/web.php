<?php

use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\User\userController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('guest')->group(function () {

    //--------------------- user Menu----------------//
    Route::get('/', [userController::class, 'index'])->name('user.home');
    Route::get('/home', [userController::class, 'index'])->name('user.home');
    Route::get('/homeSpecific/{id}', [userController::class, 'list'])->name('user.getSpecificProduct');
});


Route::middleware('auth')->group(function () {
    Route::get('/chefs', [userController::class, 'getChef'])->name('user.chef');
    Route::get('/contact', [userController::class, 'getContact'])->name('user.contact');
    Route::get('/booking' , [userController::class , 'getBookTable'])->name('user.booktable');
});


// Route::get('/home-admin', [adminController::class, 'index'])->name('admin.home');
