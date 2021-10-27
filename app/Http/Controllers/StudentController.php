<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function index()
    {
        $students = Student::all();
        $data = [
            'message' => 'Get all student',
            'data' => $students
        ];

        return response()->json($data, 200);
    }
}
