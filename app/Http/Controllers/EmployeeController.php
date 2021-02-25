<?php

namespace App\Http\Controllers;

class EmployeeController extends Controller
{
    public function show()
    {
        $people = ['ahmad','mahmood','qasim'];
        return view('employee',compact('people'));
    }
}
