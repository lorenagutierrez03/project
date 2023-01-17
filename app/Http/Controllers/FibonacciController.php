<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function index(Request $request)
   {
         $fibonacci = array(0, 1);
         $num_fibonacci =1;
         if(isset($request->num_fibonacci)){
            $num_fibonacci = $request->num_fibonacci;

            if($num_fibonacci > 1){
                for($i = 2; $i < $num_fibonacci; $i++){
                    $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];

                }
            }
         }     
         $fibonacci = implode(",", $fibonacci);
         return view('Fibonacci', compact('fibonacci')); 
    }
}
