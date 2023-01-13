<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','surname','dni', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}