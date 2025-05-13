<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactfrondController extends Controller
{
    public function index(){
        return view('frontend.contactfrond');
    }   
}
