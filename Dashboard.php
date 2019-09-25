<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function __contruct(){
        $this->middleware('cek_login');
    }
    public function index(){
        return view('dashboard');
    }
}
