<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Lesson extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'course_id',
        'subject_id',
        'lesson_id',
        'lesson_name',
        'video',
        'slug',
    ];
    protected $primaryKey = 'slug';
    public $incrementing = false;
}
