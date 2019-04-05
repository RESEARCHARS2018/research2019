<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboard(){
        return view('admin.home.home');
    }

    public function user(){
        return view('admin.userInfo');
    }
}
