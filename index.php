<!DOCTYPE html>
<html>
<head>
	<title>HOLA HOLA</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilo.css">
 
</head>
<body class="container" id="body">
   <button type="button" class="btn btn-default" id="nigth">nigth</button>
   <button type="button" class="btn btn-warning" id="day">day</button>
	<h1 id="titulo">Alumno</h1>
	<div class="btn-group btn-group-lg">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Alta</button>
	<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Alta del alumno</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <?php
        include('alta1.html');
        ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Baja</button>
			<!-- The Modal -->
<div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <?php
        include('baja1.html');
        ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Modificar</button>
			<!-- The Modal -->
<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modificar alumno</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <?php
        include('modifica1.html');
        ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
	</div>
  <script>
    var boton = document.getElementById("nigth");
    var boton1 = document.getElementById("day");
    var body = document.getElementById("body");
    var h1 = document.getElementById("titulo")
    boton.onclick = function(){
      body.style.background = "#000018";
      h1.style.color = "white";
    }
    boton1.onclick = function(){
      body.style.background = "white";
      h1.style.color = "black";
    }
    
    
  </script>
</body>
</html>