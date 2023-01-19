<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fibonacci</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

      <!-- Styles -->
      
    </head>
    <body style=" background-image: url('storage/img/fondo.webp');">
        <div class="card" style="width: 690px; padding-right:37px; display: block; margin: auto; margin-top:300px; background-color:rgb(255, 255, 255)">
            <img src="{{ asset('storage/img/mate.jpg')}}" class="card-img-top" alt="" style="padding-left:18px;">
            <div class="card-body">
              <h5 class="card-title" style="font-size:50px; text-align:center;">Serie de Fibonacci</h5>
              <a href="/fibonacci"  class="btn btn-primary" style=" font-size:35px; background-color: #ffff00; color:#000000 ; font-size:26px; border:none; ">¡Vamos!</a>
            </div>
        </div>
    </body>
</html>