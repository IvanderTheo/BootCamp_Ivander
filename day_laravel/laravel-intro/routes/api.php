<?php 
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

Route::get('/',function() {
    return view('welcome');
});

Route::get('/products',[ProductController::class,'index']);
Route::get('/products/{id}',[ProductController::class,'show']);
Route::post('/products',[ProductController::class,'store']);
Route::put('/products/{product}',[ProductController::class,'update']);
Route::patch('/products/{product}',[ProductController::class,'update']);
Route::delete('products/{product}',[ProductController::class,'destroy']);
Route::get('products-trashed',[ProductController::class,'trashed']);


//category
//user
//finance
//payment
?>