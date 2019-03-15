<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegistrationController extends Controller
{
// for registration get method
 public function create()
    {
        return view('Admin.signup');
    }

// For registration post method to store form data
public function store()
{
    $this->validate(request(), [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'password2'=>'required'
    ]);

    $user = User::create(request(['name', 'email', 'password']));

    auth()->login($user);

    return redirect()->to('/login')->with('success','Now you can login with your email and password');
}



}
