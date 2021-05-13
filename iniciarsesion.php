<?php

$servername = "localhost";
$username="root";
$password="";
$dbname="dbpablo";

$nombre = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
$contraseña = filter_var($_POST["password"]);


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
	die("Error al conectar: " . $conn->connect_error);
}

$sql = "SELECT *
		FROM usuarios
		WHERE nombre = '$nombre' and password='$contraseña'";

$sqlemail = $conn->query("SELECT email FROM usuarios WHERE nombre = '$nombre' and password='$contraseña'");
$rowemail = $sqlemail->fetch_assoc();

$sqltelf = $conn->query("SELECT telefono FROM usuarios WHERE nombre = '$nombre' and password='$contraseña'");
$rowtelf = $sqltelf->fetch_assoc();

$sqldireccion = $conn->query("SELECT direccion FROM usuarios WHERE nombre = '$nombre' and password='$contraseña'");
$rowdireccion = $sqldireccion->fetch_assoc();

$resultado = $conn->query($sql);
$email =$rowemail["email"];
$telefono = $rowtelf["telefono"];
$direccion = $rowdireccion["direccion"];


if(mysqli_num_rows($resultado) > 0)
{
	session_start();
	$_SESSION['nombre'] = $nombre;
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $contraseña;
	$_SESSION['direccion'] = $direccion;
	$_SESSION['telefono'] = $telefono;

	echo'<script type="text/javascript">
	alert("Se ha iniciado sesiónn correctamente!");
        window.location.href="perfil.php";
    </script>';
}
else {

	echo'<script type="text/javascript">
	alert("Usuario incorrecto!");
        window.location.href="inicio.php";
    </script>';
}

$conn->close();

?>