<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AuthController;
// home page
Route::get('/',[SiteController::class,'home'])->name('home.page');


// register page
Route::get('/register',[SiteController::class,'register'])->name('register.page');
Route::post('/register',[AuthController::class,'user'])->name('register.store');

// login page
Route::get('/login',[SiteController::class,'login'])->name('login.page');
Route::post('/login-store',[AuthController::class,'login'])->name('login.post');

// form page
Route::get('/form',[AuthController::class,'form'])->name('get.form');
Route::post('/store-form',[AuthController::class,'form_store'])->name('post.form');

// for index 
Route::get('/index',[AuthController::class,'index'])->name('get.index');

// for contact
Route::get('/contact',[AuthController::class,'contact'])->name('get.contact');