<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Lecture extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'email',
        'first_name',
        'last_name',
        'phone',
        'avatar',
        'university',
        'age',
        'degree',
        'level_name',
        'subject_id',
        'course_id',
        'work_address',
    ];
    protected $primaryKey = 'email';
    public $incrementing = false;
}
