<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialBookController extends Controller
{
    public function index() 
    {
        return view('specialbook');
    }
}
