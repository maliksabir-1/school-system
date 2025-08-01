<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feestructure;

class FeestructureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = FeeStructure::get();
        return view('feestructure.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('feestructure.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required|integer',
            'amount'   => 'required|numeric|min:0',
            'month'    => 'required|string|max:20',
            'year'     => 'required|integer|min:100|max:2100',
        ]);

        $users = new FeeStructure();
        $users->class_id = $request->class_id;
        $users->amount = $request->amount;
        $users->month = $request->month;
        $users->year = $request->year;
        $users->save();

        return back()->with('success', 'Fee structure stored successfully');
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
       
        $users = FeeStructure::where('id', $id)->first();
        return view('feestructure.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $request->validate([
            'class_id' => 'required|integer',
            'amount'   => 'required|numeric|min:0',
            'month'    => 'required|string|max:20',
            'year'     => 'required|integer|min:2000|max:2100',
        ]);

        $users = FeeStructure::where('id', $id)->first();
        $users->class_id = $request->class_id;
        $users->amount = $request->amount;
        $users->month = $request->month;
        $users->year = $request->year;
        $users->save();

        return back()->with('success', 'Fee structure updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $users = FeeStructure::where('id', $id)->first();
        $users->delete();

        return back()->with('success', 'Fee structure deleted successfully');
    }
}
