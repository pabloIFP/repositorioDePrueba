<?php

$servername = "localhost";
$username="root";
$password="";
$dbname="dbpablo";

session_start();
$nombre = $_SESSION['nombre'];
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$contraseña = filter_var($_POST["password"]);
$telefono = filter_var($_POST["telefono"]);
$direccion = filter_var($_POST["direccion"]);

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
	die("Error al conectar: " . $conn->connect_error);
}

$sql = "UPDATE usuarios 
		set email='$email', direccion='$direccion', telefono='$telefono', password='$contraseña'
		WHERE nombre = '$nombre'";


if($conn->query($sql) == TRUE)
{
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $contraseña;
	$_SESSION['direccion'] = $direccion;
	$_SESSION['telefono'] = $telefono;

	echo'<script type="text/javascript">
	alert("Tu usuario se ha modificado correctamente!");
        window.location.href="perfil.php";
    </script>';
}
else {

	echo "Error: " . $sql . "<br/>" . $conn->error;
}

$conn->close();

?>