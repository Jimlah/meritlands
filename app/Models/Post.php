<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravelista\Comments\Commentable;

class Post extends Model
{
    use HasFactory;
    use Commentable;

    protected $fillable = [
        'image',
        'user_id',
        'title',
        'content',
        'category',
        'slug',
        'is_published'
    ];

        /**
        * The attributes that should be cast to native types.
        *
        * @var array
        */
        protected $casts = [
            'email_verified_at' => 'datetime',
            'published_at' => 'datetime',
        ];

    protected static function booted()
    {
        static::addGlobalScope('published', function (Builder $builder) {
            $builder->where('is_published', true);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}