<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         
         $users= Subject::get();
        return view('subject.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'name' => 'required',
        
        
    ]);

    // ✅ Create new attendance entry
    $users= new Subject();
    $users->name = $request->name;
    
    
          
        $users->save();
        return back()->with('Success','Subject Store SuccessFully');
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
         $users= Subject::where('id' , $id)->first();
         return view('subject.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $request->validate([
        'name' => 'required',
        
        
    ]);

    // ✅ Create new attendance entry
    $users= Subject::where('id' , $id)->first();
    $users->name = $request->name;
   
    
        
        $users->save();
        return back()->with('Success','Subject Update SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $users= Subject::where('id' , $id)->first();
         $users->delete();
         return back()->with('Success','Subject Delete SuccessFully');
    }
}
