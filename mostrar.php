<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
<title>Proveedores</title>
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
          <a class="nav-link" href="actualizar-eliminar.php">Modificar</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="mostrar.php">Mostrar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<div id="principal">
		<h1><em>≫Consultar≪</em></h1>
		<form action="#" id="proveedor" name="Consultar" method="POST">
		<table align="center" width="33%" border="1">
		  <tbody>
			<tr>
			  <td><label>RFC</label></td>
			  <td><input type="text" id="RFC" name="rfc" placeholder="RFC"></td>
			</tr>
			  <tr>
			  <td><label><input type="submit" value="Consultar" class="btn btn-info" name="consultar" ></label></td>
			</tr>
		  </tbody>
		</table>	
		</form>
		<br>
	</div>
</body>
	<?php
	include("conexion.php");
	if(isset($_POST['consultar'])){
		$rfc=$_POST['rfc'];
		$consulta = "SELECT `RFC`, `RazonSocial`, `Direccion`, `Estado`, `Contacto` FROM `proveedor` WHERE RFC = '$rfc'";
		$resul = mysqli_query($conexion,$consulta);
		while($consulta = mysqli_fetch_array($resul)){
		echo"
		<table align=center width= 60% border=1>
		  <tbody>
			<tr align=center>
			  <td>RFC</td>
			  <td >Razon Social</td>
			  <td>Direccion</td>
			  <td>Estado</td>
			  <td>Contacto</td>
			</tr>
			<tr align=center>
			  <td>".$consulta['RFC']."</td>
			  <td>".$consulta['RazonSocial']."</td>
			  <td>".$consulta['Direccion']."</td>
			  <td>".$consulta['Estado']."</td>
			  <td>".$consulta['Contacto']."</td>
			</tr>
		  </tbody>
		</table>
		";
		}
	}mysqli_close($conexion);
?>
</html>
