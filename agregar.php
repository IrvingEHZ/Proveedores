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
          <a class="nav-link active" aria-current="page" href="agregar.php">Ingresar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="actualizar-eliminar.php">Modificar</a>
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
		<form action="#" id="proveedor" name="Agregar" method="POST">
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
      <td><label><input type="submit" name="registrarse" value="Registrar"></label></td>
	  <td><label><input type="reset" value="Reestablecer"></label></td>
    </tr>
  </tbody>
</table>
</form>
	</div>
	
</body>
</html>

<?php
	if(isset($_POST['registrarse'])){
		$rfc=$_POST['rfc'];
		$RaSo=$_POST['razon_social'];
		$Dir=$_POST['direccion'];
		$Est=$_POST['estado'];
		$Con=$_POST['contacto'];
		mysqli_query($conexion, "INSERT INTO proveedor (`RFC`, `RazonSocial`, `Direccion`, `Estado`, `Contacto`) VALUES ('$rfc','$RaSo','$Dir','$Est','$Con')");
	}mysqli_close($conexion);
?>
