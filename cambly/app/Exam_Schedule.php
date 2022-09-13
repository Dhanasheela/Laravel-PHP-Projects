<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam_Schedule extends Model
{
    protected $table = 'exam_schedule';
    protected $fillable = ['id', 'grade_student_id', 'exam_date', 'exam_title'];

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_subject_id', 'id');
    }
    public function subjects()
    {
        return $this->belongsTo(Subjects::class, 'name');
    }
}
