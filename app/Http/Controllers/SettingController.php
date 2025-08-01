<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=Setting::get();
        return view('setting.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'school_name' => 'required|string|max:255',
            'session_year' => 'required|string|max:20',
            'address' => 'required|string',
            'contact_email' => 'required|email',
            'contact_phone' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
           $users=new Setting;
           $users->school_name = $request->school_name;
           $users->session_year = $request->session_year;
           $users->address = $request->address;
           $users->contact_email = $request->contact_email;
           $users->contact_phone = $request->contact_phone;
           $users->logo = $request->logo;
                 if ($request->hasFile('logo')) {
        $file = $request->file('logo');
        $fileName = time().'_'.$file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName, 'public');
        $users->logo = $filePath;
    }

           $users->save();
            return back()->with('Success','setting Store SuccessFully');
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
          $users = Setting::where('id',$id)->first();
        return view('setting.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'school_name' => 'required|string|max:255',
            'session_year' => 'required|string|max:255',
            'address' => 'required|string',
            'contact_email' => 'required|email',
            'contact_phone' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
           $users = Setting::where('id',$id)->first();
           $users->school_name = $request->school_name;
           $users->session_year = $request->session_year;
           $users->address = $request->address;
           $users->contact_email = $request->contact_email;
           $users->contact_phone = $request->contact_phone;
           $users->logo = $request->logo;
        if ($request->hasFile('logo')) {
        $file = $request->file('logo');
        $fileName = time().'_'.$file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName, 'public');
        $users->logo = $filePath;
    }

           $users->save();
            return back()->with('Success','setting Store SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = Setting::where('id',$id)->first();
         $users->delete();
            return back()->with('Success','setting delete SuccessFully');
    }
}
