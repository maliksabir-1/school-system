<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Students;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $users= Students::get();
        return view('students.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
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

        $users=new Students();
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
        return back()->with('Success','Users Store SuccessFully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $users = Students::count();

    return view('dashboard', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $users= Students::where('id' , $id)->first();
         return view('students.edit',compact('users'));
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

        $users= Students::where('id' , $id)->first();
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
        return back()->with('Success','Users Update SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $users= Students::where('id' , $id)->first();
         $users->delete();
         return back()->with('Success','Users Delete SuccessFully');

    }
}
