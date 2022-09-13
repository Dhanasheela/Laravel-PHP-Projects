<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    protected $table = 'student_marks';
    protected $fillable = ['id', 'student_id', 'exam_schedule_id', 'total_marks'];
}
