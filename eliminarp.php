<!DOCTYPE>
<html>
<head>
   <title>Eliminar</title>
 </head>
 <body>
 <center>
    <?php
	
	
	
   $conexion = mysqli_connect("localhost", "root", "usbw", "agenda")
   or die ("Error en la conexion");
   
	$ncon = $_POST['ncon'];
	
	mysqli_query($conexion, "DELETE FROM contactos where nombre_contacto='$ncon'")
	   or die ("Error al eliminar datos");
	   
	   mysqli_close($conexion);
	
	?>
    
      <h1>Contacto eliminado</h1>
    <a href="eliminarpro.php">regresar</a>
        <br>
    <a href="index.php">Inicio</a>
    </center>
    
</body>
</html>