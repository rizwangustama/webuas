<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    protected $fillable = [
        'title', 'pdf'
    ];
}
