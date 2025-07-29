<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function profile()
    {
        // return view('profile.profile');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request,string $id)
    {
       // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        $profile = User::where('id', $id)->first();
        return view('profile.profile', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
          'name' => 'required',
          'email' => 'required',
          'password' => 'required',
         'image' => 'null|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $users= User::where('id',$id)->first();
        $users->id = $request->id;
        $users->name = $request->name ;
        $users->email = $request->email ;
        $users->password = $request->password ;
        $users->file = $request->file;

       $uploadfile=$request->file('file');
       $filname=time() . '' . $uploadfile->getClientOriginalName();
       $path=$uploadfile->storeas('uploads',$filname,'public');
       $users->file=$path;

        $users->save();
       
        return redirect('dashboard')->with('success','Profile Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
