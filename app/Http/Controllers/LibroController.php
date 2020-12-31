<?php

namespace App\Http\Controllers;

use App\Libro;
use App\Autor;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index() {
        $libros = Libro::all();
        return view('welcome', ['libros' => $libros]);
    }

    public function librosAutor(Request $request) {
        $idAutor = $request->id;
        $libros = Libro::where('autor_id', '=', $idAutor)->get();
        return view('welcome', ['libros' => $libros]);
    }
}
