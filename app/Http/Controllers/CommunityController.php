<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    //file ticket index page return
    public function index(){
        return view('pages.community.index');
    }

    //single community post page return
    public function show(){
        return view('pages.community.single');
    }
}
