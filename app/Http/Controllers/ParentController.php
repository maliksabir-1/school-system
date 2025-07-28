<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parents;

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
         return view('parent.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'phone' => 'required',
            'relation' => 'required',
           
        ]);

        $users=new Parents();
        $users->phone = $request->phone;
        $users->relation = $request->relation ;
      
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
         $users= Parents::where('id' , $id)->first();
         return view('parent.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'phone' => 'required',
            'relation' => 'required',
           
        ]);

        $users= Parents::where('id' , $id)->first();
        $users->phone = $request->phone;
        $users->relation = $request->relation ;
      
          $users->save();
        return back()->with('Success','Users Store SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $users= Parents::where('id' , $id)->first();
         $users->delete();
         return back()->with('Success','Users Delete SuccessFully');
    }
}
