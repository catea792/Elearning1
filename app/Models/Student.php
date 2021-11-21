<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'email',
        'first_name',
        'last_name',
        'phone',
        'age',
        'level',
        'course_name',
        'certificate',
    ];
    protected $primaryKey = 'email';
    public $incrementing = false;

}
