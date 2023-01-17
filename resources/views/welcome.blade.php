<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ejercicios</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

      <!-- Styles -->
      <style>
          html, body {
              background-color: rgb(217, 178, 178);
              color: #000000;
              font-family: 'Nunito', sans-serif;
              font-weight: 200;
              height: 100vh;
              margin: 0;
          }


      

          .position-ref {
              position: relative;
          }

          .top-right {
              position: absolute;
              right: 10px;
              top: 18px;
          }

          .content {
              text-align: center;
          }

          .title {
              font-size: 84px;
          }

  

          .m-b-md {
              margin-bottom: 30px;
              
          }
          .btn-primary{
              background-color: #bd79b0
          }
      </style>
    </head>
    <body>
      <div class="content">
        <div class="title m-b-md" style="font-size: 30px; margin-top:30px; ">
           <b>EJERCICIOS 
            ALGORITMICOS</b>  
          <img src="{{ asset('storage/img/al.gif')}}" class="card-img-top" alt="" style="height:50px; width:100px;">

        </div>


        <div class="card" style="width: 17rem; padding-right:37px; margin: auto; background-color:rgb(255, 255, 255)">
            <img src="{{ asset('storage/img/fibonnaci.jpg')}}" class="card-img-top" alt="" style="padding-left:18px;">
            <div class="card-body">
              <h5 class="card-title" style="font-size:20px;">Fibonacci</h5>
              <a href="/fibonacci" class="btn btn-primary">¡Vamos!</a>
            </div>
          </div>
    </body>
</html>