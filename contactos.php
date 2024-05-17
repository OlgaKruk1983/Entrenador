
<?php include 'header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estyle2.css">
</head>
<body style="height: 50%;">
<h1 style="text-align: center; color:blue;">Envíe sus datos</h1>

<div
    class="container-fluid"
>

<form action="contactos2.php" method="post" style="border: none; margin-left: 340px;">
<br>
Nombre:    
<input type="text" name="nombre"><br><br>
Apellido:
<input type="text" name="apellido" ><br><br>
Pais:
<input type="text" name="pais" style="margin-left: 34px;"><br><br>
Curso deseado:
<input type="text" name="curso" style="width:143px;"><br><br>
Email:
<input type="text" name="email" style="margin-left: 26px;"><br><br>
Teléfono:
<input type="text" name="telefono" style="margin-left: 6px;">
<br><br>
<button type="submit">Enviar datos</button>
<button type="reset" style="margin-left: 100px;">Borrar</button>
<br><br>






</form>
    
</div>
<br><br>

<?php include 'footer.php'?>
</body>
</html>