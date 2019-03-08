<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('admin.login');
    }

    public function store(Request $request)

    {
       $this->Validate($request,[
           'email'=>'required|email',
           'password'=>'required',

       ]);

       if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
           return redirect ('course');
       }
       else {
          return redirect ('login');
       }
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/login');
    }





}



