<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //dashboard index page return
    public function index(){
        return view('pages.home.index');
    }
}
