<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Registro de contacto</title>

<link href="css/keyquotes_formulario_flat_design/keyquotes_formulario_flat_design/style/index_style.css" rel="stylesheet" type="text/css">
<link href="css/boton.css" rel="stylesheet" type="text/css">


</head>
<body>

  
      <section id="formulario">
		<p id="titulo">Registro formulario</p>

        <form action="registro.php" method="POST"> 

	  Nombre del contacto: <input type="text" name="ncon" pattern="([A-Z ]{3,40})" maxlength="40" required/>
	  <br/>
	  <br/>
	  Telefono del contacto: <input type="number" size="10" name="telcon" pattern="^[5]\d{9}$">
	  <br/>
	  <br/>
      Correo del contacto: <input type="email" name="correo" required/>     
	  <br/>
	  <br/>


<?php



$mysqli = mysqli_connect("192.168.1.72:3307", "servidor", "practica", "agenda");


?>
</select>	
      


	  <br/>
	  <br/>
	 <input type="submit" value="Registrar contacto" name="btnregistrar">
<a href="index.php" class="button blue">
		<span class="icon-house"></span>Inicio
    
	</a>
	  </form>
 </form>
</body>
</html>