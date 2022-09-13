<?php

namespace App\Http\Controllers;

use App\Exam_Schedule;
use App\Subjects;
use App\Marks;
use App\Student;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index(Request $req)
    {
        // $exam_schedule = Exam_Schedule::select('exam_schedule.*', 'subjects.name')
        //     ->leftjoin('subjects',  'exam_schedule.subject_id', '=', 'subjects.id')->get();
        $name = DB::table('subjects')->pluck('name', 'id')->toArray();

        $exam_schedule = (new Exam_Schedule())
            ->leftJoin('grade_subject as gs', 'gs.id', 'exam_schedule.grade_subject_id')
            ->leftJoin('subjects as sub', 'sub.id', 'gs.subject_id')
            ->leftJoin('exam_schedule as e', 'e.grade_subject_id', 'gs.id')
            ->select('gs.*', 'sub.name', 'e.*')
            ->get();

        return view('backend.exam.index', compact('name', 'exam_schedule'));
    }
    public function create($req_data = [])
    {
        $exam =  DB::table('subjects')->pluck('name', 'id')->toArray();
        // echo "<pre>";
        // dd($req_data);
        // die;
        return view('backend.exam.create', compact('exam', 'req_data'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $exam =  DB::table('subjects')->pluck('name', 'id')->toArray();
        $request->validate([
            'exam' => 'required',
            'exam_date' => 'required',
            'exam_title' => 'required'
        ]);
        // Exam_Schedule::create([
        //     'grade_subject_id' => $request->exam,
        //     'exam_date'  => $request->exam_date,
        //     'exam_title'    => $request->exam_title

        // ]);
        $exam_schedule = new Exam_Schedule();
        $exam_schedule->grade_subject_id = $request->get('exam');
        $exam_schedule->exam_date = $request->get('exam_date');
        $exam_schedule->exam_title = $request->get('exam_title');
        $exam_schedule->save();
        return view('exam/store', compact('result'));
    }
    public function create1()
    {
        $marks = Marks::latest()->get();
        $name = Student::leftJoin('users', 'students.user_id', 'users.id')->select('students.*', 'users.name')->pluck('users.name', 'id')->toArray();
        $date = DB::table('exam_schedule')->pluck('exam_date', 'id')->toArray();
        return view('backend.exam.marks', compact('marks', 'name', 'date'));
    }
    public function index1(Request $request)
    {
        $name = Student::leftJoin('users', 'students.user_id', 'users.id')->select('students.*', 'users.name')->pluck('users.name', 'id')->toArray();
        // echo "<pre>";
        // dd($name);
        // die;
        $date = DB::table('exam_schedule')->pluck('exam_date', 'id')->toArray();
        $schedule = Marks::get();
        return view('backend.exam.schedule', compact('schedule', 'date', 'name'));
    }

    public function entry($id)
    {
        $examData = DB::table('exam_schedule as ex')
            ->leftJoin('grade_subject as gs', 'gs.id', 'ex.grade_subject_id')
            ->leftJoin('subjects as sub', 'sub.id', 'ex.grade_subject_id')
            ->where('ex.id', $id)
            ->first();
        if (empty($examData)) {
            return redirect('exam.index');
        }
        $stuData = DB::table('students as stu')
            ->leftJoin('users as usr', 'usr.id', 'stu.user_id')
            ->where(['stu.class_id' => $examData->grade_id])
            ->get()->toArray();
        return view('backend.exam.entry', compact('examData', 'stuData'));
    }

    public function store1(Request $request)
    {
        $reqData = $request->all();
        echo "<pre>";
        dd($reqData);
        $request->validate([
            'student_id'        => 'required',
            'exam_schedule_id' => 'required',
            'total_marks' => 'required'
        ]);
        Marks::create([
            'student_id' => $request->student_id,
            'exam_schedule_id'  => $request->exam_schedule_id,
            'total_marks'    => $request->total_marks

        ]);
        return redirect('exam/store1')->with(['req_data' => $reqData]);
    }
}
