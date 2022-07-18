<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';
    protected $primaryKey = 'studentID';
    protected $keyType ='string';

    protected $fillable = [
        'studentName',
        'birthday',
        'classID',
        'created_at',
        'updated_at'
    ];
}
