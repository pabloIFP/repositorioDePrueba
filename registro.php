<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>	
    <div id="formularioRegistro">

	<h1 id="tituloInicio">Registro</h1>

	 <form action="insertar.php" method="post">

        <label id="textoName">Username:</label>
        <input type="name" name="name">

        <br/>

        <label id="email">Your Email:</label>
        <input type="email" name="email">

        <br/>

        <label id="textoPass">Password:</label>
        <input type="password" name="password">

        <br/>

        <input class="boton" type="submit" value="Register">

        <p>Si ya dispones de una cuenta pulsa <a href="inicio.php">AQUÍ</a></p>

      </form> 
    </div> 

</body>
</html>