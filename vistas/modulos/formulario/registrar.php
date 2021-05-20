<?php

if(isset($_POST['register']))
    {

        if(strlen 
        ($_POST['evaluado']) >= 1 && strlen     
        ($_POST['p1']) >= 1 && strlen 
        ($_POST['p2']) >= 1 && strlen 
        ($_POST['p3']) >= 1 && strlen 
        ($_POST['p4']) >= 1 && strlen 
        ($_POST['p5']) >= 1 && strlen 
        ($_POST['p6']) >= 1 && strlen 
        ($_POST['p7']) >= 1 && strlen 
        ($_POST['p8']) >= 1 && strlen 
        ($_POST['p9']) >= 1 && strlen 
        ($_POST['p10']) >= 1 && strlen 
        ($_POST['p11']) >= 1 && strlen 
        ($_POST['p12']) >= 1 && strlen 
        ($_POST['p13']) >= 1 && strlen 
        ($_POST['p14']) >= 1 && strlen 
        ($_POST['p15']) >= 1 && strlen 
        ($_POST['p16']) >= 1 && strlen 
        ($_POST['p17']) >= 1 && strlen 
        ($_POST['p18']) >= 1 && strlen 
        ($_POST['p19']) >= 1 && strlen 
        ($_POST['p20']) >= 1 && strlen 
        ($_POST['p21']) >= 1 && strlen 
        ($_POST['p22']) >= 1)
        {
        $id_A=trim($_POST['evaluado']);
        $id_B=$id_B;
        $p1=trim($_POST['p1']);
        $p2=trim($_POST['p2']);
        $p3=trim($_POST['p3']);
        $p4=trim($_POST['p4']);
        $p5=trim($_POST['p5']);
        $p6=trim($_POST['p6']);
        $p7=trim($_POST['p7']);
        $p8=trim($_POST['p8']);
        $p9=trim($_POST['p9']);
        $p10=trim($_POST['p10']);
        $p11=trim($_POST['p11']);
        $p12=trim($_POST['p12']);
        $p13=trim($_POST['p13']);
        $p14=trim($_POST['p14']);
        $p15=trim($_POST['p15']);
        $p16=trim($_POST['p16']);
        $p17=trim($_POST['p17']);
        $p18=trim($_POST['p18']);
        $p19=trim($_POST['p19']);
        $p20=trim($_POST['p20']);
        $p21=trim($_POST['p21']);
        $p22=trim($_POST['p22']);

        $p23="";
        $p24="";
        $p25="";
        $p26="";
        $p27="";
        $p28="";
        $p29="";
        $p30="";
        $p31="";
        $p32="";




        if($PP1 != "")
        {
            $p23=trim($_POST['PP1']);
        }
        if($PP2 != "")
        {
            $p24=trim($_POST['PP2']);
        }
        if($PP3 != "")
        {
            $p25=trim($_POST['PP3']);
        }
        if($PP4 != "")
        {
            $p26=trim($_POST['PP4']);
        }
        if($PP5 != "")
        {
            $p27=trim($_POST['PP5']);
        }
        if($PP6 != "")
        {
            $p28=trim($_POST['PP6']);
        }
        if($PP7 != "")
        {
            $p29=trim($_POST['PP7']);
        }
        if($PP8 != "")
        {
            $p30=trim($_POST['PP8']);
        }
        if($PP9 != "")
        {
            $p31=trim($_POST['PP9']);
        }
        if($PP10 != "")
        {
            $p32=trim($_POST['PP10']);
        }
        
        $comentarios=trim($_POST['comentarios']);

        $cons="INSERT INTO form(id_A,id_B,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,
        p17,p18,p19,p20,p21,p22,p23,p24,p25,p26,p27,p28,p29,p30,p31,p32,comentarios) 
        values ('$id_A','$id_B','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11','$p12','$p13','$p14','$p15','$p16',
        '$p17','$p18','$p19','$p20','$p21','$p22','$p23','$p24','$p25','$p26','$p27','$p28','$p29','$p30','$p31','$p32','$comentarios')";
        $resp=mysqli_query($con,$cons);

        if($resp)
            {
                ?>
                <h1 class="titulo">El dato ha sido registrado</h1>
                <?php             
            }
            else
            {
                ?>
                <h1 class="titulo">Error en el sistema</h1>
                <?php   
            }

        }
        
    
                    else
                    {
                    ?>
                    <h1 class="titulo">Completar datos</h1>
                    <?php   
                    }  
        
                      
    }                
?>         