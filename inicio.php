<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	    
	<div id="formularioLogin">

	<h1 id="tituloInicio">Inicio</h1>

	 <form action="iniciarsesion.php" method="POST">

        <label id="textoName">Username:</label>
        <input type="name" name="name">

        <br/>

        <label id="textoPass">Password:</label>
        <input type="password" name="password">

        <br/>

        <input class="boton" type="submit" value="Login">

        <p>Si quieres registrarte pulsa <a href="registro.php">AQUÍ</a></p>

      </form> 
    </div> 

</body>
</html>