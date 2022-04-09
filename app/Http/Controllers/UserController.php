<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //member index page return
    public function index(){
        return view('pages.user.index');
    }

}
