<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
  public function index()
  {
      $studenti = Student::all();
      return view('database.index', compact("studenti"));
  }
}
