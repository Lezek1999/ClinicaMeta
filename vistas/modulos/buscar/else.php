<?php
$mostrar="SELECT PE.cedula, nombre, grupo FROM personas PE, evaluado EV WHERE PE.cedula=EV.cedula AND grupo='$GRO' ORDER BY grupo";
$resultado=mysqli_query($con,$mostrar);
$numero=0;

?>

<br><br><br>

<table width="80%" class="tablita"> 

           

            <tr>
                <td><p class="center">Nombre:</p></td>
                <td><p class="center">Cedula:</p></td>
                <td><p class="center">Grupo:</p></td>

            </tr>

<?php


while($row=$resultado->fetch_array())
{
    
    $cedula = $row['cedula'];
    $nombre = $row['nombre']; 
    $gru = $row['grupo'];  ?>



            <tr>
                <td><p class="center"><?php echo $nombre; ?></p></td>
                <td ><p class="center"><?php echo $cedula; ?></p></td>
                <td ><p class="center"><?php echo $gru; ?></p></td>
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