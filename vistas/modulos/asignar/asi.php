<?php

if(isset($_POST['asignar']))
    {

        if(strlen 
        ($_POST['id_B']) >= 1 && strlen     
        ($_POST['E1']) >= 1 )

        {
        $id_B=trim($_POST['id_B']);
        $E1=trim($_POST['E1']);
        $E2=trim($_POST['E2']);
        $E3=trim($_POST['E3']);
        $jefe=trim($_POST['jefe']);
        
        }    

        $asignar_sql = "INSERT INTO e_e(id_B,E1,E2,E3,jefe) VALUES ('$id_B','$E1','$E2','$E3','$jefe')";
        $resul=mysqli_query($con, $asignar_sql);

        
        if($resul)
        {
            ?><h1 class="titulo">Asignacion registrada</h1><?php    
        }
        else
        {
                ?>
                <h1 class="titulo">Error</h1>
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