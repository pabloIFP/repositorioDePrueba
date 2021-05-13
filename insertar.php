<?php

$servername = "localhost";
$username="root";
$password="";
$dbname="dbpablo";

$nombre = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$contraseña = filter_var($_POST["password"]);

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
	die("Error al conectar: " . $conn->connect_error);
}

$sql = "INSERT INTO usuarios (nombre, email, password)
		VALUES ('$nombre', '$email', '$contraseña')";


if($conn->query($sql) == TRUE)
{
	session_start();
	$_SESSION['nombre'] = $nombre;
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $contraseña;
	$_SESSION['direccion'] = "";
	$_SESSION['telefono'] = "";

	echo'<script type="text/javascript">
	alert("Gracias por registrarte!");
        window.location.href="perfil.php";
    </script>';
}
else {

	echo "Error: " . $sql . "<br/>" . $conn->error;
}

$conn->close();

?>