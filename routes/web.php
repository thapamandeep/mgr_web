<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HeroController;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\AdminMiddleware;
// home page
Route::get('/',[SiteController::class,'home'])->name('home.page')->middleware('role');


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
Route::get('/members',[AuthController::class,'membersIndex'])->name('get.members.index');

// for contact
Route::get('/contact',[AuthController::class,'contact'])->name('get.contact');
Route::post('/contact-store',[AuthController::class,'contact_store'])->name('post.contact');

// for show
Route::get('/show/{user}',[AuthController::class,'show'])->name('get.show');

// for edit
Route::get('/edit/{user}',[AuthController::class,'edit'])->name('get.edit');
Route::post('/update-edit/{user}',[AuthController::class,'editStore'])->name('post.edit.store');

// for forgot password
Route::get('/forgot-password',[AuthController::class,'forgot_password'])->name('get.forgot.password');
Route::post('/otp',[AuthController::class,'reset_password'])->name('post.otp');
Route::get('/reset-password',[AuthController::class,'resetPassword'])->name('get.reset.password');
Route::post('/update-password',[AuthController::class,'updatePassword'])->name('post.update.password');

// for admin
Route::get('/admin',[SiteController::class,'admin'])->name('get.admin')->middleware('admin');

// --------------------------for hero ---------------------------------//
Route::get('/hero-form',[HeroController::class,'hero'])->name('get.hero.form')->middleware('admin');
Route::post('/store-hero',[HeroController::class,'storeHero'])->name('hero.store')->middleware('admin');
Route::get('/index-hero',[HeroController::class,'index'])->name('get.hero.index')->middleware('admin');
Route::get('edit-hero/{hero}',[HeroController::class,'edit'])->name('get.edit.hero')->middleware('admin');
Route::get('delete-hero/{hero}',[HeroController::class,'delete'])->name('get.delete.hero')->middleware('admin');

