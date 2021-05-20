<?php
session_start(); // Iniciando sesion
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['submit'])) 
{
if (empty($_POST['cedula']) || empty($_POST['password'])) {
$error = "El correo electrónico o la contraseña es inválida.";
}
else
{
// Define $username y $password
$cedula=$_POST['cedula'];
$password=$_POST['password'];
// Estableciendo la conexion a la base de datos
include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("config/conexion.php");//Contiene de conexion a la base de datos


$sql = "SELECT cedula, password FROM personas WHERE cedula = '" . $cedula . "' and password='".$password."';";
$query=mysqli_query($con,$sql);
$counter=mysqli_num_rows($query);
if ($counter==1)
{
		$_SESSION['login_user_sys']=$cedula; // Iniciando la sesion
		header("location: profile.php"); // Redireccionando a la pagina profile.php
	
	
} else {
$error = "El correo electrónico o la contraseña es inválida.";	
}
}
}	
?>