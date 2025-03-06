<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use Notifiable, HasRoles;
    public $table = 'blogs';
    protected $primaryKey = 'id';

    public function comments()
    {
        return $this->hasMany(Comment::class)->where('is_approved', 1);
    }

    public function commentCount()
    {
        return $this->comments()->count();
    }
}
