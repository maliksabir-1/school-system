<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Exam;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users =Mark::get();
        return view('marks.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        $exams = Exam::all();
        $subjects = Subject::all();
        return view('marks.create', compact('students', 'exams', 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'exam_id' => 'required|exists:exams,id',
            'subject_id' => 'required|exists:subjects,id',
            'marks_obtained' => 'required|numeric|min:0',
            'max_marks' => 'required|numeric|min:1',
        ]);
        $users=new Mark();
        $users->student_id = $request->student_id;
        $users->exam_id = $request->exam_id;
        $users->subject_id = $request->subject_id;
        $users->marks_obtained = $request->marks_obtained;
        $users->max_marks = $request->max_marks;
        $users->save();
         return back()->with('Success','Marks Store SuccessFully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = Mark::where('id',$id)->first();
        $students = Student::get();
        $exams = Exam::get();
        $subjects = Subject::get();
        return view('marks.edit', compact('users', 'students', 'exams', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'exam_id' => 'required|exists:exams,id',
            'subject_id' => 'required|exists:subjects,id',
            'marks_obtained' => 'required|numeric|min:0',
            'max_marks' => 'required|numeric|min:1',
        ]);
        $users = Mark::where('id',$id)->first();
        $users->student_id = $request->student_id;
        $users->exam_id = $request->exam_id;
        $users->subject_id = $request->subject_id;
        $users->marks_obtained = $request->marks_obtained;
        $users->max_marks = $request->max_marks;
        $users->save();
         return back()->with('Success','Marks Update SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $users = Mark::where('id',$id)->first();
         $users->delete();
         return back()->with('Success','parent Delete SuccessFully');
    }
}
