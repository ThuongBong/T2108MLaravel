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

    public function classes() {
        return $this->belongsTo(Classes::class, "classID", "classID");
    }

    public function scopeSearch($query,$search=''){
        if($search != null && $search != '') {
            return $query-> where("studentName","like",'%'.$search."%");
        }
        return $query;
    }

    public function scopeClassFilter($query,$classID=''){
        if($classID != null && $classID != '') {
            return $query->where("classID",$classID);
        }
        return $query;
    }

    public function scopeStartDate($query,$form_date=''){
        if($form_date != null && $form_date != '') {
            return $query->where("birthday",'>=',$form_date);
        }
        return  $query;
    }

    public function scopeEndDate($query,$to_date=''){
        if($to_date != null && $to_date != '') {
            return $query->where("birthday",'<=',$to_date);
        }
        return  $query;
    }
}
