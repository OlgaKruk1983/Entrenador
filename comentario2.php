<?php include 'header.php'?>
<link rel="stylesheet" href="css/estyle.css">

<?php
$conexion = mysqli_connect("localhost","root","","Entrenador") or die("problemas con la conexión");

mysqli_query($conexion, "INSERT INTO comentario(nombre, correo, comentario)VALUES('$_REQUEST[nombre]', '$_REQUEST[correo]', '$_REQUEST[comentario]')") or die("problema en la select: " .mysqli_error($conexion));

mysqli_close($conexion);
echo"<h1 style='font-size:40px; border:20px solid white; width:400px; margin-top:100px; margin-left:auto; margin-right:auto; text-align:center'>SU COMENTARIO FUE ENVIADO CORRECTAMENTE</h1>";



?>


<br><br><br><br><br><br><br><br>
<?php include 'footer.php'?>