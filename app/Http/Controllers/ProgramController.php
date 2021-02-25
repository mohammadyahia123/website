<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ProgramController extends Controller
{
    public function __construct()
    {

    }

        public function index()
        {
            $posts = Program::all()->sortByDesc('id');
            foreach ($posts as $post)
            {
                $delta_time = time() - strtotime($post->created_at);
                $hours = floor($delta_time / 3600);
                $delta_time %= 3600;
                $minutes = floor($delta_time / 60);
                $post['hour'] = $hours;
                $post['minute'] = $minutes;
                $post['active']= 'program';
            }
            return view('welcome', compact('posts'));

        }
    public function store(Request $request)
    {
        $this->validate($request, [
            'opening_date'=>'required | date',
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $title = $request->title;
        $description = $request->description;
        $image = $request->file('image');
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/Ads'))
            {
                mkdir('uploads/Ads', 0777 , true);
            }
            $image->move('uploads/Ads',$imagename);
        }else {
            $imagename = 'uploads.default.png';
        }
        $ads = new Program();
        $ads->title = $title;
        $ads->description = $description;
        $ads->image = $imagename;
        $ads->opening_date = $request->opening_date;
        $ads->save();
        return redirect('/home');
    }
}
