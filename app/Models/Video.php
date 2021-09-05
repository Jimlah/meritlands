<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Video extends Model
{
    use HasFactory;
    use Commentable;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'video_url',
        'thumbnail_url'
    ];
}