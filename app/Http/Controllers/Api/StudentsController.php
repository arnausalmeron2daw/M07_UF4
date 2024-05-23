<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Students::all();

        if ($students->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'No Students found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $students
        ], 200);
    }

    public function show($id)
    {
        $students = Students::find($id);

        if (!$students) {
            return response()->json([
                'success' => false,
                'message' => 'Student with id ' . $id . ' not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $students
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $students = Students::find($id);

        if (!$students) {
            return response()->json([
                'success' => false,
                'message' => 'Students with id ' . $id . ' not found'
            ], 404);
        }

        $students->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $students
        ], 200);
    }

    public function destroy($id)
    {
        $students = Students::find($id);

        if (!$students) {
            return response()->json([
                'success' => false,
                'message' => 'Students with id ' . $id . ' not found'
            ], 404);
        }

        $students->delete();

        return response()->json([
            'success' => true,
            'message' => 'Students deleted successfully'
        ], 200);
    }

    public function store(Request $request)
    {

        //dd($request->all());

            $validatedData = $request->validate([
                'name' => 'required|string',
                'email' => 'required|string',
                'birthdate' => 'required|string',
            ]);




            $students = Students::create($request->all());

            return response()->json([
                'success' => true,
                'data' => $students
            ], 201);

    }
}
