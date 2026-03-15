<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return response()-> json([
            'status'=>'berhasil',
            'message'=>'data berhasil di ambil',
            'data'=>$data
        ]);
    }
    public function show($id) {
        return "ini halaman produk id: $id";
    }
}
