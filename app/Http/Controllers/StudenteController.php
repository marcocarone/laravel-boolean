<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudenteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        return view('studenti.index');
    }

    public function show($id)
    {
        $studenti = config("studenti.studenti");
        if (!array_key_exists($id, $studenti)) {
            abort("404");
        }

        $studente = $studenti[$id];
        return view('studenti.show', compact("studente"));
    }
}
