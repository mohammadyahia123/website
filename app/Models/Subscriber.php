<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    public function Student(){
        return $this->belongsTo('App\Models\Student');
    }
    public function program(){
        return $this->belongsTo('App\Models\Program');
    }
}
