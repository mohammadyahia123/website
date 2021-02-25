<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','description','image',
    ];
    /**
     * @var mixed
     */
    private $description;
    /**
     * @var mixed
     */
    private $image;
    /**
     * @var mixed
     */
    private $title;
}
