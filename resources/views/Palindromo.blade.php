<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palindromo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>
<body >
<body style=" background-image: url('storage/img/fondo2.webp');">
  <div class="container text-center" style=" margin-top:195px;">
    <h1 class="my-5 " style="font-size:60px;">Palíndromo</h1>
    <img src="{{ asset('storage/img/palindromo.png')}}" class="card-img-top" alt="" style="width:380px; height:200px;">

    <form action={{route('palindromo')}} method="POST">
      @csrf
        @method('POST')
    <div class="mb-3"><br>
        <label for="idPalabra" class="form-label" style="font-size:25px;">Escribe una palabra:</label>
        <input type="text" class="form-control" id="idPalabra" name="idPalabra" placeholder="Escribe una palabra">
      </div>
      <div class="mb-3">
       <button type="submit" class="btn btn-primary" style="background-color: #ffff00 ; color:#000000 ; font-size:17px; border:none;">Imprimir</button>
      </div>
      <a href="/" class="btn btn-secundary">Volver</a>
    </form>
  </div>

   
  




</body>
</html>