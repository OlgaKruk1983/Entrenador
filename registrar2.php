<?php include 'header.php'?>
<link rel="stylesheet" href="css/estyle.css">

<?php
$conexion = mysqli_connect("localhost","root","","Entrenador") or die("problemas con la conexión");

mysqli_query($conexion, "INSERT INTO admin(codigo, nombre, correo, fecha_alta, fecha_baja)VALUES($_REQUEST[codigo], '$_REQUEST[nombre]', '$_REQUEST[correo]', $_REQUEST[fecha_alta], $_REQUEST[fecha_baja])") or die("problema en la select: " .mysqli_error($conexion));

mysqli_close($conexion);
echo"<h1 style='font-size:40px; border:20px solid white; width:400px; margin-top:100px; margin-left:auto; margin-right:auto; text-align:center'>CLIENTE REGISTRADO</h1>";


?>

<br><br>
<a href="registrar.php"><button type="button" value="registrar" style="margin-left:420px; background-color: grey;">Registrar otro cliente</button></a>
<br><br><br><br><br><br><br><br>
<?php include 'footer.php'?>