<?php

namespace App\Models;

use Facade\FlareClient\Api;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Post -> posts
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
