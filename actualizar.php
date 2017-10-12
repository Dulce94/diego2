<!DOCTYPE>
<html>
<head>
   <title> Actualizar contacto </title>
</head>
<body>

<center>
<?php


$conexion = mysqli_connect("192.168.1.72", "servidor", "practica", "agenda")
   or die ("Error en la conexion");
   
   
    $idcontacto = $_POST['idcontacto'];
   $nombrecontacto = $_POST['nombrecontacto'];
 
mysqli_query($conexion, "UPDATE contactos set nombre_contacto='$nombrecontacto' where id_contacto='$idcontacto'")
   or die ("Error al actualizar");
   
   

   
   mysqli_close($conexion);
  
   
   
   ?>
   
             <h1>Contactoa actualizado</h1>
    <a href="actualizarc.php">regresar</a>
        <br>
    <a href="index.php">Inicio</a>
    </center>


</body>
</html>