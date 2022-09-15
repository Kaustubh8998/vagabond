<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, Hash, Session;

class AdminController extends Controller
{

	public function logout() {

        Auth::logout();

        Session::flash('success', 'Logged Out');
        return redirect()->route('login');

    }

    public function home() {

    	return view('account.home');

    }

    public function password() {

    	return view('account.change-password');

    }

    public function changePassword(Request $request) {

    	$request->validate([
    		'password' => 'required|min:6',
    		'password_again' => 'required|same:password'
    	]);

    	$user = Auth::user();

    	$user->password = Hash::make($request->password);
    	$user->save();

    	Session::flash('success', 'Password Changed');
    	return redirect()->route('home');

    }

}
