<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BbController extends Controller
{
    public function index(){
        return view('index');
    }
    public function signin(){
        return view('signin');
    }
    public function signup(){
        return view('signup');
    }
    public function applications(){
        return view('applications');
    }
}
