<?php
if(isset($_POST['buscar']))
    {

        if(strlen ($_POST['ID']) >= 1)
        {
            $cedula=trim($_POST['ID']);

            $buscar=mysqli_query($con, "SELECT PE.cedula, nombre, grupo FROM personas PE, evaluado EV WHERE PE.cedula=EV.cedula and PE.cedula='$cedula'");
            $row = mysqli_fetch_assoc($buscar);
	        $cc = $row['cedula'];
            $nom = $row['nombre'];
            $group = $row['grupo'];

              ?>  <table width="80%" class="tablita"> 

            <tr>
                <td><p class="center">Cedula:</p></td>
                <td><p class="center">Nombre:</p></td>
                <td><p class="center">Grupo:</p></td>

            </tr>
            
            <tr>
                <td ><p class="center"><?php echo $cc; ?></p></td>
                <td><p class="center"><?php echo $nom; ?></p></td>
                <td ><p class="center"><?php echo $group; ?></p></td>
            </tr>

                </table>
            <?php  
        }  
        else if(strlen ($_POST['GR']) >= 1 )
        {
        $GRO=trim($_POST['GR']);

            include "else.php";

        }
        else
        {
            ?>
            <h1 class="titulo">datos No encontrados</h1>
            <?php     
        }

        
    
        }
        else
        {
            ?>
            <h1 class="titulo">Completar datos</h1>
            <?php   
        }  


