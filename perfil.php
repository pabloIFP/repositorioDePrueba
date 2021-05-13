<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfil</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

    <?php
    session_start();
    ?>

    <div id="formularioPerfil">

	<h1 id="tituloInicio">Perfil de Usuario</h1>

	 <form action="modificar.php" method="post">

        <label id="textoName">Username:</label>
        <input type="text" name="name" disabled="disabled" placeholder="<?php echo $_SESSION['nombre'];?>">

        <br/>

        <label id="email">Your Email:</label>
        <input type="email" name="email" value="<?php echo $_SESSION['email'];?>" placeholder="<?php echo $_SESSION['email'];?>">

        <br/>

        <label id="textoDireccion">Address:</label>
        <input type="text" name="direccion" value="<?php echo $_SESSION['direccion'];?>"  placeholder="<?php echo $_SESSION['direccion'];?>" name="direccion">

        <br/>

        <label id="textoTelefono">Telephone:</label>
        <input type="tel" name="telefono" value ="<?php echo $_SESSION['telefono'];?>" placeholder ="<?php echo $_SESSION['telefono'];?>" name="telefono" maxlength="9" pattern="[0-9]{9}">

        <br/>

        <label id="textoPass">Password:</label>
        <input type="password" name="password" value = "<?php echo $_SESSION['password'];?>" placeholder = "<?php echo $_SESSION['nombre'];?>">

        <br/>

        <input class="boton" type="submit" placeholder="Modificar">

        <p>Para salir de tu perfil pulsa <a href="inicio.php">AQUÍ</a></p>

      </form> 
    </div> 

</body>
</html>
