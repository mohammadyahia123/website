<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function department(){
        return $this->hasOne('App\Models\Department');
    }
    public function committee(){
        return $this->hasOne('App\Models\Committee');
    }
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
