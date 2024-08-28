<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function create(Request $request)
    {
        return view('frontend/officer/create');
    }

    public function store(Request $request)
    {
        try 
        {
            $request->validate([
                'email' => 'required',
        
                'name' => 'required',
                'password' => 'required',
              
                'mobile_number' => 'required',

                'designation' => 'required',

          

                'department' => 'required'

                
            ]);
    
            // Check if validation fails
            // if ($validator->fails()) {
            //     return redirect()->back()->withErrors($validator)->withInput();
            // }
    
            // dd($request);
    
            $user = User::create([
                'name' => $request->input('name'),
            
                'email' => $request->input('email'),

                'password' => Hash::make($request->input('password')),

                'mobile_number' => $request->input('phone'),

                'designation' => $request->input('address'),
                
                'department' => $request->input('department'),
                
            ]);
            

            $selectedRole = Role::where('name', 'Customer')->first();

            // dd($request->input('occupation'));
            // dd($selectedRole);
            
            $user->assignRole($selectedRole->name);

            // Register successful, set success message            
            $request->session()->flash('success_message', 'User registered successfully');
    
            // Redirect or return response
            return redirect()->route('home.register')->with('success', 'Registration successful!');    
        } 
        catch (ValidationException $e) {
            // return response()->json(['error' => $e->validator->errors()], 200);

            // Validation failed, return validation errors
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
            // dump($e->validator->errors());
        }
    }

    public function view(Request $request)
    {
        return view('frontend/officer/view');
    }
}
