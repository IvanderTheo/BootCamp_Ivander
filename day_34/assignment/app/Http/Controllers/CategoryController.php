<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseCategory;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = CourseCategory::all();

        return response()->json([
            'success' => true,
            'message' => 'Data kategori berhasil diambil',
            'data' => $categories
        ]);
    }

    public function show($id)
    {
        $category = CourseCategory::with('courses')->find($id);

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail kategori',
            'data' => $category
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100|unique:course_categories,name',
            'description' => 'nullable|string',
            'icon' => 'nullable|string'
        ]);

        $category = CourseCategory::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Kategori berhasil dibuat',
            'data' => $category
        ]);
    }

    public function update(Request $request, $id)
    {
        $category = CourseCategory::find($id);

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $request->validate([
            'name' => 'required|string|max:100|unique:course_categories,name,' . $id,
            'description' => 'nullable|string',
            'icon' => 'nullable|string'
        ]);

        $category->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Kategori berhasil diupdate',
            'data' => $category
        ]);
    }

    public function destroy($id)
    {
        $category = CourseCategory::with('courses')->find($id);

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        if ($category->courses()->count() > 0) {
            return response()->json([
                'success' => false,
                'message' => 'Kategori tidak bisa dihapus karena masih digunakan'
            ], 400);
        }

        $category->delete();

        return response()->json([
            'success' => true,
            'message' => 'Kategori berhasil dihapus'
        ]);
    }
}
