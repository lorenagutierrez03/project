<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactorialreController extends Controller
{
    public function index(Request $request){
    $numero = $request->Numero; 
    $factorial=$numero;
      if($factorial == 1){
              return 1;
             }else 
             return $numero * $factorial($numero, -1);    
          }
  
    }
//}//return view('Factorialre', compact('factorial')); 
  

