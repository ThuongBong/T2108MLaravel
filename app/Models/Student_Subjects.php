<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Subjects extends Model
{
    use HasFactory;

    protected $table = 'student-subject';

    protected $fillable = [
        'studentID',
        'subjectID',
        'created_at',
        'updated_at'
    ];
}
