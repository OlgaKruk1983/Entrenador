<?php include 'header.php'?>

<?php
$conexion = mysqli_connect("localhost","root","","Entrenador") or die("problemas con la conexión");

mysqli_query($conexion, "INSERT INTO datos(nombre, apellido, pais, curso, email, telefono)VALUES('$_REQUEST[nombre]', '$_REQUEST[apellido]', '$_REQUEST[pais]', '$_REQUEST[curso]', '$_REQUEST[email]', $_REQUEST[telefono])") or die("problema en la select: " .mysqli_error($conexion));

mysqli_close($conexion);
echo"<h1 style='font-size:40px; border:20px solid white; width:400px; margin-top:100px; margin-left:auto; margin-right:auto; text-align:center'>LOS DATOS SE ENVIARON CORRECTAMENTE AL SISTEMA</h1>";


?>

<?php include 'footer.php'?>



    