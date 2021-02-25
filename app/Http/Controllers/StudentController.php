<?php

namespace App\Http\Controllers;
use App\Models\Committee;
use App\Models\Department;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller

{

    public function index(Request $request)
    {

        $posts = Program::all()->sortByDesc('id');
        foreach ($posts as $post) {
            $delta_time = time() - strtotime($post->created_at);
            $hours = floor($delta_time / 3600);
            $delta_time %= 3600;
            $minutes = floor($delta_time / 60);
            $post['hour'] = $hours;
            $post['minute'] = $minutes;
        }

        return view('student.home',compact('posts'));

    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'name' =>'required|string|max:30',
            'father_name' => 'required|string|max:30',
            'last_name' => 'required|string','max:30',
            'grand_father_name' =>'required|string|max:30',
            'mother_tongue' => 'required|string|max:30',
           'hobby' => 'string|max:30',
           'tazkira_no'=>'required|integer|max:100000000',
            'tazkira_jold'=>'required|string|max:30',
            'tazkira_safha'=> 'required|string|max:30',
            'tazkira_registration_no'=> 'required|integer|max:100000000',
            'date_of_birth'=> 'required|string',
            'civic_state'=>'required|boolean',
            'original_province'=>'required|string|max:30',
            'original_suburb'=>'required|string|max:30',
            'original_district'=>'required|string|max:30',
            'present_settlement_province'=>'required|string|max:30',
            'present_settlement_suburb'=>'required|string|max:30',
            'present_settlement_district'=>'required|string|max:30',
            'school_graduation_date'=>'required|string|max:30',
            'school_name'=>'required|string|max:60',
            'kankor_year'=>'required|string',
            'kankor_result_number'=>'required|integer|max:360',
            'kankor_id'=>'required|string|max:10',
            'image'=>'required|string|max:60000|mimes:jpeg,jpg,png,bmp',
            'department_id'=>'required|integer|max:100000000',
            'committee_id'=>'integer|max:100000000',
            'email'=>'required|email',
            'tel'=>'required|integer'
        ]);
        $student = new Student();
        $student->name = $request->name;
        $student->father_name = $request->father_name;
        $student->last_name =$request->last_name;
        $student->grand_father_name = $request->grand_father_name;
        $student->mother_tongue = $request->mother_tongue;
        $student->hobby = $request->hobby;
        $student->tazkira_no = $request->tazkira_no;
        $student->tazkira_jold = $request->tazkira_jold;
        $student->tazkira_safha = $request->tazkira_safha;
        $student->tazkira_registration_no= $request->tazkira_registration_no;
        $student->date_of_birth = $request->date_of_birth;
        $student->civic_state=$request->civic_state;
        $student->original_province = $request->original_province;
        $student->original_suburb = $request->original_suburb;
        $student->original_district = $request->original_district;
        $student->present_settlement_province = $request->present_settlement_province;
        $student->present_settlement_suburb = $request->present_settlement_suburb;
        $student->present_settlement_district = $request->present_settlement_district;
        $student->school_graduation_date = $request->school_graduation_date;
        $student->school_name= $request->school_name;
        $student->kankor_year = $request->kankor_year;
        $student->kankor_result_number = $request->kankor_result_number;
        $student->kankor_id = $request->kankor_id;
        $student->tel = $request->tel;
        $student->father_work_and_workplace = $request->father_work_and_workplace;
        $student->father_tel = $request->father_tel;
        $student->brother_reputation = $request->brother_reputation;
        $student->brother_work_and_workplace = $request->brother_work_and_workplace;
        $student->brother_tel=$request->brother_tel;
        $student->kaka_reputation = $request->kaka_reputation;
        $student->kaka_work_and_workplace = $request->kaka_work_and_workplace;
        $student->kaka_tel= $request->kaka_tel;
        $student->mama_reputation=$request->mama_reputation;
        $student->mama_work_and_workplace = $request->mama_work_and_workplace;
        $student->mama_tel = $request->mama_tel;
        $student->image = $request->image;
        $student->department_id= $request->department_id;
        $student->committee_id = $request->committee_id;
        $student->email = $request->email;
        $student->save();
        return route('home');
    }

    public function create()
    {
        $committee=Committee::all();
        $dept = Department::all();
        return view('student.form',compact('committee','dept'));
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('home',compact($student));
    }
}
