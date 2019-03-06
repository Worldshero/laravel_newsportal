<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('admin.login');
    }

    public function store()
    {
        if (auth()->attempt(request(['Email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }

        return redirect()->to('/course');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/course');
    }





}



