<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Location;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::with('banks')->get();
        return view('frontend-page.contact_us', compact('locations'));
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
        $validated = $request->validate([
            'your-name' => 'required|string|max:255',
            'your-email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'your-message' => 'nullable|string',
        ]);

        Contact::create([
            'name' => $validated['your-name'],
            'email' => $validated['your-email'],
            'telephone' => $validated['telephone'],
            'message' => $validated['your-message'],
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
