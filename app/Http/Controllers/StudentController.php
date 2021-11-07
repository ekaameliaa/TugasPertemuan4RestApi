<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $data = [
            'message' => 'Get all student',
            'data' => $students
        ];

        return response()->json($data, 200);
    }

    public function store(Request $request) 
    {
        #input data kedatabes
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];
        $student = Student::create($input);

        $data = [
            'message' => 'Student is created',
            'data' => $student
        ];

        return response()->json($data, 201);
       
    }

    public function show($id)
    {
        $student = Student::find($id);

        if ($student){
            $data = [
                'message' => 'Mendapatkan satu buah data',
                'data'=> $student
            ];
    
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Data not found'
            ];
    
            return response()->json($data, 404);
        }  
    }

    public function update(Request $request, $id)
    {
        #cara update data
        #cari data yang ingin diupdate apakah data ada atau tidak
        #jika ada maka update datanya
        #jika tidak maka munculkan pesan data tidak ada

        $student = Student::find($id);

        if ($student) {
            $student->update([
                'nama' => $request->nama ?? $student->nama,
                'nim' => $request->nim ?? $student->nim,
                'email' => $request->email ?? $student->email,
                'jurusan' => $request->jurusan ?? $student->jurusan
            ]);

            $data = [
                'message' => 'Data is update',
                'data'=> $student
            ];
    
            return response()->json($data, 200);
        }
        else{
            $data = [
                'message' => 'Data not found'
            ];
    
            return response()->json($data, 404);
        }

    }

    public function destroy($id)
    {
        #cari id
        #jika ada, hapus data
        #jika tidak ada, kembalikan pesan data tidak ada

        $student = Student::find($id);

        if ($student){
            $student->delete();

            $data = [
                'message' => 'Data is delete'
            ];

            return response()->json($data, 200);
        }
        else{
            $data = [
                'message' => 'Data not found'
            ];
    
            return response()->json($data, 404);
        }
    }


}
