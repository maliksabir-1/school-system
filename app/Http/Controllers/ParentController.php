<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parents;
use App\Models\User;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $users= Parents::get();
        return view('parent.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $allUsers = User::get();
         return view('parent.create',compact('allUsers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'user_id'     => 'required',
            'father_name' => 'required',
            'phone'       => 'required',
            'address'     => 'required',
           
        ]);

        $users = new Parents();
        $users->user_id     = $request->user_id;
        $users->father_name = $request->father_name;
        $users->phone       = $request->phone;
        $users->address     = $request->address;
       
        $users->save();
        return back()->with('Success','Parent Store SuccessFully');
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
         $users= Parents::where('id' , $id)->first();
          $allUsers = User::get();
         return view('parent.edit',compact('users','allUsers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'user_id'     => 'required',
            'father_name' => 'required',
            'phone'       => 'required',
            'address'     => 'required',
            
        ]);

        $users = Parents::where('id', $id)->first();
        $users->user_id     = $request->user_id;
        $users->father_name = $request->father_name;
        $users->phone       = $request->phone;
        $users->address     = $request->address;
       
        $users->save();
        return back()->with('Success','Parent update SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $users= Parents::where('id' , $id)->first();
         $users->delete();
         return back()->with('Success','parent Delete SuccessFully');
    }
}
