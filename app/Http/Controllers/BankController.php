<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Validation\Rule;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banks = Bank::all();
        return view('admin.bank.index', compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::all();

        if ($locations->isEmpty()) {
            return redirect()->route('locations.index')
                            ->with('error', 'No locations found. Please add a location before creating a bank account.');
        }

        return view('admin.bank.create', compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'account_no' => 'required|string|unique:banks,account_no',
            'iban' => 'nullable|string|max:255',
            'type' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'convertion_rate' => 'required|numeric',
            'location_id' => 'required|exists:locations,id',
        ]);

        Bank::create($request->only([
            'name', 'code', 'account_no', 'iban', 'type', 'status', 'convertion_rate', 'location_id'
        ]));

        return redirect()->route('banks.index')->with('success', 'Bank account created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bank $bank)
    {
        return view('admin.bank.show', compact('bank'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bank $bank)
    {
        $locations = Location::all();
        return view('admin.bank.edit', compact('bank', 'locations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bank $bank)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'account_no' => [
                'required',
                'string',
                'max:255',
                Rule::unique('banks')->ignore($bank->id),
            ],
            'iban' => 'nullable|string|max:255',
            'type' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'convertion_rate' => 'required|numeric',
            'location_id' => 'required|exists:locations,id',
        ]);

        $bank->update($request->only([
            'name', 'code', 'account_no', 'iban', 'type', 'status', 'convertion_rate', 'location_id'
        ]));

        return redirect()->route('banks.index')->with('success', 'Bank account updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bank $bank)
    {
        $bank->delete();
        return redirect()->route('banks.index')->with('success', 'Bank account deleted successfully.');
    }
}
