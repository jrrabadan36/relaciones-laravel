<?php

namespace App\Http\Controllers;

use App\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index() {
        $autores = Autor::all();
        return view('welcome', ['autores' => $autores]);
    }

    public function autorLibros(Request $request) {
        $idAutor = $request->id;
        $libros = Autor::find($idAutor)->libros;
        return view('welcome', ['libros' => $libros]);
    }
}
