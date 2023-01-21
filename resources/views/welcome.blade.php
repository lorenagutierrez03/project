<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Juego - Simón Dice..</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      
    </head>
    <body  style=" background-image: url('storage/img/vj.jpg');">
       <div class="class" style="padding-left:550px; margin-top:150px;">
    <div class="card" style="width: 800px; height:600px;  background:#000000; ">
    <h5 class="card-title" style="text-align:center; font-size:40px; color:#ffffff;">Bienvenido al juego : Simón Dice...</h5>
  <img src="{{ asset('storage/img/simon.gif')}}" class="card-img-top" alt="...">
  <div class="card-body" style="padding-left:360px;">   
    <a href="juego" class="btn btn-primary" style="background:#ffffff; border:none; color:#000000; font-size:28px;">Vamos!</a>

  </div>
</div>
            <div class="content">
                <div class="title m-b-md">
                
                </div>
                </div>
            </div>
    </body>
</html>
