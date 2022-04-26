<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookController extends Controller
{
    public function index(){
        return view('index');
    }
}
