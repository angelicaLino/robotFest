<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Evento;

class PublicController extends Controller
{
    public function inicio()   
    { 
        $eventos = Evento::all();
        return view('public.inicio', compact('eventos')); 
    }
    public function contacto() 
    { 
        return view('public.contacto'); 
    }
    public function equipo()   { return view('public.equipo'); }
    public function acerca()   { return view('public.acerca'); }
    public function equipos()  { return view('public.equipos'); }


    public function categorias()  
    { 
        $categorias = Categoria::all();
        return view('public.categorias', compact('categorias')); 
    }


    public function eventos()  
    { 
        $eventos = Evento::all();
        return view('public.eventos', compact('eventos')); 
    }

    public function evento($id)
    {
        $evento = Evento::findOrFail($id);

        return view('public.evento', compact('evento'));
    }

}