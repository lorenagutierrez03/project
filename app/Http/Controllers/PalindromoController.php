<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromoController extends Controller
{
    public function index(Request $request){
        $palabra =$request->idPalabra;
        $palabrainv = strrev ($palabra); 
        $result="";
        
    if ($palabrainv == $palabra){
       //  return view('Palindromo', compact('result'));
        
       return $result= "La palabra es palíndroma";
       //return view("Palindromo");
    }else{
       return $result= "La palabra no es palíndroma";
        // return view('Palindromo', compact('result')); 
        // return view("Palindromo");
         }    
        
        }
       

    }


