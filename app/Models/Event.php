<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
    protected $fillable = [
        'title',
        'img_path', 
        'post_url',
        'description',
        'published_at',
        'is_active'
        ];

    protected function imgUrl(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => $attributes['img_path'] 
                ? Storage::url($attributes['img_path']) 
                : null,
        );
    }
}
