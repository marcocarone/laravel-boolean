<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
  public function index()
  {
      // $studenti = Student::all();

      $studenti = DB::table('students')->get();


      return view('database.index', compact("studenti"));
  }
}
