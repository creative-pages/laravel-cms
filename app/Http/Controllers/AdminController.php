<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        return view('adminsupport.login');
    }

    public function login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $data = array(
            'username' => $request->username,
            'password' => $request->password
        );

        if(Auth::guard('admin')->attempt($data)) {
            return redirect('/dashboard');
        } else {
            return redirect()->back()->with('login_failed', 'Username or Password is invalid!');
        }
    }

    public function dashboard() {
        return view('adminsupport.dashboard');
    }
}
