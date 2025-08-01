<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feepayment;

class FeepaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $users = Feepayment::get();
        return view('feepayment.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('feepayment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'student_id' => 'required|integer',
            'fee_structure_id' => 'required|integer',
            'amount_paid' => 'required|numeric|min:0',
            'payment_date' => 'required|date',
            'method' => 'required|string|max:255',
        ]);

        $users = new Feepayment();
        $users->student_id = $request->student_id;
        $users->fee_structure_id = $request->fee_structure_id;
        $users->amount_paid = $request->amount_paid;
        $users->payment_date = $request->payment_date;
        $users->method = $request->method;
        $users->save();

        return back()->with('success', 'Payment stored successfully');
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
         $users = Feepayment::where('id', $id)->first();
        return view('feepayment.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'student_id' => 'required|integer',
            'fee_structure_id' => 'required|integer',
            'amount_paid' => 'required|numeric|min:0',
            'payment_date' => 'required|date',
            'method' => 'required|string|max:255',
        ]);

        $users = FeePayment::where('id', $id)->first();
        $users->student_id = $request->student_id;
        $users->fee_structure_id = $request->fee_structure_id;
        $users->amount_paid = $request->amount_paid;
        $users->payment_date = $request->payment_date;
        $users->method = $request->method;
        $users->save();
         return back()->with('success', 'Payment stored successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = Feepayment::where('id', $id)->first();
        $users->delete();

        return back()->with('success', 'Payment deleted successfully');
    }
}
