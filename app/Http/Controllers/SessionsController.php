<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('admin.login');
    }

    public function store(Request $request){
       $input_data=$request->all();
       if(Auth::attempt(['email'=>$input_data['email'],'password'=>$input_data['password']])){
           Session::put('frontSession',$input_data['email']);
           return redirect('dashboard');
              }
          else{
           return back()->with('message','Account is not Valid!');
       }
    }

    public function destroy()
    {
        Auth::logout();
        Session::forget('frontSession');
        return redirect()->to('/login')->with('message','you are Logout!');
    }

    public function show($id)
    {

    return view('');
    }



}



