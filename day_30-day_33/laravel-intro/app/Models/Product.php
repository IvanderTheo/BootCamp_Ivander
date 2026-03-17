<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory,softDeletes;
    protected $table = 'products';
    protected $primaryKey="id";
    protected $fillable = [
        'name',
        'price',
        'stock',
        'category_id'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'=>'datetime'
    ];

    protected $casts = [
        'price'=>'integer',
        'stock'=>'integer',
        'created_at'=>'datetime',
        'updated_at'=>'datetime',
        'deleted_at'=>'datetime'
    ];
}
