<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
         $users= School::get();
        return view('class.index', compact('users'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('class.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
        'name' => 'required',
        'section' => 'required',
        
    ]);

    // ✅ Create new attendance entry
    $users= new School();
    $users->name = $request->name;
    $users->section = $request->section;
    
          
        $users->save();
        return back()->with('Success','Users Store SuccessFully');
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
          $users= School::where('id' , $id)->first();
         return view('class.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $request->validate([
        'name' => 'required',
        'section' => 'required',
        
    ]);

    // ✅ Create new attendance entry
    $users= School::where('id' , $id)->first();
    $users->name = $request->name;
    $users->section = $request->section;
    
        
        $users->save();
        return back()->with('Success','Users Store SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $users= School::where('id' , $id)->first();
         $users->delete();
         return back()->with('Success','Users Delete SuccessFully');
    }
}
