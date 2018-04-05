@extends('layouts.app')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Viemport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

   
</head>
<body>
   <div class="container">
       
       <h1 class="text-center">Inicio</h1>

   </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  @include('sweet::alert')
</body>
</html>

<script> 
    swal({
        "timer":1000,
        "title":"Inicio",
        "text":"Inicio Seccion Exitoso",
        "showConfirmButton":false
    });
</script>

