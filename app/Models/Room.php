<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'title',
        'img1_path', 
        'img2_path',
        'εσχε',
        'description',
        'published_at',
        'is_active'
        ];
}
