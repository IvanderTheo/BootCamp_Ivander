<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function index(Request $request)
    {
        $query = Course::with(['instructor', 'category']);

        // search
        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // sorting
        if ($request->sort_by) {
            $query->orderBy($request->sort_by, $request->order ?? 'asc');
        }

        $courses = $query->get()->map(function ($course) {

            // rating_class
            $rating = $course->rating ?? 0;

            if ($rating >= 8.5) {
                $rating_class = 'Top Rated';
            } elseif ($rating >= 7) {
                $rating_class = 'Recommended';
            } else {
                $rating_class = 'Regular';
            }

            return [
                'id' => $course->id,
                'name' => $course->name,
                'description' => $course->description,
                'price' => $course->price,
                'rating' => $rating,
                'rating_class' => $rating_class,
                'category' => $course->category,
                'instructor' => $course->instructor
            ];
        });

        return response()->json([
            'success' => true,
            'message' => 'Data kursus berhasil diambil',
            'data' => $courses
        ]);
    }

    public function show($id)
    {
        $course = Course::with('modules.lessons', 'instructor')->find($id);

        if (!$course) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail kursus',
            'data' => $course
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:course_categories,id'
        ]);

        if (auth()->user()->role !== 'instructor') {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 403);
        }

        $course = Course::create([
            'id_user' => auth()->id(),
            ...$request->all()
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Course berhasil dibuat',
            'data' => $course
        ]);
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);

        if (!$course) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        // hanya owner
        if ($course->id_user !== auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 403);
        }

        $course->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Course berhasil diupdate',
            'data' => $course
        ]);
    }

    public function destroy($id)
    {
        $course = Course::find($id);

        if (!$course) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        if ($course->id_user !== auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 403);
        }

        $course->delete();

        return response()->json([
            'success' => true,
            'message' => 'Course berhasil dihapus'
        ]);
    }
}
