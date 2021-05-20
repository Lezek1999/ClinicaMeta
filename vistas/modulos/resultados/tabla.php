<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 15">
<link rel=File-List href="Exportar%20Resultados_archivos/filelist.xml">
<?php include "ala.php";?>
</head>

<body>

<?php include "calculos.php";?>


<div id="Exportar Resultados_27339" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=971 style='border-collapse:
 collapse;table-layout:fixed;width:728pt'>
 <col width=167 style='mso-width-source:userset;mso-width-alt:6107;width:125pt'>
 <col width=212 style='mso-width-source:userset;mso-width-alt:7753;width:159pt'>
 <col width=146 style='mso-width-source:userset;mso-width-alt:5339;width:110pt'>
 <col width=132 style='mso-width-source:userset;mso-width-alt:4827;width:99pt'>
 <col width=147 style='mso-width-source:userset;mso-width-alt:5376;width:110pt'>
 <col width=167 style='mso-width-source:userset;mso-width-alt:6107;width:125pt'>
 <tr height=66 style='mso-height-source:userset;height:49.5pt'>
  <td colspan=6 height=66 class=xl13727339 width=971 style='border-right:1.0pt solid black;
  height:49.5pt;width:728pt'><a name="RANGE!A1:F48"><h1 class="tilt">RESULTADO DE DESEMPEÑO</h1></a></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl7227339 width=167 style='height:15.0pt;border-top:none;
  width:125pt'>EVALUADO</td>
  <td colspan=5 class=xl14227339 width=804 style='border-right:1.0pt solid black;
  width:603pt'>
  
    <?php
    echo $cc;
    ?>
    
    </td>


 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl7327339 width=167 style='height:15.0pt;border-top:none;
  width:125pt'>NOMBRE</td>
  <td colspan=5 class=xl14527339 width=804 style='border-right:1.0pt solid black;
  width:603pt'>
  
  
  
    <?php
    echo $nom;
    ?>
    



</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl7327339 width=167 style='height:15.0pt;border-top:none;
  width:125pt'>DEPARTAMENTO</td>
  <td colspan=5 class=xl14827339 width=804 style='border-right:1.0pt solid black;
  width:603pt'>
  
  <?php
    echo $group;
    ?>
    

</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=2 rowspan=2 height=41 class=xl12927339 style='border-right:1.0pt solid black;
  border-bottom:1.0pt solid black;height:30.75pt'>PILARES</td>
  <td rowspan=2 class=xl13327339 width=146 style='border-bottom:1.0pt solid black;
  border-top:none;width:110pt'>CALIFICACIÓN</td>
  <td rowspan=2 class=xl13327339 width=132 style='border-bottom:1.0pt solid black;
  border-top:none;width:99pt'>PROMEDIO</td>
  <td rowspan=2 class=xl13327339 width=147 style='border-bottom:1.0pt solid black;
  border-top:none;width:110pt'>PORCENTAJE</td>
  <td rowspan=2 class=xl13527339 width=167 style='border-bottom:1.0pt solid black;
  border-top:none;width:125pt'>PONDERACIÓN</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
 </tr>


<!-- Responsabilidad -->
<tr height=21 style='height:15.75pt'>
<td colspan=6 height=21 class=xl11127339 style='border-right:1.0pt solid black;
height:15.75pt'>RESPONSABILIDAD</td></tr>
<tr height=46 style='mso-height-source:userset;height:35.1pt'>
<td colspan=2 height=46 class=xl8127339 width=379 style='border-right:1.0pt solid black;
height:35.1pt;width:284pt'>Realiza las funciones y deberes propios del cargo
sin que requiera supervisión y control permanente</td><td class=xl6327339 style='border-left:none'>
  

    <!-- Pregunta 1 -->
    <?php echo $Promedio1;?></td></td>

<td rowspan=2 class=xl10127339 style='border-bottom:1.0pt solid black; border-top:none'>
  

    <!-- Promedio 1-2 -->
    <?php echo $Pro1;?>


</td><td rowspan=2 class=xl9527339 style='border-bottom:1.0pt solid black; border-top:none'>
  

    <!-- Porcentaje 1-2 -->
    <?php echo (($Pro1/5)*100)."%";?>
  

</td><td rowspan=2 class=xl9727339 style='border-bottom:1.0pt solid black;border-top:none'>
  
    <!-- Ponderacion 1-2 -->
    <?php
    echo $PO1=($Pro1*10)/100
    ?></td>


 </tr>
 <tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl8427339 width=379 style='border-right:1.0pt solid black;
  height:35.1pt;width:284pt'>Actitud para completar las tareas y deberes
  asignados de acuerdo a las metas y plazos acordados</td>


  <td class=xl6427339 style='border-top:none;border-left:none'>
  
    <!-- Pregunta 2 -->
    <?php
    echo $Promedio2;
    ?></td></tr>




<!-- Presentacion e higiene -->
 <tr height=21 style='height:15.75pt'>
  <td colspan=6 height=21 class=xl11127339 style='border-right:1.0pt solid black;
  height:15.75pt'>PRESENTACIÓN E HIGIENE</td>
 </tr>
 <tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl11427339 width=379 style='border-right:1.0pt solid black;
  height:35.1pt;width:284pt'>Mantiene en orden e higiene el lugar de trabajo</td>
  <td class=xl6427339 style='border-left:none'>
  
  
    <!-- Pregunta 3 -->
     <?php
    echo $Promedio3;
    ?></td>



<td rowspan=2 class=xl10127339 style='border-bottom:1.0pt solid black; border-top:none'>
  

    <!-- Promedio 3-4 -->
     <?php echo $Pro2;?>


</td><td rowspan=2 class=xl9527339 style='border-bottom:1.0pt solid black; border-top:none'>
  

    <!-- Porcentaje 3-4 -->
    <?php echo (($Pro2/5)*100)."%";?>


</td><td rowspan=2 class=xl10327339 style='border-bottom:1.0pt solid black; border-top:none'>
  
  
    <!-- Ponderacion 3-4 -->
    <?php echo $PO2=($Pro2*7)/100 ?>


</td></tr><tr height=46 style='mso-height-source:userset;height:35.1pt'>
<td colspan=2 height=46 class=xl11627339 width=379 style='border-right:1.0pt solid black;
height:35.1pt;width:284pt'>La presentación personal es acorde al reglamento interno establecido</td>
<td class=xl6427339 style='border-top:none;border-left:none'>


    <!-- Pregunta 4 -->
    <?php echo $Promedio4; ?>



    
<!-- Productividad -->

</td></tr><tr height=21 style='height:15.75pt'>
  <td colspan=6 height=21 class=xl11127339 style='border-right:1.0pt solid black;
  height:15.75pt'>PRODUCTIVIDAD<span style='mso-spacerun:yes'></span></td>
 </tr>
 <tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl11827339 width=379 style='border-right:1.0pt solid black;
  height:35.1pt;width:284pt'>Realiza múltiples tareas cumpliendo con el tiempo
  establecido</td>
  <td class=xl6527339 style='border-left:none'>


  
    <!-- Pregunta 5 -->
     <?php
    echo $Promedio5;
    ?></td>

</td><td rowspan=2 class=xl10127339 style='border-bottom:1.0pt solid black;
  border-top:none'>
  
  
  
  
  <!-- Promedio 5-6 -->
  <?php echo $Pro3;?>
  
  
  
  
  </td><td rowspan=2 class=xl9527339 style='border-bottom:1.0pt solid black;
  border-top:none'>
  
  
  
  
   <!-- Porcentaje 5-6 -->
   <?php echo (($Pro3/5)*100)."%";?>





</td><td rowspan=2 class=xl9727339 style='border-bottom:1.0pt solid black;
  border-top:none'>
  
  
  
  
  <!-- Ponderacion 5-6 -->
  <?php echo $PO3=($Pro3*9)/100 ?>




</td></tr><tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl11627339 width=379 style='border-right:1.0pt solid black;
  height:35.1pt;width:284pt'>Minimiza desperdicios en los procedimientos
  referentes al cargo</td>
  <td class=xl6527339 style='border-top:none;border-left:none'>
  
  
  <!-- Pregunta 6 -->
  <?php echo $Promedio6; ?>




</td></tr><tr height=21 style='height:15.75pt'>


<!-- Actitud -->

  <td colspan=6 height=21 class=xl11127339 style='border-right:1.0pt solid black;
  height:15.75pt'>ACTITUD</td>
 </tr>
 <tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl11827339 width=379 style='border-right:1.0pt solid black;
  height:35.1pt;width:284pt'>La actitud hacia los compañeros y superiores
  genera un clima laboral adecuado</td>
  <td class=xl6427339 style='border-left:none'>
  
  

  <!-- Pregunta 7 -->
  <?php echo $Promedio7; ?>
  
  
  
  </td><td rowspan=4 class=xl10127339 style='border-bottom:1.0pt solid black; border-top:none'>
  
  
  <!-- Promedio 7-8-9-10 -->
  <?php echo $Pro4;?>
  
  
  </td> <td rowspan=4 class=xl9527339 style='border-bottom:1.0pt solid black;border-top:none'>
  
  
  
  <!-- Porcentaje 7-8-9-10 -->
  <?php echo (($Pro4/5)*100)."%";?>
  
  
  </td><td rowspan=4 class=xl9727339 style='border-bottom:1.0pt solid black; border-top:none'>
  

  <!-- Ponderacion 7-8-9-10 -->
  <?php echo $PO4=($Pro4*12)/100 ?>


</td></tr><tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl12727339 width=379 style='border-right:1.0pt solid black;
  height:35.1pt;width:284pt'>Mantiene una actitud respetuosa con los usuarios</td>
  <td class=xl6427339 style='border-top:none;border-left:none'>
  
  
   <!-- Pregunta 8 -->
   <?php echo $Promedio8; ?>



</td>
 </tr>
 <tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl12727339 width=379 style='border-right:1.0pt solid black;
  height:35.1pt;width:284pt'>Recibe positivamente las observaciones,
  recomendaciones y críticas constructivas</td>
  <td class=xl6427339 style='border-top:none;border-left:none'>
  
  
  
   <!-- Pregunta 9 -->
   <?php echo $Promedio9; ?>



</td>
 </tr>
 <tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl11627339 width=379 style='border-right:1.0pt solid black;
  height:35.1pt;width:284pt'>Maneja adecuadamente las emociones frente a
  situaciones de estrés</td><td class=xl6427339 style='border-top:none;border-left:none'>
  
  
   <!-- Pregunta 10 -->
   <?php echo $Promedio10; ?>


  <!-- Compromiso -->
</td></tr><tr height=21 style='height:15.75pt'>
<td colspan=6 height=21 class=xl11127339 style='border-right:1.0pt solid black;
height:15.75pt'>COMPROMISO</td></tr>
<tr height=46 style='mso-height-source:userset;height:35.1pt'>
<td colspan=2 height=46 class=xl11827339 width=379 style='border-right:1.0pt solid black;
height:35.1pt;width:284pt'>Muestra compromiso y dedicación en la realización de las tareas asignadas al cargo</td>
  <td class=xl6527339 style='border-left:none'>
  
  
  <!-- Pregunta 11 -->
  <?php echo $Promedio11; ?>
  
  
  </td><td rowspan=2 class=xl10127339 style='border-bottom:1.0pt solid black; border-top:none'>
  
  
  <!-- Promedio 11-12 -->
  <?php echo $Pro5;?>
  
  
  </td><td rowspan=2 class=xl9527339 style='border-bottom:1.0pt solid black; border-top:none'>
  

  <!-- Porcentaje 11-12 -->
  <?php echo (($Pro5/5)*100)."%";?>

  
  </td><td rowspan=2 class=xl9727339 style='border-bottom:1.0pt solid black; border-top:none'>
  
  
    <!-- Ponderacion 11-12 -->
    <?php echo $PO5=($Pro5*10)/100 ?>
  
  
</td></tr><tr height=46 style='mso-height-source:userset;height:35.1pt'>
<td colspan=2 height=46 class=xl11627339 width=379 style='border-right:1.0pt solid black;
height:35.1pt;width:284pt'>Sus acciones y comportamiento demuestran sentido de pertenencia hacia la entidad</td>
<td class=xl6527339 style='border-top:none;border-left:none'>
  
  
 <!-- Pregunta 12 -->
 <?php echo $Promedio12; ?>
  
  
</td></tr><tr height=21 style='height:15.75pt'>



<!-- Calidad en el trabajo -->

<td colspan=6 height=21 class=xl11127339 style='border-right:1.0pt solid black;
height:15.75pt'>CALIDAD EN EL TRABAJO</td></tr>
<tr height=46 style='mso-height-source:userset;height:35.1pt'>
<td colspan=2 height=46 class=xl12527339 width=379 style='border-right:1.0pt solid black;
height:35.1pt;width:284pt'>Realiza su trabajo cumpliendo con los estándares
de calidad requeridos</td>
<td class=xl6527339 style='border-left:none'>
  
  
<!-- Pregunta 13 -->
 <?php echo $Promedio13; ?>
  
  
</td><td rowspan=2 class=xl10127339 style='border-bottom:1.0pt solid black; border-top:none'>
  
  
  <!-- Promedio 13-14 -->
  <?php echo $Pro6;?>
  
  
</td><td rowspan=2 class=xl9527339 style='border-bottom:1.0pt solid black; border-top:none'>



<!-- Porcentaje 13-14 -->
<?php echo (($Pro6/5)*100)."%";?>




</td><td rowspan=2 class=xl9727339 style='border-bottom:1.0pt solid black; border-top:none'>



<!-- Ponderacion 13-14 -->
<?php echo $PO6=($Pro6*10)/100 ?>


</td></tr><tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl11627339 width=379 style='border-right:1.0pt solid black;
  height:35.1pt;width:284pt'>Realiza su trabajo de acuerdo con los
  requerimientos en términos de contenido, exactitud, presentación y atención</td>
  <td class=xl6527339 style='border-top:none;border-left:none'>
  
  
  
<!-- Pregunta 14 -->
 <?php echo $Promedio14; ?>
  

</td></tr><tr height=21 style='height:15.75pt'>


<!-- Trabajo en equipo -->


<td colspan=6 height=21 class=xl11127339 style='border-right:1.0pt solid black;
height:15.75pt'>TRABAJO EN EQUIPO</td>
 </tr>
 <tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl11827339 width=379 style='border-right:1.0pt solid black;
  height:35.1pt;width:284pt'>Participa y coopera con el equipo de trabajo para
  el cumplimiento de los objetivos organizacionales</td>
  <td class=xl6627339 width=146 style='border-top:none;border-left:none;
  width:110pt'>
  
  
 <!-- Pregunta 15 -->
 <?php echo $Promedio15; ?>
  
  
  </td>
  <td rowspan=2 class=xl9927339 width=132 style='border-bottom:1.0pt solid black;
  border-top:none;width:99pt'>
  
  
  
 <!-- Promedio 15-16 -->
 <?php echo $Pro7;?>
  
  
  
  </td>
  <td rowspan=2 class=xl9527339 style='border-bottom:1.0pt solid black;
  border-top:none'>
  
  
  
  <!-- Porcentaje 15-16 -->
<?php echo (($Pro7/5)*100)."%";?>

  
  
  
  
  </td>
  <td rowspan=2 class=xl9727339 style='border-bottom:1.0pt solid black;
  border-top:none'>
  
  
  
  <!-- Ponderacion 15-16 -->
<?php echo $PO7=($Pro7*10)/100 ?>
  
  
  
  </td>
 </tr>
 <tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl11627339 width=379 style='border-right:1.0pt solid black;
  height:35.1pt;width:284pt'>Establece y mantiene comunicación respetuosa con
  los demás colaboradores, sin importar la jerarquía</td>
  <td class=xl6727339 width=146 style='border-left:none;width:110pt'>
  
  
    
 <!-- Pregunta 16 -->
 <?php echo $Promedio16; ?>
  
  
  </td>
 </tr>
 
  <!-- Cumpliento -->


  <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=6 height=21 class=xl12027339 width=971 style='border-right:1.0pt solid black;
  height:15.75pt;width:728pt'>CUMPLIMIENTO DE LOS PROCEDIMIENTOS</td>
 </tr>
 <tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl7727339 width=379 style='border-right:1.0pt solid black;
  height:35.1pt;width:284pt'>Conoce y cumple los procedimientos establecidos
  para el cargo correspondiente</td>
  <td class=xl6827339 width=146 style='border-top:none;border-left:none;
  width:110pt'>
  
  
  <!-- Pregunta 17 -->
  <?php echo $Promedio17; ?>
  
  
  </td>
  <td rowspan=2 class=xl9927339 width=132 style='border-bottom:1.0pt solid black;
  border-top:none;width:99pt'>
  
  
 <!-- Promedio 15-16 -->
 <?php echo $Pro8;?>
  
  
  </td>
  <td rowspan=2 class=xl9527339 style='border-bottom:1.0pt solid black;
  border-top:none'>
  
  
  
   <!-- Porcentaje 17-18 -->
<?php echo (($Pro8/5)*100)."%";?>

  
  
  
  </td>
  <td rowspan=2 class=xl9727339 style='border-bottom:1.0pt solid black;
  border-top:none'>
  
  
<!-- Ponderacion 17-18 -->
<?php echo $PO8=($Pro8*10)/100 ?>
  
  
  </td>
 </tr>
 <tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl11627339 width=379 style='border-right:1.0pt solid black;
  height:35.1pt;width:284pt'>Lleva un registro de los procedimientos
  realizados, para no generar repeticiones, errores o inconformidades</td>
  <td class=xl6927339 width=146 style='border-left:none;width:110pt'>
  
  
  
<!-- Pregunta 18 -->
 <?php echo $Promedio18; ?>
  
  
  
  
  </td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  


  <!-- Liderazgo -->
  
  <td colspan=6 height=21 class=xl12027339 width=971 style='border-right:1.0pt solid black;
  height:15.75pt;width:728pt'>LIDERAZGO</td>
 </tr>
 <tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl12327339 width=379 style='height:35.1pt;
  width:284pt'>Inspira y motiva a otros frente a diferentes situaciones</td>
  <td class=xl7027339 width=146 style='border-top:none;width:110pt'>
  
  
  <!-- Pregunta 19 -->
 <?php echo $Promedio19; ?>
  
  
  
  
  </td>
  <td rowspan=2 class=xl9927339 width=132 style='border-bottom:1.0pt solid black;
  border-top:none;width:99pt'>
  
  
  
  <!-- Promedio 19-20 -->
<?php echo $Pro9;?>
  
  
  
  </td>
  <td rowspan=2 class=xl9527339 style='border-bottom:1.0pt solid black;
  border-top:none'>
  
  
  
<!-- Porcentaje 19-20 -->
<?php echo (($Pro9/5)*100)."%";?>
  
  
  
  </td>
  <td rowspan=2 class=xl9727339 style='border-bottom:1.0pt solid black;
  border-top:none'>
  
  
  
  <!-- Ponderacion 19-20 -->
<?php echo $PO9=($Pro9*10)/100 ?>
  
  
  
  
  </td>
 </tr>
 <tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl12327339 width=379 style='height:35.1pt;
  width:284pt'>Promueve e incentiva la comunicación, la resolucion de
  conflictos y el trabajo en equipo</td>
  <td class=xl7127339 width=146 style='width:110pt'>
  
  
  
 <!-- Pregunta 20 -->
 <?php echo $Promedio20; ?>
  
  
  
  </td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  
  
  
 <!-- Efiencia -->  
  
  <td colspan=6 height=21 class=xl12027339 width=971 style='border-right:1.0pt solid black;
  height:15.75pt;width:728pt'>EFICIENCIA</td>
 </tr>
 <tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl11827339 width=379 style='border-right:1.0pt solid black;
  height:35.1pt;width:284pt'>Emplea de manera óptima los recursos asignados
  para la realización de las actividades</td>
  <td class=xl6827339 width=146 style='border-top:none;border-left:none;
  width:110pt'>
  
  
  <!-- Pregunta 21 -->
<?php echo $Promedio21; ?>
  
  
  
  </td>
  <td rowspan=2 class=xl9927339 width=132 style='border-bottom:1.0pt solid black;
  border-top:none;width:99pt'>
  
  
   <!-- Promedio 21-22 -->
<?php echo $Pro10;?>
  
  
  
  </td>
  <td rowspan=2 class=xl9527339 style='border-bottom:1.0pt solid black;
  border-top:none'>
  
  
 <!-- Porcentaje 21-22 -->
 <?php echo (($Pro10/5)*100)."%";?>
  
  
  
  </td>
  <td rowspan=2 class=xl9727339 style='border-bottom:1.0pt solid black;
  border-top:none'>
  
  <!-- Ponderacion 21-22 -->
<?php echo $PO10=($Pro10*8)/100 ?>
 
  
  </td>
 </tr>
 <tr height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=2 height=46 class=xl7927339 width=379 style='border-right:1.0pt solid black;
  height:35.1pt;width:284pt'>Brinda atención a los usuarios de manera ágil y
  oportuna<span style='mso-spacerun:yes'></span></td>
  <td class=xl6927339 width=146 style='border-left:none;width:110pt'>
  
  
  
  <!-- Pregunta 22 -->
<?php echo $Promedio22; ?>
  
  
  </td>
 </tr>
 <tr height=21 style='height:15.75pt'>


<!-- Puntaje Total-->


  <td colspan=6 height=21 class=xl7427339 style='border-right:1.0pt solid black;
  height:15.75pt'>PUNTAJE TOTAL<span style='mso-spacerun:yes'></span></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td colspan=6 height=21 class=xl10827339 style='border-right:1.0pt solid black;
  height:15.75pt;font-size:11.0pt;color:black;font-weight:700;text-decoration:
  none;text-underline-style:none;text-line-through:none;font-family: Tahoma, sans-serif;
  border-top:1.0pt solid windowtext;border-right:none;border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;background:#FFC000;mso-pattern:black none'>
  
  

  <?php
  echo $POR=($PO1+$PO2+$PO3+$PO4+$PO5+$PO6+$PO7+$PO8+$PO9+$PO10)."/5.0";
  ?>
  
  
  
  
  </td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=2 rowspan=5 height=101 class=xl8927339 style='border-bottom:1.0pt solid black;
  height:75.75pt'>&nbsp;</td>
  
  
  <td colspan=4 rowspan=8 class=xl8927339 style='border-right:1.0pt solid black;
  border-bottom:1.0pt solid black'>Observaciones</td>
 
 </tr>
 <tr height=20 style='height:15.0pt'>
 </tr>
 <tr height=20 style='height:15.0pt'>
 </tr>
 <tr height=20 style='height:15.0pt'>
 </tr>
 <tr height=21 style='height:15.75pt'>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl8927339 style='height:15.0pt'>firma</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td class=xl9127339 style='height:15.0pt'></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td colspan=2 height=21 class=xl9327339 style='height:15.75pt'></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=167 style='width:125pt'></td>
  <td width=212 style='width:159pt'></td>
  <td width=146 style='width:110pt'></td>
  <td width=132 style='width:99pt'></td>
  <td width=147 style='width:110pt'></td>
  <td width=167 style='width:125pt'></td>
 </tr>
 <![endif]>
</table>

</div>

</body>

</html>