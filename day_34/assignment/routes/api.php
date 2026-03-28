<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;

Route::apiResource('categories', CategoryController::class);

Route::apiResource('courses', CourseController::class);