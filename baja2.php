<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	$dni=$_REQUEST['dni'];
	include('conex.php');

	$registros=mysqli_query($conexion,"select dni from alumnos
                       where dni= '$dni'") or
  	die("Problemas en el select:".mysqli_error());
	if ($reg=mysqli_fetch_array($registros))
	{
  	mysqli_query($conexion,"delete from alumnos where dni='$_REQUEST[dni]'") or
    	die("Problemas en el select:".mysqli_error());
  	echo "<p>Se efectuó el borrado del alumno con dicho dni.</p>";
	}
	else
	{
  	echo "<p>No existe el alumno con ese dni.</p>";
	}
	mysqli_close($conexion);
	
?>
<script>
    var boton = document.getElementById("nigth");
    var boton1 = document.getElementById("day");
    var body = document.getElementById("body");
    var parrafo = document.querySelector('p');
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