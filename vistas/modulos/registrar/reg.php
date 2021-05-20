<?php

if(isset($_POST['registrar']))
    {

        if(strlen 
        ($_POST['cedula']) >= 1 && strlen     
        ($_POST['nombre']) >= 1 )

        {
        $cedula=trim($_POST['cedula']);
        $nombre=trim($_POST['nombre']);
        $grupo=trim($_POST['grupo']);
        $cargo=trim($_POST['cargo']);

        $id_A="A".$cedula;
        $id_B="B".$cedula;

        }    

        $registrar_sql = "INSERT INTO personas(cedula,nombre,correo,password) VALUES ('$cedula','$nombre','$cedula','$cedula')";
        $resul=mysqli_query($con, $registrar_sql);

        $registrar_sql1 = "INSERT INTO evaluado(id_A,cedula,grupo,cargo) VALUES ('$id_A','$cedula','$grupo','$cargo')";
        $resul=mysqli_query($con, $registrar_sql1);

        $registrar_sql2 = "INSERT INTO evaluador(id_B,cedula) VALUES ('$id_B','$cedula')";
        $resul=mysqli_query($con, $registrar_sql2);
            
        if($resul)
        {
            ?><h1 class="titulo">El usuario ha sido registrado</h1><?php    
        }
        else
        {
                ?>
                <h1 class="titulo">usuario ya creado - Error del sistema</h1>
                <?php  
        }
        }
        else
        {
            ?>
            <h1 class="titulo">Completar datos</h1>
            <?php   
        }  


      
    
?>