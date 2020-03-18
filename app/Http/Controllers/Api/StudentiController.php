<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentiController extends Controller
{
  public function eta(Request $request)
 {
     $data = $request->all();
     dd($data);
     // return response()->json($data);
 }
}
