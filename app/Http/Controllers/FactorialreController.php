<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactorialreController extends Controller
{
    public function index(Request $request){
       $numero = $request->Numero;
        $factorial = 1;
       // $n= 10;
        //$suma=0;
       
      //  if(isset($request->Numero)){
           
        
      if($factorial == 0){

              return 0;
             }else if($factorial=1){
               return 0;
                       }else{
             return $numero * $factorial($numero, -1); 
          }
             
                    
        
       
    }
}/return view('Factorialre', compact('factorial')); 
  
}
