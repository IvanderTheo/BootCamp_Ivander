<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $table = 'products';
    protected $primary_key="id";
    protected $fillable = [
        'name',
        'price',
        'stock'
    ];
    protected $hidden = [
        'created_at'
    ];
    protected $casts = [
        'price'=>'integer',
        'stock'=>'integer'
    ];
}
