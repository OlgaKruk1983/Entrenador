<?php include 'header.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estyle.css">
</head>
<body class="body">
    
<div style="margin-left:40px;">
<br><br>

<h1>Deja tu Comentario</h1><br><br>

    <h3><b>Tu Nombre</b></h3> <br>
    <form action="comentario2.php" method="post">
    <input type="text" name="nombre" placeholder="Introduce tu nombre" required> <br>

    <h3><b>Tu Correo Electrónico</b></h3> <br>
    <input type="text" name="correo" placeholder="Correo electrónico" required> <br>

    <h3><b>Tu Comentario</b></h3> <br>
    <textarea name="comentario" id="" placeholder="Escribe tu comentario"></textarea>
    </div>

    <button type="submit" style="background-color: grey; color: white; margin-left:40px;">ENVIAR TEXT</button>
    
    <button type="reset" style="margin-left:110px; background-color: grey; color: white;">BORRAR</button>

    </form>

    <?php include 'footer.php'?>
</body>
</html>