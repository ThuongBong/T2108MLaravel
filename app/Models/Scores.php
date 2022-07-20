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

    public function getStudents(){
        return $this->belongsTo(Student::class,"studentID","studentID");
    }
    public function getSubject(){
        return $this->belongsTo(Subject::class,"subjectID","subjectID");
    }

    public function scopeSearch($query,$search=''){
        if ($search != null && $search != '') {
            return $query->where("result","like",'%'.$search."%");
        }
        return $query;
    }
    public function scopeStudentID($query,$studentID=''){
        if($studentID != null && $studentID != '') {
            return $query->where("studentID",$studentID);
        }
        return $query;
    }
    public function scopeSubjectID($query,$subjectID=''){
        if($subjectID != null && $subjectID != '') {
            return $query->where("subjectID",$subjectID);
        }
        return $query;
    }
}
