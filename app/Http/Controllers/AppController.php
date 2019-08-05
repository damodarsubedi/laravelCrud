<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //making a method
    public function index(){
        return view(view:'inc.welcome');
    }
}
