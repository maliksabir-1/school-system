<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Parents;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



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
      
        $allUsers = User::all();
        $allClasses = Classes::all();
        $allSections = Section::all();
        $allParents = Parents::all();

        return view('students.create', compact('allUsers', 'allClasses', 'allSections', 'allParents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'user_id'     => 'required|exists:users,id',
            'class_id'    => 'required|exists:classes,id',
            'section_id'  => 'nullable|exists:sections,id',
            'parent_id'   => 'nullable|exists:parents,id',
            'name'        => 'required|string|max:255',
            'email'       => 'nullable|email|max:255',
            'phone'       => 'nullable||max:255',
            'address'     => 'nullable||max:255',
            'dob'         => 'nullable|date',
            'gender'      => 'nullable|string|in:Male,Female,Other',
            'image'       => 'nullable|image|max:2048',
        ]);

       $student = new Student();
        $student->user_id = $request->user_id;
        $student->class_id = $request->class_id;
        $student->section_id = $request->section_id;
        $student->parent_id = $request->parent_id;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->gender = $request->gender;

        if ($request->hasFile('image')) {
            $student->image = $request->file('image')->store('students', 'public');
        }
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
         $student = Student::where('id',$id)->first();
        $allUsers = User::all();
        $allClasses = Classes::all();
        $allSections = Section::all();
        $allParents = Parents::all();

        return view('students.edit', compact('student', 'allUsers', 'allClasses', 'allSections', 'allParents'));
    }
   


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'user_id'     => 'required|exists:users,id',
            'class_id'    => 'required|exists:classes,id',
            'section_id'  => 'nullable|exists:sections,id',
            'parent_id'   => 'nullable|exists:parents,id',
            'name'        => 'required|string|max:255',
            'email'       => 'nullable|email|max:255',
            'phone'       => 'nullable|string|max:255',
            'address'     => 'nullable||max:255',
            'dob'         => 'nullable|date',
            'gender'      => 'nullable|string|in:Male,Female,Other',
            'image'       => 'nullable|image|max:2048',
        ]);

        $student = Student::where('id',$id)->first();
        $student->user_id = $request->user_id;
        $student->class_id = $request->class_id;
        $student->section_id = $request->section_id;
        $student->parent_id = $request->parent_id;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->gender = $request->gender;

        if ($request->hasFile('image')) {
            $student->image = $request->file('image')->store('students', 'public');
        }
        $student->save();


        return redirect()->back()->with('success', 'Student Update successfully.');

       
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
