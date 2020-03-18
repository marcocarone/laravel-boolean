<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentiController extends Controller
{
  public function eta(Request $request)
 {
     $data = $request->all();
     // dd($data);

     $studenti = config('studenti.studenti');

     $result = [
         'error' => '',
         'response' => []
     ];

     // if($data['eta'] > 0 && $data['eta'] <= 25 ) {
         $result['response'] = $studenti;
         return response()->json($result);
     // }

 }
}
