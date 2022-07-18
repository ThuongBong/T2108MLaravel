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
        "className",
        "classRoom",
        "created_at",
        "updated_at"
    ];
}
