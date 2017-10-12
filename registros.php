<!DOCTYPE>
<html>
<head>
  <title> consulta </title>
 </head>
 <body>
 
 <center>
      
               <h1>Contactos</h1>
     <?php
  
   $conexion = mysqli_connect("localhost", "root", "usbw", "agenda")
   or die ("Error en la conexion");
   
   $texto = '';
   $registros = '';
   
   if($_POST){
	   
	   $busqueda = trim($_POST['nombreconsulta']);
	   
	   $entero = 0;
	   
	   if (empty($busqueda)){
		   
		   $texto = 'Búsqueda sin resultados';
		   }else{
		   }
   }

   $consulta = mysqli_query($conexion, "SELECT * FROM contactos where nombre_contacto like '%$busqueda%'")
       or die ("Error al consultar los datos");
	   
	echo '<table border="1">';
	echo '<tr>';
	
	echo '<th id="id_contacto">ID</th>';
	echo '<th id="nombre_contacto">Nombre</th>';
	echo '<th id="telefono_contacto">Telefono</th>';
	echo '<th id="correo_contacto">Correo</th>';
	
	echo '</tr>';
	
	while ($extraido = mysqli_fetch_array($consulta))
	{
		echo '<tr>';
		echo '<td>'.$extraido['id_contacto'].'</td>';
		echo '<td>'.$extraido['nombre_contacto'].'</td>';
		echo '<td>'.$extraido['telefono_contacto'].'</td>';
		echo '<td>'.$extraido['correo_contacto'].'</td>';

		echo '</tr>';
		
	}
	mysqli_close($conexion);
	echo '</table>';
	
	 
	 ?>
<p></p>
    <a href="consumilitantes.php">regresar</a>
    </center>
 </body>
 </html>