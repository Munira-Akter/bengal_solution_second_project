<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileTicketController extends Controller
{
    //file ticket index page return
    public function index(){
        return view('pages.tickets.index');
    }

    // Single file ticket show
    public function show(){
        return view('pages.tickets.single');
    }
}
