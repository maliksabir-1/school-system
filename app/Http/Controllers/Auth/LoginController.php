<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('login.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard')->with('success','User Login Successfully');
        }
        return back()->withErrors(['error'=> 'Invalid email or password'])->withinput();
    }
    
    /**
     * Store a newly created resource in storage.
     */
    
     public function logout(Request $request)
      {
        Auth::logout();

        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect()->route('login')->with('success', 'You have been logged out.');
      }
}
