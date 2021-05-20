<?php
if(isset($_POST['eliminar']))
    {

        if(strlen ($_POST['ID']) >= 1)
        {
            $cedula=trim($_POST['ID']);

            $eliminar="DELETE FROM personas WHERE cedula='$cedula'";
            $resultado=mysqli_query($con,$eliminar);

            $eliminar1="DELETE FROM evaluador WHERE cedula='$cedula'";
            $resultado=mysqli_query($con,$eliminar1);

            $eliminar2="DELETE FROM evaluado WHERE cedula='$cedula'";
            $resultado=mysqli_query($con,$eliminar2);

            if($resultado)
            {
            ?>
            <h1 class="titulo">Eliminacion correcta</h1>
            <?php  
            }
            else
            {
            ?>
            <h1 class="titulo">Error Al eliminar</h1>
            <?php  
            }
    
        }  

        
    
        }
        else
        {
            ?>
            <h1 class="titulo">Completar datos</h1>
            <?php   
        } 
        ?>