<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhiteCardController extends Controller
{
    public function create(Request $request)
    {
        return view('frontend/white_card/create');
    }

    public function store(Request $request)
   {
    // Validate and store the white card data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'father_name' => 'required|string|max:255',
        'door_no_street' => 'required|string|max:255',
        'address' => 'required|string',
        'city' => 'required|string|max:255',
        'age' => 'required|integer',
        'dob' => 'required|date',
        'mobile' => 'required|string|max:15',
    ]);
    
    WhiteCard::create($validatedData);

    // Redirect or return response
    return redirect()->route('whitecard.index')->with('success', 'White Card created successfully.');

    }

    public function view(Request $request)
    {
        return view('frontend/white_card/view');
    }

    public function info(Request $request)
    {
        return view('frontend/white_card/info');
    }
    public function status(Request $request)
    {
        return view('frontend/white_card/status');
    }
}
