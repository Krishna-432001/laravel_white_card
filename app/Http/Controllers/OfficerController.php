<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User; // Assuming you have a User model
use Spatie\Permission\Models\Role; // Assuming you have a Role model
use App\Models\Department; // Assuming you have a Department model

class OfficerController extends Controller
{
    // Show the create officer form
    public function create(Request $request)
    {
        $departments = Department::all(); // Fetch departments for the dropdown
        return view('frontend.officer.create', compact('departments'));
    }

    // Store the officer details
    public function store(Request $request)
    {

        // dd($request);
        // Validate the request
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string|max:255',
            'password' => 'required',
            'confirmPassword' => 'required',
            'mobile_number' => 'required|digits:10',
            'designation' => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);

        try {
            // Create the user
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'mobile_number' => $validatedData['mobile_number'],
                'designation' => $validatedData['designation'],
                'department' => $validatedData['department'],
            ]);

            // dd($user);

            // Assign role to user
            $selectedRole = Role::where('name',  $validatedData['department'])->first();
            $user->assignRole($selectedRole->name);

            // Set success message
            $request->session()->flash('success_message', 'Officer registered successfully');

            // Redirect to home or any other page
            return redirect()->route('home')->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            // Handle exceptions and return error message
            return redirect()->back()->withErrors(['error' => 'An error occurred while registering the officer.'])->withInput();
        }
    }

    // Show the officer view page
    public function view(Request $request)
    {

        $officers = User::where('email', '!=', 'admin@gmail.com')->get();

        $data =[
            'departments' => Department::all(),
            // 'officers' => User::all()
            'officers' => $officers    
        ];

        return view('frontend.officer.view',$data);
    }
}
