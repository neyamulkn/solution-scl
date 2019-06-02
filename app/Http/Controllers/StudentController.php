<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   
    public function index()
    {
         return view('backend/student/list');
    }
     
    public function create()
    {
        return view('backend/student/add');
    }

   
    public function store(Request $request)
    {
        dd($request->all());
    }


    public function edit(student $student)
    {
        //
    }

    public function update(Request $request, student $student)
    {
        //
    }

   
    public function destroy(student $student)
    {
        //
    }
}
