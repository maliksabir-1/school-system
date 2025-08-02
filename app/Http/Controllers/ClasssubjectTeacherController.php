<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classsubjectteacher;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\Teacher;

class ClasssubjectTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $users = Classsubjectteacher::get();
        return view('subjectteacher.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = Classes::get();
        $subjects = Subject::get();
        $teachers = Teacher::get();
        return view('subjectteacher.create', compact('classes', 'subjects', 'teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'class_id' => 'required',
            'subject_id' => 'required',
            'teacher_id' => 'required',
        ]);

        $users = new Classsubjectteacher();
        $users->class_id = $request->class_id;
        $users->subject_id = $request->subject_id;
        $users->teacher_id = $request->teacher_id;
        $users->save();

        return back()->with('Success', 'Assignment Stored Successfully');
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
        $users = Classsubjectteacher::where('id', $id)->first();
        $classes = Classes::get();
        $subjects = Subject::get();
        $teachers = Teacher::get();
        return view('subjectteacher.edit', compact('users', 'classes', 'subjects', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'class_id' => 'required',
            'subject_id' => 'required',
            'teacher_id' => 'required',
        ]);

        $users = Classsubjectteacher::where('id', $id)->first();
        $users->class_id = $request->class_id;
        $users->subject_id = $request->subject_id;
        $users->teacher_id = $request->teacher_id;
        $users->save();

        return back()->with('Success', 'Assignment Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = Classsubjectteacher::where('id', $id)->first();
        $users->delete();

        return back()->with('Success', 'Assignment Deleted Successfully');
    }
}
