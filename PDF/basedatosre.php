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

//IDENTIFICAR A 
$identificar=mysqli_query($con, "SELECT VA FROM resultados WHERE ID='RES'");
$row = mysqli_fetch_assoc($identificar);
$VA = $row['VA']; 


//INFORMACION A 
$informacionA=mysqli_query($con, "SELECT PE.cedula,nombre, grupo,cargo,celular,EV.correo,direccion FROM personas PE, evaluado EV WHERE PE.cedula=EV.cedula and id_A = '$VA'");
$row = mysqli_fetch_assoc($informacionA);
$cedula = $row['cedula'];
$nombre = $row['nombre'];
$grupo = $row['grupo'];
$cargo = $row['cargo'];


// RESPUESTAS PREGUNTAS
$cal=
        
                  "SELECT 
                  id_form, id_A, id_B, 
                  p1, p2, p3, p4, p5, 
                  p6, p7, p8, p9, p10,
                  p11, p12, p13, p14, p15, 
                  p16, p17, p18, p19, p20, 
                  p21, p22, p23, p24, p25,
                  p26, p27, p29, p29, p30,
                  p31, p32, comentarios
                  FROM form
                  WHERE id_A='$VA'";

        $resu=mysqli_query($con,$cal);

        $num=0;
        $Rp1=0;
        $Rp2=0;
        $Rp3=0;
        $Rp4=0;
        $Rp5=0;
        $Rp6=0;
        $Rp7=0;
        $Rp8=0;
        $Rp9=0;
        $Rp10=0;
        $Rp11=0;
        $Rp12=0;
        $Rp13=0;
        $Rp14=0;
        $Rp15=0;
        $Rp16=0;
        $Rp17=0;
        $Rp18=0;
        $Rp19=0;
        $Rp20=0;
        $Rp21=0;
        $Rp22=0;
        $Rp23=0;
        $Rp24=0;
        $Rp25=0;
        $Rp26=0;
        $Rp27=0;
        $Rp28=0;
        $Rp29=0;
        $Rp30=0;
        $Rp31=0;
        $Rp32=0;


        while($row=$resu->fetch_array())
        {
            $num++;

            $Rp1 += $row['p1'];
            $Rp2 += $row['p2'];
            $Rp3 += $row['p3'];
            $Rp4 += $row['p4'];
            $Rp5 += $row['p5'];
            $Rp6 += $row['p6'];
            $Rp7 += $row['p7'];
            $Rp8 += $row['p8'];
            $Rp9 += $row['p9'];
            $Rp10 += $row['p10'];
            $Rp11 += $row['p11'];
            $Rp12 += $row['p12'];
            $Rp13 += $row['p13'];
            $Rp14 += $row['p14'];
            $Rp15 += $row['p15'];
            $Rp16 += $row['p16'];
            $Rp17 += $row['p17'];
            $Rp18 += $row['p18'];
            $Rp19 += $row['p19'];
            $Rp20 += $row['p20'];
            $Rp21 += $row['p21'];
            $Rp22 += $row['p22'];
            $Rp23 += $row['p13'];
            $Rp24 += $row['p14'];
            $Rp25 += $row['p15'];
            $Rp26 += $row['p16'];
            $Rp27 += $row['p17'];
            $Rp28 += $row['p18'];
            $Rp29 += $row['p19'];
            $Rp30 += $row['p20'];
            $Rp31 += $row['p21'];
            $Rp32 += $row['p22'];
            $comen = $row['comentarios'];
        }

        

?>