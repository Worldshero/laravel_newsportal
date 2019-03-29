<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User;
class UserapiController extends Controller
{

    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

  //create user and store value in database
    public function CreateUser()
{
    $user = User::create(request(['name', 'email', 'password']));
    auth()->login($user);
    $msg=[' User Account  Created ! Login with your valid Credentials' ];
    return response()->json($msg);
}
//for login
public function loginWithDetails(Request $request){
    $input_data=$request->all();
    if(Auth::attempt(['email'=>$input_data['email'],'password'=>$input_data['password']])){
        Session::put('frontSession',$input_data['email']);
        $valid=['You are logged in'];
        return response()->json($valid);
           }
       else{
        $msg=[' User Account  Created ! Login with your valid Credentials' ];
    return response()->json($msg);
    }
 }


}
