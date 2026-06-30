<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'title',
        'img_path', 
        'description',
        'published_at',
        'is_active'
        ];
}
