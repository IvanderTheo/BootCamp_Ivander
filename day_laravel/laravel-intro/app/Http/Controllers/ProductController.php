<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\categories;

class ProductController extends Controller
{
    //
    public function index(Request $request):JsonResponse {
        $query=Product::query();

        if($request->has('min_price')) {
            $query->where('price','>=',$request->min_price);
        }

        $products = $query->paginate(10);

        return response()->json([
            'success'=>true,
            'message'=>'produk berhasil diambil',
            'data'=>$products->items(),
            'meta'=> [
                'current_page' => $products->currentPage(),
                'last_page'=>$products->lastPage(),
                'per_page'=>$products->perPage(),
                'total'=>$products->total(),
            ]
        ]);
    }
    public function store(Request $request):JsonResponse {
        try {
            //validasi
            $validated = $request->validate([
                'name'=>'required|string|min:3|max:255',
                'price'=>'required|integer|min:0',
                'stock'=>'required|integer|min:0'
            ],[
                'name.required'=> 'nama wajib diisi',
                'name.min'=>'minimal 3 huruf'
            ]);
            //simpan data
            $product = Product::create($validated);
            //respone
            return response()->json([
                'success' => true,
                'message' => 'product created successfully',
                'data' => $product
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, Product $product):JsonResponse {
        try {
            //validasi
            $validated = $request->validate([
                'name'=>'sometimes|string|min:3|max:255',
                'price'=>'sometimes|integer|min:0',
                'stock'=>'sometimes|integer|min:0'
            ],[
                'name.min'=>'minimal 3 huruf'
            ]);
            //update data
            $product->update($validated);
            //respone
            return response()->json([
                'success' => true,
                'message' => 'product updated successfully',
                'data' => $product
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
    public function destroy (Product $product) :JsonResponse {
        $productName = $product->name;
        $product->delete();

        return response()->json([
            'success'=>true,
            'message'=>'berhasil di hapus',
            'data'=>$productName
        ]);
    }
    public function trashed () :JsonResponse {
        $deletedProduct = Product::onlyTrashed()->get();

        return response()->json([
            'success'=>true,
            'message'=>'berhasil mengambil data',
            'data'=>$deletedProduct
        ]);
    }
}
