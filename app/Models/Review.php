<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [  
        'img_path', 
        'published_at',
        'is_active'
        ];
}
