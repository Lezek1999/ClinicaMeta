<?php

$auto_sql=mysqli_query($con, "SELECT PE.cedula,nombre, grupo,cargo,celular,EV.correo,direccion FROM personas PE, evaluado EV WHERE PE.cedula=EV.cedula and PE.cedula = '$login_session'");
$row = mysqli_fetch_assoc($auto_sql);
$grupo = $row['grupo'];

// Informacion Evaluador x3 id_A and id_B
$EVA1_sql=mysqli_query($con, "SELECT cedula, nombre FROM personas WHERE cedula = '$login_session'");
$row = mysqli_fetch_assoc($EVA1_sql);
$nombre = $row['nombre'];
$cedula = $row['cedula'];

$id_B='B'.$cedula;

?>
<form method="POST">

<h1 class="titulo"> Exportar Comprobante.</h1>
    <br><br>    

         <table style="width:80%" class="tablita">	
            <tr>
				<td><p class="center"> Evaluador: </p> </td>
                <td><p class="center"><?php echo $nombre; ?></p></td>
				<td><p class="center"><?php echo $cedula; ?></p></td>
            </tr>
		</table>
		<br><br><br>

<h3 class="pop">Selecciona el evaluado para el documento a exportar:</h3>

<br><br>

<?php

$mostrar="SELECT FO.id_A, EV.id_A, PE.cedula, nombre, grupo FROM form FO, personas PE, evaluado EV WHERE PE.cedula=EV.cedula and grupo = '$grupo' and FO.id_B='$id_B' AND FO.id_A=EV.id_A ";
$resultado=mysqli_query($con,$mostrar);
$numero=0;




while($row=$resultado->fetch_array())
{
    $id_A = $row['id_A'];
    $NAME = $row['nombre'];
    $CC = $row['cedula'];


    ?>

<p class="just">

    

    <label><input type="radio" name="evaluado" value= <?php echo $id_A; ?>> 
    <?php echo $CC; ?> | <?php echo $NAME; ?>
    </label><br>

    

</p>

    <?php
    
}
?>

<br><br>
<input type="submit" name="exportar" class="center">

</form>

