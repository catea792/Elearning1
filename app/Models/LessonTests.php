<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class LessonTests extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'course_id',
        'lesson_id',
        'id',
        'question',
        'choose_1',
        'choose_2',
        'choose_3',
        'choose_4',
        'answer',
        'point',
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;}
