<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function create(Request $request)
    {
        return view('frontend/officer/create');
    }

    public function view(Request $request)
    {
        return view('frontend/officer/view');
    }
}
