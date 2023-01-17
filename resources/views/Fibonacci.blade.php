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
<body>
  <div class="container text-center">
    <h1 class="my-5 ">Serie de Fibonacci</h1>
    <img src="{{ asset('storage/img/fibonnaci.jpg')}}" class="card-img-top" alt="" style="width:150px; height:100px;">


    <form action={{route('fibonacci.index')}} method="POST">
      @csrf
        @method('POST')

    <div class="mb-3"><br> 
        <label for="num_fibonacci" class="form-label">Numero Fibonacci:</label><br>
        <input type="text" class="form-control" id="num_fibonacci" name="num_fibonacci" placeholder="Escribe un número">
      </div>
      <div class="mb-3">
       <button type="submit" class="btn btn-primary">Imprimir serie</button>
      </div>

      <a href="/" class="btn btn-secundary">Volver</a>
    
    </form>
  </div>


  @if (isset($fibonacci))
  <label id="num_fibonacci" style="" >Resultado: {{$fibonacci}}</label>
  @endif


    
      
 
 </form>
  </div>

     

</body>
</html>