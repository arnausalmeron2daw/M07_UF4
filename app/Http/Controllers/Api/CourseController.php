<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();

        if ($courses->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'No Courses found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $courses
        ], 200);
    }

    public function show($id)
    {
        $courses = Course::find($id);

        if (!$courses) {
            return response()->json([
                'success' => false,
                'message' => 'Course with id ' . $id . ' not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $courses
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $courses = Course::find($id);

        if (!$courses) {
            return response()->json([
                'success' => false,
                'message' => 'Course with id ' . $id . ' not found'
            ], 404);
        }

        $courses->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $courses
        ], 200);
    }

    public function destroy($id)
    {
        $courses = Course::find($id);

        if (!$courses) {
            return response()->json([
                'success' => false,
                'message' => 'Course with id ' . $id . ' not found'
            ], 404);
        }

        $courses->delete();

        return response()->json([
            'success' => true,
            'message' => 'Course deleted successfully'
        ], 200);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer'
        ]);


        $courses = Course::create($request->all());

        return response()->json([
            'success' => true,
            'data' => $courses
        ], 201);

    }
}
