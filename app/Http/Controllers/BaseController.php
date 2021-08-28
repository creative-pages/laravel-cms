<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home() {
        return view('home');
    }
    public function service() {
        return view('service');
    }
    public function company() {
        return view('company');
    }
    public function contact_us() {
        return view('contact_us');
    }
}
