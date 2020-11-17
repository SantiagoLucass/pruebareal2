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
$nombre= $_REQUEST['nombre'];
$apellido= $_REQUEST['apellido'];
$direccion= $_REQUEST['direccion'];
$tel= $_REQUEST['tel'];
$edad= $_REQUEST['edad'];
$altura=$_REQUEST['altura'];



/*$link = mysql_connect("localhost","root","root")
    or die('No se pudo conectar: ' . mysql_error());
echo 'Conexion Realizada';
mysql_select_db('escuela') or die('No se pudo seleccionar la base de datos');

$conexion = mysqli_connect("localhost","root","root","escuela") or
    die("Problemas con la conexión");*/

include('conex.php');
//$conexion=mysqli_connect('localhost','root','');
//mysqli_select_db($conexion,"escuela");
mysqli_query($conexion,"insert into cliente values ('$nombre','$apellido','$direccion','$tel','$edad','$altura')");
 // or die("Problemas en el select".mysqli_error($conexion));
//las ultimas versiones de php cambiaron a la función mysli en lugar de mysql


// funcion que extrae los datos de la BD
function mostrardatos($extraido){
  if ($extraido!=null) {
    echo "-nombre: ".$extraido['nombre']."<br>";
    echo "-apellido: ".$extraido['apellido']."<br>";
    echo "-direccion: ".$extraido['direccion']."<br>";
    echo "-telefono: ".$extraido['tel']."<br>";
    echo "-edad: ".$extraido['edad']."<br>";
    echo "-altura: ".$extraido['altura']."<br>";
    echo "############################################<br>";
  }else
  echo "no hay datos";
}
// consulta que trae desordenadamente los datos
// $extraido=mysqli_query($conexion,"SELECT * FROM cliente");
// $extraido=mysqli_fetch_assoc($resultado);

// MIENTRAS: ordena los datos con un vector y dentro del while ejecuta la funcion
// while ($fila=mysqli_fetch_assoc($extraido)) {
  // mostrardatos($fila);
// }
// muestra los resultados
// mysqli_free_result($extraido);

$resultado=mysqli_query($conexion,"SELECT * FROM cliente");
$extraido=mysqli_fetch_assoc($resultado);
foreach ($extraido as $key) {
  mostrardatos($extraido);
}
mysqli_free_result($resultado);
mysqli_close($conexion);

echo "<p>El alumno fue dado de alta.</p>";
if (!$conexion) {
	 echo "<p>Error al conectar con la Base de Datos </p>";
}

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
      h1.style.color = "white";
    }
    boton1.onclick = function(){
      body.style.background = "white";
      parrafo.style.color = "black";
      h1.style.color = "black";
    }
    
    
  </script>
</body>
</html>