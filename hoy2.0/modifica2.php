<html>
<head>
<title>Problema</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<?php

include('conex.php');

$registros=mysqli_query($conexion,"select * from alumnos
                        where dni='$_REQUEST[dni]'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
?>

<form action="modifica3.php" method="post">

Ingrese nuevo Nombre:
<input type="text" name="nombrenuevo" value="<?php echo $reg['nombre'] ?>">
<br>
<input type="hidden" name="nombreviejo" value="<?php echo $reg['nombre'] ?>">
<br>
<br>
<br>

Ingrese nuevo Apellido:
<input type="text" name="apellidonuevo" value="<?php echo $reg['apellido'] ?>">
<br>
<input type="hidden" name="apellidoviejo" value="<?php echo $reg['apellido'] ?>">
<br>
<br>
<br>

Ingrese nuevo Dni:
<input type="text" name="dninuevo" value="<?php echo $reg['dni'] ?>">
<br>
<input type="hidden" name="dniviejo" value="<?php echo $reg['dni'] ?>">
<br>
<br>
<br>

Ingrese nueva Localidad:
<select name="localidadviejo" type="hidden">
<option value="<?php echo $reg['localidad'] ?>">San Clemente</option>
<option value="<?php echo $reg['localidad'] ?>">Las Toninas</option>
<option value="<?php echo $reg['localidad'] ?>">Santa Teresita</option>
<option value="<?php echo $reg['localidad'] ?>">Mar del Tuyu</option>
<option value="<?php echo $reg['localidad'] ?>">Costa del Este</option>
<option value="<?php echo $reg['localidad'] ?>">Aguas Verdes</option>
<option value="<?php echo $reg['localidad'] ?>">La Lucila</option>
<option value="<?php echo $reg['localidad'] ?>">San Bernardo</option>
<option value="<?php echo $reg['localidad'] ?>">Mar de Ajo</option>
<option value="<?php echo $reg['localidad'] ?>">Nueva Atlantis</option>
</select>

<br>
<br>
<br>
Ingrese nuevo Telefono:
<input type="text" name="telefononuevo" value="<?php echo $reg['telefono'] ?>">
<br>
<input type="hidden" name="telefonoviejo" value="<?php echo $reg['telefono'] ?>">
<br>
<br>
<br>





<input type="submit" value="Modificar">
</form>

<?php
}
else
  echo "No existe alumno con dicho dni";
?>
</body>
</html>