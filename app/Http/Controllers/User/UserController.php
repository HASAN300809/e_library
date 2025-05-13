<?php

namespace App\Http\Controllers\User;

use App\Models\Manajemen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $books = Manajemen::with('detailmanajemen')->get();

        return view('dashboard', compact('books'));
    }
}
