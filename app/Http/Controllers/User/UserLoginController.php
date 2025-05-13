<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserLoginController extends Controller
{
    public function index() 
    {
        $akunuser = User::latest()->get();

        return view('admin.userlogin', compact('akunuser'));
    }
}
