<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $users=Exam::get();
        return view('exam.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('exam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
         'name' => 'required|string|max:255',
        'term' => 'required|string|max:255',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
        ]);
            $users = new Exam();
        $users->name = $request->name;
        $users->term = $request->term;
        $users->start_date = $request->start_date;
        $users->end_date = $request->end_date;
        $users->save();
        return back()->with('success','Exam Store Successfully');
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
         $users=Exam::where('id',$id)->first();
          return view('exam.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
         'name' => 'required|string|max:255',
        'term' => 'required|string|max:255',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
        ]);
            $users=Exam::where('id',$id)->first();
        $users->name = $request->name;
        $users->term = $request->term;
        $users->start_date = $request->start_date;
        $users->end_date = $request->end_date;
        $users->save();
        return back()->with('success','Exam Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $users=Exam::where('id',$id)->first();
         $users->delete();
        return back()->with('success','Exam Store Successfully');
    }
}
