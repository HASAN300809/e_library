<?php

namespace App\Http\Controllers\Admin;

use App\Models\Manajemen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {

        $books = Manajemen::with('detailmanajemen')->get();

        return view('admin.dashboard', compact('books'));
    }
}
