<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Library extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'lecture_email',
        'subject_name',
        'document_id',
        'grade',
        'title',
        'content',
        'author',
        'slug'
    ];
    protected $primaryKey = 'slug';
    public $incrementing = false;
}
