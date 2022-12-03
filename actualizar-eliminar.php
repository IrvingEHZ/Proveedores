<?php
include("conexion.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
<title>Proveedores</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
	$("#hide").click(function(){
	$("#actualiza").hide();
	});
	$("#show").click(function(){
	$("#actualiza").slideDown();
	});
	});
	$(document).ready(function(){
	$("#hide2").click(function(){
	$("#elimina").hide();
	});
	$("#show1").click(function(){
	$("#elimina").slideDown();
	});
	});

	</script>
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="agregar.php">Ingresar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="actualizar-eliminar.php">Modificar</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="mostrar.php">Mostrar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	
	<div id="principal">
		<h1><em>≫ ──── ≪Bienvenido≫ ──── ≪</em></h1>
		<table align="center" width="34%" height="84" border="0">
		  <tbody>
			<tr align="center">
			  <td><p>¿Que desea hacer?</p></td>
			</tr>
			<tr>
			  <td><table width="100%" height="100%" border="0">
				  <tbody>
					<tr align="center">
					  <td>
						  <button id="show1">Eliminar</button></td>
					  <td><button id="show">Actualizar</button></td>
					</tr>
				  </tbody>
				</table>
				</td>
			</tr>
		  </tbody>
		</table>
		<div id="actualiza">
		<h1><em>≫Actualizar≪</em></h1>
		<form action="#" id="proveedor" name="actualizar" method="POST">
		<table align="center" width="33%" border="1">
  <tbody>
    <tr>
      <td><label>RFC</label></td>
      <td><input type="text" id="RFC" name="rfc" placeholder="RFC"></td>
    </tr>
    <tr>
      <td><label>Razon Social</label></td>
      <td><input type="text" id="Razon_Social" name="razon_social" placeholder="Razon Social"></td>
    </tr>
    <tr>
      <td><label>Dirreccion</label></td>
      <td><input type="text" id="Direccion" name="direccion" placeholder="Direccion"></td>
    </tr>
    <tr>
      <td><label>Estado</label></td>
      <td><input type="text" id="Estado" name="estado" placeholder="Estado"></td>
    </tr>
    <tr>
      <td><label>Contacto</label></td>
      <td><input type="text" id="Contacto" name="contacto" placeholder="Contacto"></td>
    </tr>
	  <tr>
      <td><label><input type="submit" name="actualizar" value="Actualizar"></label></td>
	  <td><label><input type="reset" value="Reestablecer"></label></td>
    </tr>
  </tbody>
</table>
</form>
		<button id="hide">Ocultar</button>
			</div>
		
		<div id="elimina">
		<h1><em>≫Eliminar≪</em></h1>
		<form action="#" id="proveedor" name="Eliminar" method="POST">
		<table align="center" width="33%" border="1">
  <tbody>
    <tr>
      <td><label>RFC</label></td>
      <td><input type="text" id="RFC" name="rfc" placeholder="RFC"></td>
    </tr>
	  <tr>
      <td><label><input type="submit" name="eliminar" value="Eliminar"></label></td>
    </tr>
	   </tbody>
</table>	
</form>
		<button id="hide2">Ocultar</button>	
			</div>
		
	</div>	
	
</body>
</html>

<?php
	if(isset($_POST['actualizar'])){
		$rfc=$_POST['rfc'];
		$RaSo=$_POST['razon_social'];
		$Dir=$_POST['direccion'];
		$Est=$_POST['estado'];
		$Con=$_POST['contacto'];
		mysqli_query($conexion, "UPDATE `proveedor` SET `RazonSocial`='$RaSo',`Direccion`='$Dir',`Estado`='$Est',`Contacto`='$Con' WHERE RFC = '$rfc'");
	}elseif(isset($_POST['eliminar'])){
		$rfc=$_POST['rfc'];
		mysqli_query($conexion, "DELETE FROM proveedor WHERE RFC = '$rfc'");}
	mysqli_close($conexion);
?>
