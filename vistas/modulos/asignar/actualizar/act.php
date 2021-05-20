<?php

if(isset($_POST['actualizar']))
    {

        if(strlen 
        ($_POST['cargo']) >= 1 && strlen     
        ($_POST['celular']) >= 1 && strlen 
        ($_POST['correo']) >= 1 && strlen 
        ($_POST['direccion']) >= 1 )

        {
        $cargo=trim($_POST['cargo']);
        $celular=trim($_POST['celular']);
        $correo=trim($_POST['correo']);
        $direccion=trim($_POST['direccion']);

        $actualizar_sql = "UPDATE evaluado SET cargo='$cargo', celular='$celular', correo='$correo', direccion='$direccion' where cedula='$cedula'";
        $resul=mysqli_query($con, $actualizar_sql);
            
        if($resul)
        {
            ?><h1 class="titulo">Los datos han sido actualizados</h1><?php    
        }
        else
        {
                ?>
                <h1 class="titulo">Error en actualizar los datos</h1>
                <?php  
        }

     }   
    }
?>
   