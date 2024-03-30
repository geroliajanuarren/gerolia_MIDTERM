<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;

class Player1 extends Controller
{
    public function welcome()
    {
        return view('template');
    }

    public function store(Request $request)
    {
        $record = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
            'birthdate' => $request->input('birthdate'),
            'gender' => $request->input('gender'),
            'civil_status' => $request->input('civilStatus'),
            'municipality' => $request->input('municipality'),
            'address' => $request->input('address'),
            'contact_number' => $request->input('contactNumber'),
        ];
    
        Employer::create($record);
    
        return redirect()->route('welcome')->with('success', 'Employee added successfully.');
    }
    
}
