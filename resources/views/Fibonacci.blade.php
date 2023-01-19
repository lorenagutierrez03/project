<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fibonacci</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

   
</head>
<body style=" background-image: url('storage/img/fondo2.webp');">
  <div class="container text-center" style=" margin-top:195px;">
    <h1 class="my-5 " style="font-size:60px;">Serie de Fibonacci</h1>
    <img src="{{ asset('storage/img/Fibonacci.webp')}}" class="card-img-top" alt="" style="width:380px; height:200px;">


    <form action={{route('fibonacci')}} method="POST">
      @csrf
        @method('POST')

    <div class="mb-3"><br> 
        <label for="num_fibonacci" class="form-label" style="font-size:25px; ">Numero Fibonacci:</label><br>
        <input type="text" class="form-control" id="num_fibonacci" name="num_fibonacci" placeholder="Escribe un número">
      </div>
      <div class="mb-3">
       <button type="submit" class="btn btn-primary" style="background-color: #ffff00 ; color:#000000 ; font-size:17px; border:none;">Imprimir serie</button>
      </div>

      <a href="/" class="btn btn-secundary">Volver</a>
    
    </form>
  </div>


  @if (isset($fibonacci))
  <label id="num_fibonacci" style="padding-left: 700px; font-size:25px; margin-top:40px;" >Resultado: {{$fibonacci}}</label>
  @endif


    
      
 
 </form>
  </div>

     

</body>
</html>