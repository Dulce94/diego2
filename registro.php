<!DOCTYPE>
<html>
<head>
   <title> Registro de contactos </title>
</head>
<body>

<center>
<?php
  
   $conexion = mysqli_connect("192.168.1.72:3307", "servidor", "practica", "agenda");
  
   
 
   
 mysqli_query($conexion, "insert into contactos(nombre_contacto, telefono_contacto, correo_contacto) 
 
 VALUES ('$_REQUEST[ncon]', '$_REQUEST[telcon]', '$_REQUEST[correo]')")
 
    
	
or die("contacto no registrado". mysqli_error
      ($conexion));
	  
	  
mysqli_close($conexion);

?>

          <h1>Contacto registrado</h1>
    <a href="rmilitantes.php">regresar</a>
    <br>
    <a href="index.php">Inicio</a>
    
    </center>


</body>
</html>