<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'email' => 'required',
          'password' => 'required',
          'file' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $users=new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->file = $request->file;

       $uploadfile=$request->file('file');
       $filname=time() . '' . $uploadfile->getClientOriginalName();
       $path=$uploadfile->storeas('file',$filname,'public');
       $users->file=$path;
      
        $users->save();
        // return back()->with('success','User Has Been Register Successfully');
        
        return redirect()->route('login')->with('success','User Has been Register Successfully');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
