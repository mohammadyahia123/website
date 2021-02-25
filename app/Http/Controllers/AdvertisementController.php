<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdvertisementController extends Controller
{
    public function index()
    {
        $posts = Advertisement::all()->sortByDesc('id');
        foreach ($posts as $post) {
            $delta_time = time() - strtotime($post->created_at);
            $hours = floor($delta_time / 3600);
            $delta_time %= 3600;
            $minutes = floor($delta_time / 60);
            $post['hour'] = $hours;
            $post['minute'] = $minutes;
            $post['active'] = 'ads';
        }
        return view('welcome',compact('posts'));
    }


    public function store(Request $request)
    {
            $this->validate($request, [
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
            $ads = new Advertisement();
            $ads->title = $title;
            $ads->description = $description;
            $ads->image = $imagename;

            $ads->save();
             return redirect('/');
    }

}
