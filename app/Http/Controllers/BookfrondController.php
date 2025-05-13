<?php

namespace App\Http\Controllers;

use App\Models\Manajemen;
use Illuminate\Http\Request;

class BookfrondController extends Controller
{
    public function index(){
        $books = Manajemen::with('detailmanajemen')->get();
        return view('frontend.bookfrond' , compact('books'));
    }
}
