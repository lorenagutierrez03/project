<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>
    <body style=" background-image: url('storage/img/fondo.webp');">
        <div class="card" style="width: 690px; padding-right:37px; display: block; margin: auto;    margin-top:300px; background-color:rgb(255, 255, 255)">
            <img src="{{ asset('storage/img/mate.jpg')}}" class="card-img-top" alt="" style="padding-left:18px;">
            <div class="card-body">
              <h5 class="card-title" style="font-size:50px; text-align:center;">Factorización - Recursividad</h5>
              <a href="/factorialre" class="btn btn-primary" style="padding-left: 275px; font-size:35px;  ">¡Vamos!</a>
            </div>
        </div>
    </body>
</html>
