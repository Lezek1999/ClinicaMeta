<?php

$auto_sql=mysqli_query($con, "SELECT PE.cedula,nombre, grupo,cargo,celular,EV.correo,direccion FROM personas PE, evaluado EV WHERE PE.cedula=EV.cedula and PE.cedula = '$login_session'");
$row = mysqli_fetch_assoc($auto_sql);
$cedula = $row['cedula'];
$grupo = $row['grupo'];

$id_B='B'.$cedula;


$mostrar="SELECT id_A, PE.cedula, nombre, grupo FROM personas PE, evaluado EV WHERE PE.cedula=EV.cedula and grupo = '$grupo'";
$resultado=mysqli_query($con,$mostrar);


$VERIFICAR="SELECT id_A, id_B from form where id_B='$id_B'";
$resu=mysqli_query($con,$VERIFICAR);
$CO="";
$num=0;

?><h3 class="pop">ROL JEFE<br> <?php echo $grupo; ?><br>Selecciona la persona a evaluar:</h3><br><br> <?php


while($row=$resu->fetch_array())
{
    $num++;
    
    $CO = $row['id_A'];
    
}
while($row=$resultado->fetch_array())
{

    $id_A = $row['id_A'];
    $NAME = $row['nombre'];
    $CC = $row['cedula'];
    
?>

<p class="just"> 

<?php

      if($CO!=$id_A)
      {
      ?>
      <label><input type="radio" name="evaluado" value= <?php echo $id_A; ?> required> 
      <?php echo $CC; ?> | <?php echo $NAME; ?>
      </label><br>
  
      <?php
      }
      ?>

</p>
    <?php

}
?>

