<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

// login Page
Route::redirect('/', 'loginPage');
Route::get('loginPage',[AuthController::class,'loginPage'])->name('loginPage');

// Home page
Route::get('home',[AuthController::class,'home'])->name('home');

// order page
Route::get('orderPage',[OrderController::class,'orderPage'])->name('orderPage');

// add page
Route::get('addPage',[OrderController::class,'addPage'])->name('addPage');
// add list
Route::post('add',[OrderController::class,'add'])->name('add');

// edit page
Route::get('editPage/{id}',[OrderController::class,'editPage'])->name('editPage');
// edit order
Route::post('edit/{id}',[OrderController::class,'edit'])->name('edit');

// delete order
Route::get('delete/{id}',[OrderController::class,'delete'])->name('delete');
