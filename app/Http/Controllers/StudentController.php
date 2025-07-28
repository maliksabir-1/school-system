<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Classes;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $users= Student::get();
        return view('students.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = Student::all();
        // dd($classes);
        return view('students.create', compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email',
            'phone'     => 'required|string|max:15',
            'gender'    => 'required|string',
            'address'   => 'required|string|max:255',
            'class_id'  => 'required|exists:classes,id',
            'dob'       => 'required|date',
            'roll_no'       => 'required',
        ]);

        $student = new Student();
        // $student->user_id     = Auth::id();
        $student->name        = $request->name;
        $student->email       = $request->email;
        $student->phone       = $request->phone;
        $student->gender      = $request->gender;
        $student->address     = $request->address;
        $student->class_id    = $request->class_id; 
        $student->dob         = $request->dob;
        $student->roll_number = $request->roll_no;
        $student->save();

        return redirect()->back()->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $users = Student::count();

    return view('dashboard', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $users= Student::where('id' , $id)->first();
         return view('students.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email',
            'phone'     => 'required|string|max:15',
            'gender'    => 'required|string',
            'address'   => 'required|string|max:255',
            'class_id'  => 'required|exists:classes,id',
            'dob'       => 'required|date',
            'roll_no'   => 'required',
        ]);

        $student= Student::where('id' , $id)->first();
        // $student->user_id     = Auth::id();
        $student->name        = $request->name;
        $student->email       = $request->email;
        $student->phone       = $request->phone;
        $student->gender      = $request->gender;
        $student->address     = $request->address;
        $student->class_id    = $request->class_id; 
        $student->dob         = $request->dob;
        $student->roll_number = $request->roll_no;
        $student->save();

        return redirect()->back()->with('success', 'Student created successfully.');

       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $users= Student::where('id' , $id)->first();
         $users->delete();
         return back()->with('Success','Users Delete SuccessFully');

    }
}
