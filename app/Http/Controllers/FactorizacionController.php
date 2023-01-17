<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FactorizacionController extends Controller
{
    public function index(Request $request){
        $numero = $request->idNumero;
        $factorial = 1;
       // $n= 10;
        //$suma=0;
        if(isset($request->idNumero)){
           
                for($i = 1; $i <=$numero; $i++){
                   $factorial = $factorial * $i;
              // } 
              
             // if($factorial==0){

              //   return 1;
           //   }else if($factorial=1){
             //   return $suma
             // }else{
            //    return $numero * $factorial($numero, $factorial); 
            //  }
             
               }         
        }
        return view('Factorizacion', compact('factorial')); 
    }

  
}

