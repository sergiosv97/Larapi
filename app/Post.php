<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'title',
    'slug',
    'likes',
    'content'
    ];

    protected $casts = [
        'likes' => 'integer',
    ];
}

//para decirle al a bd lo que hay en el

//protected, eloquent