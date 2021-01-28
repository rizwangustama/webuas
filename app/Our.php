<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Our extends Model
{
    protected $fillable = [
        'id', 'title', 'article', 'image'
    ];
}
