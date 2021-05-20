<?php
include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("config/conexion.php");//Contiene de conexion a la base de datos


include "style.php";

echo '<a href="profile.php?action=administrar"  class="but">Volver</a>';

$mostrar="SELECT PE.cedula, nombre, grupo, cargo FROM personas PE, evaluado EV WHERE PE.cedula=EV.cedula ORDER BY grupo";
$resultado=mysqli_query($con,$mostrar);
$numero=0;

?>

<br><br><br>

<table width="80%" class="tablita"> 

           

            <tr>
                <td><p class="center">Nombre:</p></td>
                <td><p class="center">Cedula:</p></td>
                <td><p class="center">Grupo:</p></td>
                <td><p class="center">Cargo:</p></td>

            </tr>

<?php


while($row=$resultado->fetch_array())
{
    
    $cedula = $row['cedula'];
    $nombre = $row['nombre']; 
    $gru = $row['grupo'];  
    $cargo = $row['cargo']; ?>



            <tr>
                <td><p class="center"><?php echo $nombre; ?></p></td>
                <td ><p class="center"><?php echo $cedula; ?></p></td>
                <td ><p class="center"><?php echo $gru; ?></p></td>
                <td ><p class="center"><?php echo $cargo; ?></p></td>
            </tr>


    <?php

    $numero++;
}

?>
            <tr>
                <td colspan="15"><p class="center">Registros Totales: <?php echo $numero; ?></p>
            </tr>
</table>
<?php





?>
