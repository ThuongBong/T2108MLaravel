<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $primaryKey = 'classID';
    protected $keyType ='string';   //kieu du lieu cua classID

    protected $fillable = [
        "classID",
        "className",
        "classRoom",
        "created_at",
        "updated_at"
    ];

    public function students(){
        return $this->hasMany(Student::class, "classID","classID");
}

    public function scopeSearch($query, $search=''){
        if ($search != null && $search != '') {
            return $query->where("classRoom","like",'%'.$search."%");
        }
        return $query;
    }
}
