<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    // Mostrar todas las noticias
    public function index()
    {
        $noticias = Noticia::orderBy('id', 'desc')->get(); // Trae todas las noticias
        return view('noticias.index', compact('noticias')); // Pasa a la vista
    }
}
