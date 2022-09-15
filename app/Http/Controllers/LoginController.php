<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, Session;

class LoginController extends Controller
{

	public function loginPage() {

		return view('account.login');

	}
    
    public function login(Request $request) {

    	$request->validate([
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	$remember = ($request->has('remember')) ? true : false;
        
        $auth = Auth::attempt(['email' => request('email'), 'password' => request('password')], $remember);

        if($auth === true) {

            $user = Auth::user();
            
            Session::flash('success', 'Login Successful');    
            return redirect()->route('home');    
            
        }

        Session::flash('error', 'Login Failed');  
        return redirect()->back();

    }
}
