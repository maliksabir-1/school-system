<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

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
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'class' => 'required',
            'dob' => 'required',
            'cnic' => 'required',
            'image' => 'required',
        ]);

        $users=new Teacher();
        $users->name = $request->name ;
        $users->address = $request->address ;
        $users->cnic = $request->cnic ;
        $users->email = $request->email ;
        $users->class = $request->class ;
        $users->image = $request->image ;
        $users->phone = $request->phone ;
        $users->dob = $request->dob ;

        if ($request->hasFile('image')) {
    $fileName = time().'_'.$request->image->getClientOriginalName();
    $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
    $users->image = $filePath;
}
        
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
         return view('teachers.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'name' => 'required',
            'address' => 'required',
            'cnic' => 'required',
            'email' => 'required',
            'class' => 'required',
            'image' => 'required',
            'phone' => 'required',
            'dob' => 'required',
        ]);

        $users= Teacher::where('id' , $id)->first();
        $users->name = $request->name ;
        $users->address = $request->address ;
        $users->cnic = $request->cnic ;
        $users->email = $request->email ;
        $users->class = $request->class ;
        $users->image = $request->image ;
        $users->phone = $request->phone ;
        $users->dob = $request->dob ;

        if ($request->hasFile('image')) {
    $fileName = time().'_'.$request->image->getClientOriginalName();
    $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
    $users->image = $filePath;
}
        
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
