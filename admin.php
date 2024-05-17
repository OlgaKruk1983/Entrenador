<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estyle2.css">
    
</head>
<body class="body">
    

<form name="login" style="border:8px solid black; padding:20px; width:50%; margin: 0 auto; margin-inline:25%; text-align:center; position: absolute;
    top:130px;">
        <h3>Introduza su Nombre</h3>
        <input type="text" name="usuario" placeholder="introducir nombre" value=""><br><br>
        <h3>Introduza la contraseña</h3>
        <input type="password" name="password" placeholder="password" value=""><br><br>
        <button type="reset">Reset</button>
        <input value="Entrar" target="_parent" onclick="Login()" type="button" class="boton" />
    </form>
    
    
    
    <script language="JavaScript">
        function Login() {
            var done = 0;
            var usuario = document.login.usuario.value;
            var password = document.login.password.value;
			
			//soporte tecnico
            if (usuario == "gym" && password == "1234") {
                window.location = "registrar.php";
            }
			
			//profesor
            if (usuario == "recepcion" && password == "1234") {
                window.location = "registro.php";
            }
			
			//estudiante
            if (usuario == "" && password == "") {
                window.location = "clase1.html";
            }
			
			
			if (usuario == "" && password == "") {
                window.location = "";
            }
			
			
			
			
        }
    </script>
    </center>
    <script language="Javascript">

<!--    Begin
        document.oncontextmenu = function () { return false }
// End -->
    </script>




</body>
</html>