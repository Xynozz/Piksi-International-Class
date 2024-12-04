<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $fillable = ['lecture_name', 'faculty_id', 'prody_id'];
    public $timestamp = true;

    public function Faculties(){
        return $this->belongsTo(Faculties::class, 'faculty_id');
    }

}
