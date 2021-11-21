<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    
    //Gửi Tuấn Anh

    use HasFactory;

    protected $fillable = [
        'username',
        'course_id',
        'lession_slug'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'course_id');
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lession_slug', 'slug');
    }
}
