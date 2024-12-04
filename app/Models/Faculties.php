<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculties extends Model
{
    use HasFactory;

    protected $fillable = ['faculty_name', 'description', 'picture'];
    public $timestamp = true;

    public function Lecture(){
        return $this->hasMany(Lecturer::class, 'lecture_id');
    }

    public function StudyProgram(){
        return $this->hasMany(StudyProgram::class, 'faculty_id');
    }

}
