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

     if($data['eta'] == 25) {
       foreach ($studenti as $studente) {
           if($studente['eta'] <= $data['eta']) {
               $result['response'][] = $studente;
           }
       }
       return response()->json($result);

     }
     elseif ($data['eta'] == 50) {
       foreach ($studenti as $key => $studente) {
           if($studente['eta'] <= $data['eta'] && $studente['eta'] > 25) {
               $result['response'][] = $studente;
           }
       }
       return response()->json($result);

 } else {
     $result['error'] = 'Nessun risultato';
     return response()->json($result);
 }

 }


}
