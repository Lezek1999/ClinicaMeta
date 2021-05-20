<?php

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

$consulta = "SELECT cedula, nombre FROM personas WHERE cedula = $login_session";
$resultado= mysqli_query($con,$consulta);

if($resultado)
{
    while($row = $resultado->fetch_array())
    {
        $nombre = $row['nombre'];
        $cedula = $row['cedula'];
        //$grupo = $row['grupo'];
    }

    ?>

		<table style="width:80%" class="tablita">	
            <tr>
				<td><p class="center"> Evaluador: </p> </td>
                <td><p class="center"><?php echo $nombre; ?></p></td>
				<td><p class="center"><?php echo $cedula; ?></p></td>
            </tr>
		</table>
		<br><br><br>
			
<?php	        
} 
?>



