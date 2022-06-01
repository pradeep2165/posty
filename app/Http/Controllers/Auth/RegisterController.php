<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    
    public function store(request $request){
        //validate
        $this->validate($request, [
            'name'=>'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password'=>'required|confirmed'
        ]);
        //create user
        User::create([
            'name' =>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        //signin user after signup
        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard');
        //store user
        //sign the user
        //redirect
    }
    
}
