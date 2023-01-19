<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factorización</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>
<body style=" background-image: url('storage/img/fondo2.webp');">
  <div class="container text-center" style=" margin-top:190px;">
    <h1 class="my-5 " style="font-size:60px; ">Factorización</h1>
    <img src="{{ asset('storage/img/mate.png')}}" class="card-img-top" alt="" style="width:300px; height:210px;">

    <form action={{route('factorizacion')}} method="POST">
      @csrf
        @method('POST')
    <div class="mb-3"><br>
        <label for="idNumero" class="form-label" style="font-size:25px; ">Escribe un número:</label>
        <input type="text" class="form-control" id="idNumero" name="idNumero" placeholder="Escribe un número">
      </div>
      <div class="mb-3">
       <button type="submit" class="btn btn-primary" style="background-color: #ffff00 ; color:#000000 ; font-size:16px; border:none;">Imprimir resultado</button>
      </div>

      <a href="/" class="btn btn-secundary">Volver</a>

    </form>
  </div>

  @if (isset($factorial))
  <label id="idNumero" style="padding-left: 870px; font-size:25px; margin-top:40px; " >Resultado: {{$factorial}}</label>
  @endif


  @if (isset($suma1))
  <label id="suma1" style="" >La suma del resultado es: {{$suma1}}</label>
  @endif

</body>
</html>