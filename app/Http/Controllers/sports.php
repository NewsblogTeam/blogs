<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sports extends Controller
{
    public function index(){
    	return view('sports.index');
    }
}
