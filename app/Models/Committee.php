<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->belongsToMany('App\Models\Student');
    }

    public function employees()
    {
        return $this->belongsToMany('App\Models\Employee');
    }

}
