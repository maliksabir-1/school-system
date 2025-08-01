<?php

namespace App\Http\Controllers;
use App\Models\Section;
use App\Models\Classes;
use App\Models\Teacher;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=Section::get();
        return view('section.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $classes = Classes::all();
         $teachers = Teacher::all();
        return view('section.create',compact('classes','teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
          'name'=> 'required',
          'class_id'=> 'required',
          'teacher_id'=> 'required',
        ]);
        $users= new Section();
        $users->name = $request->name;
        $users->class_id = $request->class_id;
        $users->teacher_id = $request->teacher_id;
        $users->save();
        return back()->with('success','Section Store Successfully');
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
        $users=Section::where('id',$id)->first();
         $classes = Classes::all();
         $teachers = Teacher::all();
        return view('section.edit',compact('users','classes','teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
          'name'=> 'required',
          'class_id'=> 'required',
          'teacher_id'=> 'required',
        ]);
        $users=Section::where('id',$id)->first();
        $users->name = $request->name;
        $users->class_id = $request->class_id;
        $users->teacher_id = $request->teacher_id;
        $users->save();
        return back()->with('success','Section Store Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users=Section::where('id',$id)->first();
         $users->delete();
        return back()->with('success','Section Store Successfully');
    }
}
