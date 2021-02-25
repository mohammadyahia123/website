<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function __construct(Request $request)
    {

    }

    protected $fillable = [
        'name',
        'father_name',
        'last_name',
        'grand_father_name',
        'mother_tongue',
        'tazkira_no',
        'tazkira_jold',
        'tazkira_safha',
        'tazkira_registration_no',
        'date_of_birth',
        'civic_state',
        'original_province',
        'original_suburb',
        'original_district',
        'present_settlement_province',
        'present_settlement_suburb',
        'present_settlement_district',
        'school_graduation_date',
        'school_name',
        'kankor_year',
        'kankor_result_number',
        'kankor_id',
        'image',
        'department_id',
        'committee_id',
        'tel',
        'father_work_and_workplace',
        'father_tel',
        'brother_reputation',
        'brother_work_and_workplace',
        'brother_tel',
        'kaka_reputation',
        'kaka_work_and_workplace',
        'kaka_tel',
        'mama_reputation',
        'mama_work_and_workplace',
        'mama_tel',
        'image',
        'department_id',
        'committee_id',
        'email',
    ];


    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
    public function department(){
        return $this->hasOne('App\Models\Department');
    }
    public function committee(){
        return $this->hasOne('App\Models\Committee');
    }
    public function document(){
        return $this->hasOne('App\Models\Document');
    }

}
