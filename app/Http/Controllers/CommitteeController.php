<?php

namespace App\Http\Controllers;
use App\Models\Committee;
use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique(Committees)|string|max:30',
        ]);

        $ads = new Committee();
        $ads->name = $request->name;

        $ads->save();
        return redirect('/');
    }
}
