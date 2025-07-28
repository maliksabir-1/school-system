<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $users= Attendance::get();
        return view('attendance.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attendance.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'date' => 'required|date',
        'status' => 'required|in:present,absent',
        'remarks' => 'nullable|string|max:255',
    ]);

    // ✅ Create new attendance entry
    $users = new Attendance();
    $users->date = $request->date;
    $users->status = $request->status;
    $users->remarks = $request->remarks;
          
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
        
         $users= Attendance::where('id' , $id)->first();
         return view('attendance.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
        'date' => 'required|date',
        'status' => 'required|in:present,absent',
        'remarks' => 'nullable|string|max:255',
    ]);

    // ✅ Create new attendance entry
     $users= Attendance::where('id' , $id)->first();
    $users->date = $request->date;
    $users->status = $request->status;
    $users->remarks = $request->remarks;
            
        $users->save();
        return back()->with('Success','Users Store SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users= Attendance::where('id' , $id)->first();
         $users->delete();
         return back()->with('Success','Users Delete SuccessFully');

    }
}
