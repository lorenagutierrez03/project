<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegoController extends Controller
{
  public function getPulsa($pulsa){
return response()->json(['pulsa' => $pulsa]);
    }
}
