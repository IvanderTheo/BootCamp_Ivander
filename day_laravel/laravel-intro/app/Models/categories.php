<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriesFactory> */
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'name'
    ];
    public function products() {
        return $this->hasMany(Product::class);
    }
    public function getProductCountAttribute() {
        return $this->products() -> count();
    }
}
