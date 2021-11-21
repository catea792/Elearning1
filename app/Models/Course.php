<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Course extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'lecture_email',
        'course_id',
        'course_name',
        'subject_id',
        'grade',
        'video',
        'description',
        'requirements',
        'outcomes',
        'des_image',
        'slug',
    ];
    protected $primaryKey = 'slug';
    public $incrementing = false;
}
