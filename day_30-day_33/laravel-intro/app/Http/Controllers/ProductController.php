<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\categories;

class ProductController extends Controller
{
    //
    public function index() {
        $data = [
            ['id'=>'1',
            'name'=>'product 1',
            'price'=> 10000
            ],
            ['id'=>'2',
            'name'=>'product 2',
            'price'=> 20000
            ],
            ['id'=>'3',
            'name'=>'product 3',
            'price'=> 30000
            ],
        ];

        $products = Product::with('categories')->get();

        return response()-> json([
            'status'=>'berhasil',
            'message'=>'data berhasil di ambil',
            'data'=>$products
        ]);
    }
    public function show($id) {
        return "ini halaman produk id: $id";
    }
}
