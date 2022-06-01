<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware(['guest']);
    } 
    
    public function index(){
        return view("auth.login");
    }
    public function store(request $request){
        //validate
        $this->validate($request, [
            'email' => 'required',
            'password'=>'required'
        ]);
        //if user entered invalid credentials
        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('status', 'Invalid login details');//redirect back to the login page
        }
        auth()->attempt($request->only('email', 'password'));
        return redirect()->route('dashboard');
    }
}
