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
    // agregar A al usuario que ingreso 
    $SJEFE= 'A'.$login_session;
    
    $EVA_sql=mysqli_query($con, "select E1, E2, E3, jefe, EV.id_B FROM evaluador EV, e_e EE where EV.id_B=EE.id_B and EV.cedula = '$login_session'");
    $row = mysqli_fetch_assoc($EVA_sql);
    $JEFE = $row['jefe']; // Variable Jefe
    $id_B = $row['id_B']; // Variable Evaluador
    
    
    if($SJEFE==$JEFE) //comparacion si es el Jefe
    {
      include "jefe.php";
    }
    else
    {
    $EVA_sql=mysqli_query($con, "select E1, E2, E3, jefe, EV.id_B FROM evaluador EV, e_e EE where EV.id_B=EE.id_B and EV.cedula = '$login_session'");
    $row = mysqli_fetch_assoc($EVA_sql);
    $E1 = $row['E1']; 
		$E2 = $row['E2']; 
		$E3 = $row['E3']; 
    $JE = $row['jefe']; 
    $id_B = $row['id_B'];
  
    $E1_sql=mysqli_query($con, "select PE.cedula, nombre from personas PE, evaluado EV where EV.cedula=PE.cedula and id_A='$E1'");
    $row = mysqli_fetch_assoc($E1_sql);
    $CC1 =$row['cedula'];
    $NAME1 =$row['nombre'];

    $E2_sql=mysqli_query($con, "select PE.cedula, nombre from personas PE, evaluado EV where EV.cedula=PE.cedula and id_A='$E2'");
    $row = mysqli_fetch_assoc($E2_sql);
    $CC2 =$row['cedula'];
    $NAME2 =$row['nombre'];

    $E3_sql=mysqli_query($con, "select PE.cedula, nombre from personas PE, evaluado EV where EV.cedula=PE.cedula and id_A='$E3'");
    $row = mysqli_fetch_assoc($E3_sql);
    $CC3 =$row['cedula'];
    $NAME3 =$row['nombre'];

    $JE_sql=mysqli_query($con, "select PE.cedula, nombre from personas PE, evaluado EV where EV.cedula=PE.cedula and id_A='$JE'");
    $row = mysqli_fetch_assoc($JE_sql);
    $CC4 =$row['cedula'];
    $NAME4 =$row['nombre'];


    $VERIFICAR="SELECT id_A, id_B from form where id_B='$id_B'";
    $resu=mysqli_query($con,$VERIFICAR);
    $CO1="";
    $CO2="";
    $CO3="";
    $CO4="";
    $num=0;

    while($row=$resu->fetch_array())
    {

      $num++;
      
      if($num==1)
      {
        $CO1=$row['id_A'];
      }
      else if($num==2)
      {
        $CO2=$row['id_A'];
      }
      else if($num==3)
      {
        $CO3=$row['id_A'];
      }
      else if($num==4)
      {
        $CO4=$row['id_A'];
      }
    }

    
    ?>
    <h3 class="pop">Selecciona la persona a evaluar:</h3>

    <p class="just"> <br>
  
      <?php
      if(($CO1=="") && ($CO1!=$E1) && ($CO1!=$E2) && ($CO1!=$E3) && ($CO1!=$JE))
      {
      ?>
      <label><input type="radio" name="evaluado" value= <?php echo $E1; ?> required> 
      <?php echo $CC1; ?> | <?php echo $NAME1; ?>
      </label><br>
  
      <?php
      }
      else if(($CO2=="") && ($CO2!=$E1) && ($CO2!=$E2) && ($CO2!=$E3) && ($CO2!=$JE))
      {
      ?>


      <label><input type="radio" name="evaluado" value= <?php echo $E2; ?>> 
      <?php echo $CC2; ?> | <?php echo $NAME2; ?>
      </label><br>

      <?php
      }
      else if(($CO3=="") && ($CO3!=$E1) && ($CO3!=$E2) && ($CO3!=$E3) && ($CO3!=$JE))
      {
      ?>

  
      <label><input type="radio" name="evaluado" value= <?php echo $E3; ?> >
      <?php echo $CC3; ?> | <?php echo $NAME3; ?>
      </label><br>

      <?php
      }
      else if(($CO4=="") && ($CO4!=$E1) && ($CO4!=$E2) && ($CO4!=$E3) && ($CO4!=$JE))
      {
      ?>


      <label><input type="radio" name="evaluado" value= <?php echo $E3; ?> >
      <?php echo $CC4; ?> | <?php echo $NAME4; ?>
      </label>
  
      <?php
      }
      ?>

      </p>


<?php
}
?>