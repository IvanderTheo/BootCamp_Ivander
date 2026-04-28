<?php

use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/sapa',[LatihanController::class,'index']);
Route::get ('/sapa/{name?}', function ($name) {
    return "welcome, $name" . $name;
});

Route::get ('/product',[ProductController::class,'index']);
Route::get ('/product/{id}', [ProductController::class, 'show']);

Route::get ('/profile',[ProfileController::class,'index'])->name('profile.index');
Route::get ('/profile/about',[ProfileController::class,'about'])->name('profile.about');
Route::get ('/profile/portofolio',[ProfileController::class,'portofolio'])->name('profile.portfolio');
Route::get ('profile/contact',[ProfileController::class,'contact'])->name('profile.contact');