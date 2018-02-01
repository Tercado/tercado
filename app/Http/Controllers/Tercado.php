<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tercado extends Controller
{
    public function accueil()
    {
        return view('accueil');
    }
    public function presentation()
    {
        return view('presentation');
    }
    public function equipe()
    {
        return view('equipe');
    }
    public function restaurant()
    {
        return view('restaurant');
    }
    public function carte()
    {
        return view('carte');
    }
    public function bar()
    {
        return view('bar');
    }
    public function boutique()
    {
        return view('boutique');
    }
    public function horaire()
    {
        return view('horaire');
    }
    public function evenement()
    {
        return view('evenement');
    }
    public function artiste()
    {
        return view ('artiste');
    }
    public function burger()
    {
        return view('burger');
    }
}

