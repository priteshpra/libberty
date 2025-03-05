<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use Notifiable, HasRoles;
    public $table = 'gallerys';
    protected $primaryKey = 'id';
}
