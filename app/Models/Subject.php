<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subject';
    protected $primaryKey = 'subjectID';
    protected $keyType = 'string';  //kiểu dữ liệu subjectID

    protected $fillable = [
        'subjectID',
        'subjectName',
        'created_at',
        'updated_at'
    ];

    public function scopeSearch($query, $search='') {
        if ($search != null && $search != '') {
            return $query->where("subjectName","like",'%'.$search."%");
        }
        return $query;
    }
}
