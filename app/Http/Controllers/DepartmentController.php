<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function store(Request $request)
    {

        $this->validate($request,[
            'name' =>'required|string|max:30',
    ]);
        $dept = new Department();
        $dept->name = $request->name;
        $dept->save();

        return redirect('/');
    }
}
