<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Models\Bank;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banks = Bank::with('location')->get();
        return view('donation.donate', compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:15',
            'amount' => 'required|string',
            'comment' => 'nullable|string',
        ]);

        Donation::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'amount' => $request->amount,
            'anonymous' => $request->has('anonymous'),
            'comment' => $request->comment,
            'status' => false,
        ]);

        return redirect()->route('donate.index')->with('success', 'Thank you for your donation!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
