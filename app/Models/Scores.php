<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    use HasFactory;

    protected $table = 'score';
    protected $primaryKey = 'scoreID';
    protected $keyType ='integer';

    protected $fillable = [
        'score',
        'result',
        'studentID',
        'subjectID',
        'created_at',
        'updated_at'
    ];
}
