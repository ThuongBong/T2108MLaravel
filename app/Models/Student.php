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
        'studentID',
        'studentName',
        'image',
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

    public function scopeStartDate($query,$from_date=''){
        if($from_date != null && $from_date != '') {
            return $query->where("birthday",'>=',$from_date);
        }
        return  $query;
    }

    public function scopeEndDate($query,$to_date=''){
        if($to_date != null && $to_date != '') {
            return $query->where("birthday",'<=',$to_date);
        }
        return  $query;
    }

    public function getImage() {
        if ($this->image) {
            return $this->image;
        }
        return  'uploads/avt.jpg';
    }

}
