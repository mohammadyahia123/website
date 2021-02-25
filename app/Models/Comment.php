<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function student(){
        return $this->belongsTo('App\Models\Student');
    }
    public function program(){
        return $this->belongsTo('App\Models\Program');
    }
    public function employee(){
        return $this->belongsTo('App\Models\Employee');
    }
}
