<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timetable;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Classes;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Timetable::get();
        return view('timetable.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $classes = Classes::all();
        $sections = Section::all();
        $subjects = Subject::all();
        $teachers = Teacher::all();
        return view('timetable.create', compact('classes', 'sections', 'subjects', 'teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'section_id' => 'required',
            'day' => 'required',
            'subject_id' => 'required',
            'teacher_id' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $users = new Timetable();
        $users->class_id = $request->class_id;
        $users->section_id = $request->section_id;
        $users->day = $request->day;
        $users->subject_id = $request->subject_id;
        $users->teacher_id = $request->teacher_id;
        $users->start_time = $request->start_time;
        $users->end_time = $request->end_time;
        $users->save();
         return back()->with('Success','timetable Store SuccessFully');
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
         $users = Timetable::where('id',$id)->first();
          $classes = Classes::all();
        $sections = Section::all();
        $subjects = Subject::all();
        $teachers = Teacher::all();
         return view('timetable.edit',compact('users','classes', 'sections', 'subjects', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'class_id' => 'required',
            'section_id' => 'required',
            'day' => 'required',
            'subject_id' => 'required',
            'teacher_id' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

         $users = Timetable::where('id',$id)->first();
        $users->class_id = $request->class_id;
        $users->section_id = $request->section_id;
        $users->day = $request->day;
        $users->subject_id = $request->subject_id;
        $users->teacher_id = $request->teacher_id;
        $users->start_time = $request->start_time;
        $users->end_time = $request->end_time;
        $users->save();
         return back()->with('Success','timetable Update SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users= Timetable::where('id' , $id)->first();
         $users->delete();
         return back()->with('Success','timetable Delete SuccessFully');
    }
}
