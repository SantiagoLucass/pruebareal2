<html>
<html>
<head>
<title>Alta de Registros</title>
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
  <div>
<h1>Alta de Alumnos</h1>
<?php
include('conex.php');
$resultado=mysqli_query($conexion,"SELECT * FROM cliente");
$extraido=mysqli_fetch_assoc($resultado);
echo "-nombre: ".$extraido[nombre];


mysqli_close($conexion);
?>
</body>
</html>