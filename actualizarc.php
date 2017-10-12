<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actualizar contacto</title>

<link href="css/keyquotes_formulario_flat_design/keyquotes_formulario_flat_design/style/index_style.css" rel="stylesheet" type="text/css">
<link href="css/boton.css" rel="stylesheet" type="text/css">
</head>

<body>
 
 <section id="formulario">
		<p id="titulo">Actualizar contacto</p>

<form action="actualizar.php" method="POST" > 
    ID del contacto: <input type="text" name="idcontacto">
	  <br/>
	  <br/>
	  Nombre del contacto: <input type="text" name="nombrecontacto" pattern="([A-Z ]{5,20})" maxlength="20" required />
	  <br/>
	  <br/>
     <input type="submit" value="Actualizar contacto" name="btnactualizar">
<a href="index.php" class="button blue">
		<span class="icon-house"></span>Inicio
</form>

</body>
</html>