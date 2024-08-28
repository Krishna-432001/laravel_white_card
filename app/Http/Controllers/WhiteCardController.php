<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhiteCardController extends Controller
{
    public function create(Request $request)
    {
        return view('frontend/white_card/create');
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
