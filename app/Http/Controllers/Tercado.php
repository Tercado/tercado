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
}

