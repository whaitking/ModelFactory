<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{
    protected $fillable = ['name','surname','dni'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}