<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    //role index page rerurn
    public function index(){
        return view('pages.role.index');
    }
}
