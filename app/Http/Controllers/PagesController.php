<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;

class PagesController extends Controller
{
    public function libros(){
        $libros = Libro::all();
        return view('welcome', compact('libros'));
    }
}
