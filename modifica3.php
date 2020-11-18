<html>
<head>
<title>Modificación de Alumnos</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body id="body">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
      <a href="index.php"><img src="img/logo.png"></a>
      <button type="button" class="btn btn-default" id="nigth">nigth</button>
      <button type="button" class="btn btn-warning" id="day">day</button>
      </div>
    </div>
  </nav>
<?php
include('conex.php');

$registros=mysqli_query($conexion, "update alumnos
                         set nombre='$_REQUEST[nombrenuevo]' 
                         where nombre='$_REQUEST[nombreviejo]'") or
  die("Problemas en el select:".mysqli_error($conexion));
  
  $registros=mysqli_query($conexion,"update alumnos
                         set apellido='$_REQUEST[apellidonuevo]' 
                         where apellido='$_REQUEST[apellidoviejo]'") or
  die("Problemas en el select:".mysqli_error($conexion));
  
  $registros=mysqli_query($conexion,"update alumnos
                         set dni='$_REQUEST[dninuevo]' 
                         where dni='$_REQUEST[dniviejo]'") or
  die("Problemas en el select:".mysqli_error($conexion));
  
  $registros=mysqli_query($conexion,"update alumnos
                         set localidad='$_REQUEST[localidadviejo]' 
                         where localidad='$_REQUEST[localidadviejo]'") or
  die("Problemas en el select:".mysqli_error($conexion));

  $registros=mysqli_query($conexion,"update alumnos
                         set telefono='$_REQUEST[telefononuevo]' 
                         where telefono='$_REQUEST[telefonoviejo]'") or
  die("Problemas en el select:".mysqli_error($conexion));

  echo "<p>Los datos del alumno fueron modificados con exito</p>";
?>
<script>
    var boton = document.getElementById("nigth");
    var boton1 = document.getElementById("day");
    var body = document.getElementById("body");
    var parrafo = document.querySelector('p');
    var h1 = document.querySelector('h1');
    boton.onclick = function(){
      body.style.background = "#000018";
      parrafo.style.color = "white";
    }
    boton1.onclick = function(){
      body.style.background = "white";
      parrafo.style.color = "black";
    }
    
    
  </script>
</body>
</html>