<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'opening_date','title','description','image',
    ];
    private $description;
    private $image;
    private $title;
    private $opening_date;

    use HasFactory;
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
    public function subscribers(){
        return $this->hasMany('App\Models\Subscriber');
    }
}
