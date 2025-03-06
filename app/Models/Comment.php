<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['blog_id', 'parent_id', 'name', 'email', 'comment', 'is_approved', 'likes'];

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id')->where('is_approved', 1)->with('replies');
    }

    public function like()
    {
        $this->increment('likes'); // Increments the like count
        return $this->likes;
    }
}
