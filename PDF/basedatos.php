<?php

/*Datos de conexion a la base de datos*/
define('DB_HOST', 'localhost');//DB_HOST:  generalmente suele ser "127.0.0.1"
define('DB_USER', 'root');//Usuario de tu base de datos
define('DB_PASS', '');//Contraseña del usuario de la base de datos
define('DB_NAME', 'clinicameta');//Nombre de la base de datos

$con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$con){
    die("imposible conectarse: ".mysqli_error($con));
}
if (@mysqli_connect_errno()) {
    die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}

session_start();

$user_check=$_SESSION['login_user_sys']; // Sesion iniciada
// SQL Query para completar la informacion del usuario

$ses_sql=mysqli_query($con, "select cedula from personas where cedula='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['cedula'];

if(!isset($login_session))
{
mysqli_close($con); // Cerrando la conexion
header('Location: index.php'); // Redirecciona a la pagina de inicio
}

$B='A'.$login_session;

//IDENTIFICAR A y B
$identificar=mysqli_query($con, "SELECT VA, VB FROM exportar WHERE ID='EXP'");
$row = mysqli_fetch_assoc($identificar);
$VA = $row['VA']; 
$VB = $row['VB']; 


//INFORMACION A 
$informacionA=mysqli_query($con, "SELECT PE.cedula,nombre, grupo,cargo,celular,EV.correo,direccion FROM personas PE, evaluado EV WHERE PE.cedula=EV.cedula and id_A = '$VA'");
$row = mysqli_fetch_assoc($informacionA);
$Acedula = $row['cedula'];
$Anombre = $row['nombre'];
$Agrupo = $row['grupo'];
$Acargo = $row['cargo'];

//INFORMACION B
$informacionB=mysqli_query($con, "SELECT PE.cedula,nombre, grupo,cargo,celular,EV.correo,direccion FROM personas PE, evaluado EV WHERE PE.cedula=EV.cedula and id_A = '$B'");
$row = mysqli_fetch_assoc($informacionB);
$Bcedula = $row['cedula'];
$Bnombre = $row['nombre'];
$Bcargo = $row['cargo'];

// RESPUESTAS PREGUNTAS
$comparar_sql = "SELECT id_A,id_B,fecha,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,p18,p19,p20,p21,p22,p23,p24,p25,p26,p27,p28,p29,p30,p31,p32,comentarios FROM form WHERE id_A = '$VA' and id_B = '$VB'";
$comp = mysqli_query($con,$comparar_sql);

if($comp)
{
while($row = $comp->fetch_array())
{
$EVA = $row['id_A'];
$EVAL = $row['id_B'];
$F = $row['fecha'];
$p1 = $row['p1'];
$p2 = $row['p2'];
$p3 = $row['p3'];
$p4 = $row['p4'];
$p5 = $row['p5'];
$p6 = $row['p6'];
$p7 = $row['p7'];
$p8 = $row['p8'];
$p9 = $row['p9'];
$p10 = $row['p10'];
$p11 = $row['p11'];
$p12 = $row['p12'];
$p13 = $row['p13'];
$p14 = $row['p14'];
$p15 = $row['p14'];
$p16 = $row['p15'];
$p17 = $row['p16'];
$p18 = $row['p17'];
$p19 = $row['p18'];
$p20 = $row['p19'];
$p21 = $row['p21'];
$p22 = $row['p22'];
$p23 = $row['p23'];
$p24 = $row['p24'];
$p25 = $row['p25'];
$p26 = $row['p26'];
$p27 = $row['p27'];
$p28 = $row['p28'];
$p29 = $row['p29'];
$p30 = $row['p30'];
$p31 = $row['p31'];
$p32 = $row['p32'];
$comen = $row['comentarios'];
}
}

?>