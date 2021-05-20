<?php

if(isset($_POST['calcular']))
    {

        if(strlen ($_POST['id_A']) >= 1)
        {
        $AE=trim($_POST['id_A']);
            

        $resu = "UPDATE resultados SET VA='$AE' WHERE ID='RES'";
        $resul=mysqli_query($con, $resu);

            if($resul)
            {
                ?>
                <a href="PDF/mpdfres.php" class="but">Generar PDF</a>
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