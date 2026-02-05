<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {

        $name = 'Pedro';
        $habits = ['Ler', 'Exercitar', 'Meditar'];
        return view('home', compact('name', 'habits'));
    }
}
