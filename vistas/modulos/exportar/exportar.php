<?php

if(isset($_POST['exportar']))
    {

        if(strlen ($_POST['evaluado']) >= 1 )
        {
        
            $AE=trim($_POST['evaluado']);
            $BE=$id_B;
            
            $expor = "UPDATE exportar SET VA='$AE', VB='$BE' WHERE ID='EXP'";
            $resul=mysqli_query($con, $expor);
                
            if($resul)
            {
                ?>
                <a href="PDF/mpdf.php" class="but">Generar PDF</a>
                <?php
            }
            else
            {
                ?>
                <h1 class="titulo">Error en colsulta para exportar</h1>
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