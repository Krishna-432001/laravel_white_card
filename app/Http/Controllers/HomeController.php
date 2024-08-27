<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Department;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data =[
            'departments' => Department::all()
        ];

        return view('frontend/home',$data);
    }
}
