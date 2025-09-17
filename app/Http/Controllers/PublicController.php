<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public function inicio()   { return view('public.inicio'); }
    public function contacto() { return view('public.contacto'); }
    public function equipo()   { return view('public.equipo'); }
    public function acerca()   { return view('public.acerca'); }
    public function equipos()  { return view('public.equipos'); }
}