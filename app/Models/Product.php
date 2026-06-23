<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'img_path', 
        'description',
        'price', 
        'is_active'
        ];
}
