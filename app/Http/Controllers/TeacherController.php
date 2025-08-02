<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\User;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $users= Teacher::get();
        return view('teachers.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $users = User::all();
        return view('teachers.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'       => 'required|exists:users,id',
            'name'          => 'required|string|max:255',
            'dob'           => 'nullable|date',
            'gender'        => 'nullable|in:Male,Female,Other',
            'qualification' => 'nullable|string|max:255',
            'phone'         => 'nullable|string|max:255',
            'address'       => 'nullable|string|max:255',
        ]);
        $users=new Teacher();
        $users->user_id = $request->user_id ;
        $users->name = $request->name ;
        $users->dob = $request->dob ;
        $users->gender = $request->gender ;
        $users->qualification = $request->qualification ;
        $users->phone = $request->phone ;
        $users->address= $request->address;

     
        
        $users->save();
        return back()->with('Success','Teacher Store SuccessFully');
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
         $users= Teacher::where('id' , $id)->first();
          $users = User::all();
         return view('teachers.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'user_id'       => 'required|exists:users,id',
            'name'          => 'required|string|max:255',
            'dob'           => 'nullable|date',
            'gender'        => 'nullable|in:Male,Female,Other',
            'qualification' => 'nullable|string|max:255',
            'phone'         => 'nullable|string|max:255',
            'address'       => 'nullable|string|max:255',
        ]);
        $users=new Teacher();
        $users->user_id = $request->user_id ;
        $users->name = $request->name ;
        $users->dob = $request->dob ;
        $users->gender = $request->gender ;
        $users->qualification = $request->qualification ;
        $users->phone = $request->phone ;
        $users->address= $request->address;
        $users->save();
        return back()->with('Success','Teacher Update SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $users= Teacher::where('id' , $id)->first();
         $users->delete();
         return back()->with('Success','Teacher Delete SuccessFully');

    }
}
