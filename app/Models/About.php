<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [

        'image',
        'name',
        'content',
        'text_1icon',
        'text_1',
        'text_1_content',
        'text_2icon',
        'text_2',
        'text_2content',
        'text_3icon',
        'text_3',
        'text_3content',

    ];
}
