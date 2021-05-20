<?php


function getExp
(
$F,
$Acedula,
$Anombre,
$Agrupo,
$Acargo,
$Bcedula,
$Bnombre,
$Bcargo,
$p1,
$p2,
$p3,
$p4,
$p5,
$p6,
$p7,
$p8,
$p9,
$p10,
$p11,
$p12,
$p13,
$p14,
$p15,
$p16,
$p17,
$p18,
$p19,
$p20,
$p21,
$p22,
$p23,
$p24,
$p25,
$p26,
$p27,
$p28,
$p29,
$p30,
$p31,
$p32,
$comen
)
{

$Exp = '

<img src="img/CN1.png" alt="logo Clinica Meta" width="690" height="106">

<body>

<div id="FINAL_6105" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=879 style="border-collapse:
 collapse;table-layout:fixed;width:660pt">
 <col width=314 style="mso-width-source:userset;mso-width-alt:11483;width:236pt">
 <col width=275 style="mso-width-source:userset;mso-width-alt:10057;width:206pt">
 <col class=xl636105 width=145 span=2 style="mso-width-source:userset;
 mso-width-alt:5302;width:109pt">
 <tr height=22 style="height:16.5pt">
  <td height=22 class=xl646105 width=314 style="height:16.5pt;width:236pt"><a
  name="RANGE!A1:D68"></a></td>
  <td class=xl646105 width=275 style="width:206pt"></td>
  <td class=xl656105 width=145 style="width:109pt"></td>
  <td class=xl656105 width=145 style="width:109pt"></td>
 </tr>
 <tr height=44 style="mso-height-source:userset;height:33.0pt">
  <td colspan=4 height=44 class=xl1186105 width=879 style="border-right:1.0pt solid black;
  height:33.0pt;width:660pt">EVALUACIÓN DE DESEMPEÑO</td>
 </tr>
 <tr height=24 style="mso-height-source:userset;height:18.0pt">
  <td height=24 class=xl666105 width=314 style="height:18.0pt;border-top:none;
  width:236pt">EVALUADO</td>
  <td colspan=3 class=xl666105 width=565 style="border-right:1.0pt solid black;
  width:424pt">'.$Acedula.' | '.$Anombre.'</td>
 </tr>
 <tr height=24 style="mso-height-source:userset;height:18.0pt">
  <td height=24 class=xl676105 width=314 style="height:18.0pt;border-top:none;
  width:236pt">CARGO</td>
  <td colspan=3 class=xl676105 width=565 style="border-right:1.0pt solid black;
  width:424pt">'.$Acargo.'</td>
 </tr>
 <tr height=22 style="mso-height-source:userset;height:16.5pt">
  <td height=22 class=xl676105 width=314 style="height:16.5pt;border-top:none;
  width:236pt">DEPARTAMENTO/ÁREA</td>
  <td colspan=3 class=xl676105 width=565 style="border-right:1.0pt solid black;
  width:424pt">'.$Agrupo.'</td>
 </tr>
 <tr height=22 style="mso-height-source:userset;height:16.5pt">
  <td height=22 class=xl676105 width=314 style="height:16.5pt;border-top:none;
  width:236pt">FECHA DE EVALUACIÓN</td>
  <td colspan=3 class=xl676105 width=565 style="border-right:1.0pt solid black;
  width:424pt">'.$F.'</td>
 </tr>
 <tr height=22 style="mso-height-source:userset;height:16.5pt">
  <td height=22 class=xl676105 width=314 style="height:16.5pt;border-top:none;
  width:236pt">EVALUADOR</td>
  <td colspan=3 class=xl676105 width=565 style="border-right:1.0pt solid black;
  width:424pt">'.$Bcedula.' | '.$Bnombre.'</td>
 </tr>
 <tr height=25 style="mso-height-source:userset;height:18.75pt">
  <td height=25 class=xl706105 width=314 style="height:18.75pt;border-top:none;
  width:236pt">CARGO</td>
  <td colspan=3 class=xl706105 width=565 style="border-right:1.0pt solid black;
  width:424pt">'.$Bcargo.'</td>
 </tr>
 <tr height=26 style="mso-height-source:userset;height:20.1pt">
  <td colspan=4 height=26 class=xl996105 width=879 style="height:20.1pt;
  width:660pt">&nbsp;</td>
 </tr>
 <tr height=40 style="mso-height-source:userset;height:30.0pt">
  <td colspan=4 height=40 class=xl1226105 style="border-right:1.0pt solid black;
  height:30.0pt">GENERAL</td>
 </tr>
 <tr height=26 style="mso-height-source:userset;height:20.1pt">
  <td colspan=2 height=26 class=xl1256105 style="border-right:1.0pt solid black;
  height:20.1pt">PILARES</td>
  <td class=xl1276105 width=145 style="border-top:none;border-left:none;
  width:109pt">CALIFICACIÓN</td>
  <td class=xl1276105 width=145 style="border-top:none;border-left:none;
  width:109pt">PROMEDIO</td>
 </tr>
 <tr height=21 style="mso-height-source:userset;height:15.75pt">
  <td colspan=4 height=21 class=xl1286105 width=879 style="border-right:1.0pt solid black;
  height:15.75pt;width:660pt">CUMPLIMIENTO DE LOS PROCEDIMIENTOS</td>
 </tr>
 <tr height=45 style="mso-height-source:userset;height:33.75pt">
  <td colspan=2 height=45 class=xl716105 width=589 style="border-right:1.0pt solid black;
  height:33.75pt;width:442pt">Conoce y cumple los procedimientos establecidos
  para el cargo correspondiente</td>
  <td class=xl1316105 width=145 style="border-top:none;border-left:none;
  width:109pt">'.$p17.'</td>
  <td rowspan=2 class=xl736105 width=145 style="border-bottom:1.0pt solid black;
  border-top:none;width:109pt">'.(($p17+$p18)/2).'</td>
 </tr>
 <tr height=62 style="mso-height-source:userset;height:46.5pt">
  <td colspan=2 height=62 class=xl746105 width=589 style="border-right:1.0pt solid black;
  height:46.5pt;width:442pt">Lleva un registro de los procedimientos
  realizados, para no generar repeticiones, errores o inconformidades</td>
  <td class=xl1326105 width=145 style="border-left:none;width:109pt">'.$p18.'</td>
 </tr>
 <tr height=20 style="mso-height-source:userset;height:15.0pt">
  <td colspan=4 height=20 class=xl1336105 style="border-right:1.0pt solid black;
  height:15.0pt">ACTITUD</td>
 </tr>
 <tr height=44 style="mso-height-source:userset;height:33.0pt">
  <td colspan=2 height=44 class=xl716105 width=589 style="border-right:1.0pt solid black;
  height:33.0pt;width:442pt">La actitud hacia los compañeros y superiores
  genera un clima laboral adecuado</td>
  <td class=xl1366105 style="border-left:none">'.$p7.'</td>
  <td rowspan=4 class=xl776105 style="border-bottom:1.0pt solid black;
  border-top:none">'.(($p7+$p8+$p9+$p10)/4).'</td>
 </tr>
 <tr height=40 style="mso-height-source:userset;height:30.0pt">
  <td colspan=2 height=40 class=xl786105 width=589 style="border-right:1.0pt solid black;
  height:30.0pt;width:442pt">Mantiene una actitud respetuosa con los usuarios</td>
  <td class=xl1366105 style="border-top:none;border-left:none">'.$p8.'</td>
 </tr>
 <tr height=49 style="mso-height-source:userset;height:36.75pt">
  <td colspan=2 height=49 class=xl786105 width=589 style="border-right:1.0pt solid black;
  height:36.75pt;width:442pt">Recibe positivamente las observaciones,
  recomendaciones y críticas constructivas</td>
  <td class=xl1366105 style="border-top:none;border-left:none">'.$p9.'</td>
 </tr>
 <tr height=43 style="mso-height-source:userset;height:32.25pt">
  <td colspan=2 height=43 class=xl746105 width=589 style="border-right:1.0pt solid black;
  height:32.25pt;width:442pt">Maneja adecuadamente las emociones frente a
  situaciones de estrés</td>
  <td class=xl1366105 style="border-top:none;border-left:none">'.$p10.'</td>
 </tr>
 <tr height=20 style="mso-height-source:userset;height:15.0pt">
  <td height=20 class=xl1376105 style="height:15.0pt;border-top:none">RESPONSABILIDAD</td>
  <td class=xl1386105 style="border-top:none">&nbsp;</td>
  <td class=xl1386105>&nbsp;</td>
  <td class=xl1396105 style="border-top:none">&nbsp;</td>
 </tr>
 <tr height=50 style="mso-height-source:userset;height:37.5pt">
  <td colspan=2 height=50 class=xl716105 width=589 style="border-right:1.0pt solid black;
  height:37.5pt;width:442pt">Realiza las funciones y deberes propios del cargo
  sin que requiera supervisión y control permanente</td>
  <td class=xl1406105 style="border-left:none">'.$p1.'</td>
  <td rowspan=2 class=xl776105 style="border-bottom:1.0pt solid black;
  border-top:none">'.(($p1+$p2)/2).'</td>
 </tr>
 <tr height=54 style="mso-height-source:userset;height:40.5pt">
  <td colspan=2 height=54 class=xl826105 width=589 style="border-right:1.0pt solid black;
  height:40.5pt;width:442pt">Actitud para completar las tareas y deberes
  asignados de acuerdo a las metas y plazos acordados</td>
  <td class=xl1366105 style="border-top:none;border-left:none">'.$p2.'</td>
 </tr>
 <tr height=22 style="page-break-before:always;height:16.5pt">
  <td colspan=4 height=22 class=xl1416105 style="border-right:1.0pt solid black;
  height:16.5pt">CALIDAD EN EL TRABAJO</td>
 </tr>
 <tr height=44 style="mso-height-source:userset;height:33.0pt">
  <td colspan=2 height=44 class=xl846105 width=589 style="border-right:1.0pt solid black;
  height:33.0pt;width:442pt">Realiza su trabajo cumpliendo con los estándares
  de calidad requeridos</td>
  <td class=xl1446105 style="border-left:none">'.$p13.'</td>
  <td rowspan=2 class=xl776105 style="border-bottom:1.0pt solid black;
  border-top:none">'.(($p13+$p14)/2).'</td>
 </tr>
 <tr height=65 style="mso-height-source:userset;height:48.75pt">
  <td colspan=2 height=65 class=xl746105 width=589 style="border-right:1.0pt solid black;
  height:48.75pt;width:442pt">Realiza su trabajo de acuerdo con los
  requerimientos en términos de contenido, exactitud, presentación y atención</td>
  <td class=xl1446105 style="border-top:none;border-left:none">'.$p14.'</td>
 </tr>
 <tr height=22 style="height:16.5pt">
  <td colspan=4 height=22 class=xl1416105 style="border-right:1.0pt solid black;
  height:16.5pt">COMPROMISO</td>
 </tr>
 <tr height=45 style="mso-height-source:userset;height:33.75pt">
  <td colspan=2 height=45 class=xl716105 width=589 style="border-right:1.0pt solid black;
  height:33.75pt;width:442pt">Muestra compromiso y dedicación en la realización
  de las tareas asignadas al cargo</td>
  <td class=xl1446105 style="border-left:none">'.$p11.'</td>
  <td rowspan=2 class=xl776105 style="border-bottom:1.0pt solid black;
  border-top:none">'.(($p11+$p12)/2).'</td>
 </tr>
 <tr height=47 style="mso-height-source:userset;height:35.25pt">
  <td colspan=2 height=47 class=xl746105 width=589 style="border-right:1.0pt solid black;
  height:35.25pt;width:442pt">Sus acciones y comportamiento demuestran sentido
  de pertenencia hacia la entidad</td>
  <td class=xl1446105 style="border-top:none;border-left:none">'.$p12.'</td>
 </tr>
 <tr height=24 style="mso-height-source:userset;height:18.0pt">
  <td colspan=4 height=24 class=xl1286105 width=879 style="border-right:1.0pt solid black;
  height:18.0pt;width:660pt">LIDERAZGO</td>
 </tr>
 <tr height=62 style="mso-height-source:userset;height:46.5pt">
  <td colspan=2 height=62 class=xl866105 width=589 style="border-right:1.0pt solid black;
  height:46.5pt;width:442pt">Inspira y motiva a otros frente a diferentes
  situaciones</td>
  <td class=xl1486105 width=145 style="border-top:none;border-left:none;
  width:109pt">'.$p19.'</td>
  <td rowspan=2 class=xl736105 width=145 style="border-bottom:1.0pt solid black;
  border-top:none;width:109pt">'.(($p19+$p20)/2).'</td>
 </tr>
 <tr height=62 style="mso-height-source:userset;height:46.5pt">
  <td colspan=2 height=62 class=xl866105 width=589 style="border-right:1.0pt solid black;
  height:46.5pt;width:442pt">Promueve e incentiva la comunicación, la
  resolucion de conflictos y el trabajo en equipo</td>
  <td class=xl1496105 width=145 style="border-left:none;width:109pt">'.$p20.'</td>
 </tr>
 <tr height=19 style="mso-height-source:userset;height:14.25pt">
  <td colspan=4 height=19 class=xl1336105 style="border-right:1.0pt solid black;
  height:14.25pt">PRODUCTIVIDAD<span style="mso-spacerun:yes"></span></td>
 </tr>
 <tr height=46 style="mso-height-source:userset;height:34.5pt">
  <td colspan=2 height=46 class=xl716105 width=589 style="border-right:1.0pt solid black;
  height:34.5pt;width:442pt">Realiza múltiples tareas cumpliendo con el tiempo
  establecido</td>
  <td class=xl1446105 style="border-left:none">'.$p5.'</td>
  <td rowspan=2 class=xl776105 style="border-bottom:1.0pt solid black;
  border-top:none">'.(($p5+$p6)/2).'</td>
 </tr>
 <tr height=43 style="mso-height-source:userset;height:32.25pt">
  <td colspan=2 height=43 class=xl746105 width=589 style="border-right:1.0pt solid black;
  height:32.25pt;width:442pt">Minimiza desperdicios en los procedimientos
  referentes al cargo</td>
  <td class=xl1446105 style="border-top:none;border-left:none">'.$p6.'</td>
 </tr>
 <tr height=22 style="height:16.5pt">
  <td colspan=4 height=22 class=xl1336105 style="border-right:1.0pt solid black;
  height:16.5pt">TRABAJO EN EQUIPO</td>
 </tr>
 <tr height=48 style="mso-height-source:userset;height:36.0pt">
  <td colspan=2 height=48 class=xl716105 width=589 style="border-right:1.0pt solid black;
  height:36.0pt;width:442pt">Participa y coopera con el equipo de trabajo para
  el cumplimiento de los objetivos organizacionales</td>
  <td class=xl1506105 width=145 style="border-top:none;border-left:none;
  width:109pt">'.$p15.'</td>
  <td rowspan=2 class=xl736105 width=145 style="border-bottom:1.0pt solid black;
  border-top:none;width:109pt">'.(($p15+$p16)/2).'</td>
 </tr>
 <tr height=52 style="mso-height-source:userset;height:39.0pt">
  <td colspan=2 height=52 class=xl746105 width=589 style="border-right:1.0pt solid black;
  height:39.0pt;width:442pt">Establece y mantiene comunicación respetuosa con
  los demás colaboradores, sin importar la jerarquía</td>
  <td class=xl1516105 width=145 style="border-left:none;width:109pt">'.$p16.'</td>
 </tr>
 <tr height=22 style="height:16.5pt">
  <td colspan=4 height=22 class=xl1286105 width=879 style="border-right:1.0pt solid black;
  height:16.5pt;width:660pt">EFICIENCIA</td>
 </tr>
 <tr height=40 style="mso-height-source:userset;height:30.0pt">
  <td colspan=2 height=40 class=xl716105 width=589 style="border-right:1.0pt solid black;
  height:30.0pt;width:442pt">Emplea de manera Óptima los recursos asignados
  para la realización de las actividades</td>
  <td class=xl1316105 width=145 style="border-top:none;border-left:none;
  width:109pt">'.$p21.'</td>
  <td rowspan=2 class=xl736105 width=145 style="border-bottom:1.0pt solid black;
  border-top:none;width:109pt">'.(($p21+$p22)/2).'</td>
 </tr>
 <tr height=48 style="mso-height-source:userset;height:36.0pt">
  <td colspan=2 height=48 class=xl746105 width=589 style="border-right:1.0pt solid black;
  height:36.0pt;width:442pt">Brinda atención a los usuarios de manera ágil y
  oportuna<span style="mso-spacerun:yes"></span></td>
  <td class=xl1326105 width=145 style="border-left:none;width:109pt">'.$p22.'</td>
 </tr>
 <tr height=22 style="height:16.5pt">
  <td colspan=4 height=22 class=xl1336105 style="border-right:1.0pt solid black;
  height:16.5pt">PRESENTACIóN E HIGIENE</td>
 </tr>
 <tr height=45 style="mso-height-source:userset;height:33.75pt">
  <td colspan=2 height=45 class=xl886105 width=589 style="border-right:1.0pt solid black;
  height:33.75pt;width:442pt">Mantiene en orden e higiene el lugar de trabajo</td>
  <td class=xl1366105 style="border-left:none">'.$p3.'</td>
  <td rowspan=2 class=xl776105 style="border-bottom:1.0pt solid black;
  border-top:none">'.(($p3+$p4)/2).'</td>
 </tr>
 <tr height=45 style="mso-height-source:userset;height:33.75pt">
  <td colspan=2 height=45 class=xl746105 width=589 style="border-right:1.0pt solid black;
  height:33.75pt;width:442pt">La presentación personal es acorde al reglamento
  interno establecido</td>
  <td class=xl1526105 style="border-top:none;border-left:none">'.$p4.'</td>
 </tr>
 <tr height=26 style="mso-height-source:userset;height:20.1pt">
  <td colspan=4 height=26 class=xl1006105 style="height:20.1pt">&nbsp;</td>
 </tr>
 <tr height=40 style="mso-height-source:userset;height:30.0pt">
  <td colspan=4 height=40 class=xl1226105 style="border-right:1.0pt solid black;
  height:30.0pt">ESPECIFICA</td>
 </tr>
 <tr height=26 style="mso-height-source:userset;height:20.1pt">
  <td colspan=2 height=26 class=xl1256105 style="border-right:1.0pt solid black;
  height:20.1pt">PILARES</td>
  <td class=xl1276105 width=145 style="border-top:none;border-left:none;
  width:109pt">CALIFICACIÓN</td>
  <td class=xl1536105 width=145 style="border-top:none;width:109pt">PROMEDIO</td>
 </tr>';

    //if para los 10

    if($p32!=0)
    {
        $Exp .='

        <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl926105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP1</td>
        <td class=xl1546105 width=145 style="border-left:none;width:109pt">'.$p23.'</td>
        <td rowspan=10 class=xl736105 width=145 style="border-bottom:1.0pt solid black;
        border-top:none;width:109pt">'.(($p23+$p24+$p25+$p26+$p27+$p28+$p29+$p30+$p31+$p32)/10).'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP2</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p24.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP3</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p25.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP4</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p26.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP5</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p27.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP6</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p28.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP7</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p29.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP8</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p30.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP9</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p31.'</td>
       </tr>
       <tr height=60 style="page-break-before:always;mso-height-source:userset;
        height:45.0pt">
        <td colspan=2 height=60 class=xl966105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP10</td>
        <td class=xl1556105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p32.'</td>
       </tr>
       <tr height=26 style="mso-height-source:userset;height:20.1pt">
       <td colspan=4 height=26 class=xl1016105 style="height:20.1pt">&nbsp;</td>
      </tr>
      <tr height=21 style="height:15.75pt">
       <td colspan=2 rowspan=2 height=43 class=xl1566105 style="border-bottom:1.0pt solid black;
       height:32.25pt">CALIFICACION FINAL</td>
       <td colspan=2 rowspan=2 class=xl1056105 style="border-right:1.0pt solid black;
       border-bottom:1.0pt solid black">'.
       (
       (
       ((($p17+$p18)/2)*16/100)+
       ((($p7+$p8+$p9+$p10)/4)*12/100)+
       ((($p1+$p2)/2)*10/100)+
       ((($p13+$p14)/2)*10/100)+
       ((($p11+$p12)/2)*10/100)+
       ((($p19+$p20)/2)*9/100)+
       ((($p5+$p6)/2)*9/100)+
       ((($p15+$p16)/2)*9/100)+
       ((($p21+$p22)/2)*8/100)+
       ((($p3+$p4)/2)*7/100)
       
       +
       (($p23+$p24+$p25+$p26+$p27+$p28+$p29+$p30+$p31+$p32)/10))/2).'</td>
      </tr>';
    }

    //if para los 9

    else if($p31!=0)
    {
        $Exp .='

        <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl926105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP1</td>
        <td class=xl1546105 width=145 style="border-left:none;width:109pt">'.$p23.'</td>
        <td rowspan=9 class=xl736105 width=145 style="border-bottom:1.0pt solid black;
        border-top:none;width:109pt">'.(($p23+$p24+$p25+$p26+$p27+$p28+$p29+$p30+$p31)/9).'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP2</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p24.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP3</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p25.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP4</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p26.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP5</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p27.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP6</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p28.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP7</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p29.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP8</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p30.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP9</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p31.'</td>
       </tr>
       <tr height=26 style="mso-height-source:userset;height:20.1pt">
       <td colspan=4 height=26 class=xl1016105 style="height:20.1pt">&nbsp;</td>
      </tr>
      <tr height=21 style="height:15.75pt">
       <td colspan=2 rowspan=2 height=43 class=xl1566105 style="border-bottom:1.0pt solid black;
       height:32.25pt">CALIFICACION FINAL</td>
       <td colspan=2 rowspan=2 class=xl1056105 style="border-right:1.0pt solid black;
       border-bottom:1.0pt solid black">'.
       (
       (
       ((($p17+$p18)/2)*16/100)+
       ((($p7+$p8+$p9+$p10)/4)*12/100)+
       ((($p1+$p2)/2)*10/100)+
       ((($p13+$p14)/2)*10/100)+
       ((($p11+$p12)/2)*10/100)+
       ((($p19+$p20)/2)*9/100)+
       ((($p5+$p6)/2)*9/100)+
       ((($p15+$p16)/2)*9/100)+
       ((($p21+$p22)/2)*8/100)+
       ((($p3+$p4)/2)*7/100)
       
       +
       (($p23+$p24+$p25+$p26+$p27+$p28+$p29+$p30+$p31)/9))/2).'</td>
      </tr>';
    }
        //if para los 8

        else if($p30!=0)
        {
            $Exp .='
    
            <tr height=60 style="mso-height-source:userset;height:45.0pt">
            <td colspan=2 height=60 class=xl926105 width=589 style="border-right:1.0pt solid black;
            height:45.0pt;width:442pt">PP1</td>
            <td class=xl1546105 width=145 style="border-left:none;width:109pt">'.$p23.'</td>
            <td rowspan=8 class=xl736105 width=145 style="border-bottom:1.0pt solid black;
            border-top:none;width:109pt">'.(($p23+$p24+$p25+$p26+$p27+$p28+$p29+$p30)/8).'</td>
           </tr>
           <tr height=60 style="mso-height-source:userset;height:45.0pt">
            <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
            height:45.0pt;width:442pt">PP2</td>
            <td class=xl1516105 width=145 style="border-top:none;border-left:none;
            width:109pt">'.$p24.'</td>
           </tr>
           <tr height=60 style="mso-height-source:userset;height:45.0pt">
            <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
            height:45.0pt;width:442pt">PP3</td>
            <td class=xl1516105 width=145 style="border-top:none;border-left:none;
            width:109pt">'.$p25.'</td>
           </tr>
           <tr height=60 style="mso-height-source:userset;height:45.0pt">
            <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
            height:45.0pt;width:442pt">PP4</td>
            <td class=xl1516105 width=145 style="border-top:none;border-left:none;
            width:109pt">'.$p26.'</td>
           </tr>
           <tr height=60 style="mso-height-source:userset;height:45.0pt">
            <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
            height:45.0pt;width:442pt">PP5</td>
            <td class=xl1516105 width=145 style="border-top:none;border-left:none;
            width:109pt">'.$p27.'</td>
           </tr>
           <tr height=60 style="mso-height-source:userset;height:45.0pt">
            <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
            height:45.0pt;width:442pt">PP6</td>
            <td class=xl1516105 width=145 style="border-top:none;border-left:none;
            width:109pt">'.$p28.'</td>
           </tr>
           <tr height=60 style="mso-height-source:userset;height:45.0pt">
            <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
            height:45.0pt;width:442pt">PP7</td>
            <td class=xl1516105 width=145 style="border-top:none;border-left:none;
            width:109pt">'.$p29.'</td>
           </tr>
           <tr height=60 style="mso-height-source:userset;height:45.0pt">
            <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
            height:45.0pt;width:442pt">PP8</td>
            <td class=xl1516105 width=145 style="border-top:none;border-left:none;
            width:109pt">'.$p30.'</td>
           </tr>
           <tr height=26 style="mso-height-source:userset;height:20.1pt">
           <td colspan=4 height=26 class=xl1016105 style="height:20.1pt">&nbsp;</td>
          </tr>
          <tr height=21 style="height:15.75pt">
           <td colspan=2 rowspan=2 height=43 class=xl1566105 style="border-bottom:1.0pt solid black;
           height:32.25pt">CALIFICACION FINAL</td>
           <td colspan=2 rowspan=2 class=xl1056105 style="border-right:1.0pt solid black;
           border-bottom:1.0pt solid black">'.
           (
           (
           ((($p17+$p18)/2)*16/100)+
           ((($p7+$p8+$p9+$p10)/4)*12/100)+
           ((($p1+$p2)/2)*10/100)+
           ((($p13+$p14)/2)*10/100)+
           ((($p11+$p12)/2)*10/100)+
           ((($p19+$p20)/2)*9/100)+
           ((($p5+$p6)/2)*9/100)+
           ((($p15+$p16)/2)*9/100)+
           ((($p21+$p22)/2)*8/100)+
           ((($p3+$p4)/2)*7/100)
           
           +
           (($p23+$p24+$p25+$p26+$p27+$p28+$p29+$p30)/8))/2).'</td>
          </tr>';
        }

 //if para los 7

 else if($p29!=0)
 {
     $Exp .='

     <tr height=60 style="mso-height-source:userset;height:45.0pt">
     <td colspan=2 height=60 class=xl926105 width=589 style="border-right:1.0pt solid black;
     height:45.0pt;width:442pt">PP1</td>
     <td class=xl1546105 width=145 style="border-left:none;width:109pt">'.$p23.'</td>
     <td rowspan=7 class=xl736105 width=145 style="border-bottom:1.0pt solid black;
     border-top:none;width:109pt">'.(($p23+$p24+$p25+$p26+$p27+$p28+$p29)/7).'</td>
    </tr>
    <tr height=60 style="mso-height-source:userset;height:45.0pt">
     <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
     height:45.0pt;width:442pt">PP2</td>
     <td class=xl1516105 width=145 style="border-top:none;border-left:none;
     width:109pt">'.$p24.'</td>
    </tr>
    <tr height=60 style="mso-height-source:userset;height:45.0pt">
     <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
     height:45.0pt;width:442pt">PP3</td>
     <td class=xl1516105 width=145 style="border-top:none;border-left:none;
     width:109pt">'.$p25.'</td>
    </tr>
    <tr height=60 style="mso-height-source:userset;height:45.0pt">
     <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
     height:45.0pt;width:442pt">PP4</td>
     <td class=xl1516105 width=145 style="border-top:none;border-left:none;
     width:109pt">'.$p26.'</td>
    </tr>
    <tr height=60 style="mso-height-source:userset;height:45.0pt">
     <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
     height:45.0pt;width:442pt">PP5</td>
     <td class=xl1516105 width=145 style="border-top:none;border-left:none;
     width:109pt">'.$p27.'</td>
    </tr>
    <tr height=60 style="mso-height-source:userset;height:45.0pt">
     <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
     height:45.0pt;width:442pt">PP6</td>
     <td class=xl1516105 width=145 style="border-top:none;border-left:none;
     width:109pt">'.$p28.'</td>
    </tr>
    <tr height=60 style="mso-height-source:userset;height:45.0pt">
     <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
     height:45.0pt;width:442pt">PP7</td>
     <td class=xl1516105 width=145 style="border-top:none;border-left:none;
     width:109pt">'.$p29.'</td>
    </tr>
    <tr height=26 style="mso-height-source:userset;height:20.1pt">
    <td colspan=4 height=26 class=xl1016105 style="height:20.1pt">&nbsp;</td>
   </tr>
   <tr height=21 style="height:15.75pt">
    <td colspan=2 rowspan=2 height=43 class=xl1566105 style="border-bottom:1.0pt solid black;
    height:32.25pt">CALIFICACION FINAL</td>
    <td colspan=2 rowspan=2 class=xl1056105 style="border-right:1.0pt solid black;
    border-bottom:1.0pt solid black">'.
    (
    (
    ((($p17+$p18)/2)*16/100)+
    ((($p7+$p8+$p9+$p10)/4)*12/100)+
    ((($p1+$p2)/2)*10/100)+
    ((($p13+$p14)/2)*10/100)+
    ((($p11+$p12)/2)*10/100)+
    ((($p19+$p20)/2)*9/100)+
    ((($p5+$p6)/2)*9/100)+
    ((($p15+$p16)/2)*9/100)+
    ((($p21+$p22)/2)*8/100)+
    ((($p3+$p4)/2)*7/100)
    
    +
    (($p23+$p24+$p25+$p26+$p27+$p28+$p29)/7))/2).'</td>
   </tr>';
 }
  //if para los 6

  else if($p28!=0)
  {
      $Exp .='
 
      <tr height=60 style="mso-height-source:userset;height:45.0pt">
      <td colspan=2 height=60 class=xl926105 width=589 style="border-right:1.0pt solid black;
      height:45.0pt;width:442pt">PP1</td>
      <td class=xl1546105 width=145 style="border-left:none;width:109pt">'.$p23.'</td>
      <td rowspan=6 class=xl736105 width=145 style="border-bottom:1.0pt solid black;
      border-top:none;width:109pt">'.(($p23+$p24+$p25+$p26+$p27+$p28)/6).'</td>
     </tr>
     <tr height=60 style="mso-height-source:userset;height:45.0pt">
      <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
      height:45.0pt;width:442pt">PP2</td>
      <td class=xl1516105 width=145 style="border-top:none;border-left:none;
      width:109pt">'.$p24.'</td>
     </tr>
     <tr height=60 style="mso-height-source:userset;height:45.0pt">
      <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
      height:45.0pt;width:442pt">PP3</td>
      <td class=xl1516105 width=145 style="border-top:none;border-left:none;
      width:109pt">'.$p25.'</td>
     </tr>
     <tr height=60 style="mso-height-source:userset;height:45.0pt">
      <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
      height:45.0pt;width:442pt">PP4</td>
      <td class=xl1516105 width=145 style="border-top:none;border-left:none;
      width:109pt">'.$p26.'</td>
     </tr>
     <tr height=60 style="mso-height-source:userset;height:45.0pt">
      <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
      height:45.0pt;width:442pt">PP5</td>
      <td class=xl1516105 width=145 style="border-top:none;border-left:none;
      width:109pt">'.$p27.'</td>
     </tr>
     <tr height=60 style="mso-height-source:userset;height:45.0pt">
      <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
      height:45.0pt;width:442pt">PP6</td>
      <td class=xl1516105 width=145 style="border-top:none;border-left:none;
      width:109pt">'.$p28.'</td>
     </tr>
     <tr height=26 style="mso-height-source:userset;height:20.1pt">
     <td colspan=4 height=26 class=xl1016105 style="height:20.1pt">&nbsp;</td>
    </tr>
    <tr height=21 style="height:15.75pt">
     <td colspan=2 rowspan=2 height=43 class=xl1566105 style="border-bottom:1.0pt solid black;
     height:32.25pt">CALIFICACION FINAL</td>
     <td colspan=2 rowspan=2 class=xl1056105 style="border-right:1.0pt solid black;
     border-bottom:1.0pt solid black">'.
     (
     (
     ((($p17+$p18)/2)*16/100)+
     ((($p7+$p8+$p9+$p10)/4)*12/100)+
     ((($p1+$p2)/2)*10/100)+
     ((($p13+$p14)/2)*10/100)+
     ((($p11+$p12)/2)*10/100)+
     ((($p19+$p20)/2)*9/100)+
     ((($p5+$p6)/2)*9/100)+
     ((($p15+$p16)/2)*9/100)+
     ((($p21+$p22)/2)*8/100)+
     ((($p3+$p4)/2)*7/100)
     
     +
     (($p23+$p24+$p25+$p26+$p27+$p28)/6))/2).'</td>
    </tr>';
  }
  //if para los 5

  else if($p27!=0)
  {
      $Exp .='
 
      <tr height=60 style="mso-height-source:userset;height:45.0pt">
      <td colspan=2 height=60 class=xl926105 width=589 style="border-right:1.0pt solid black;
      height:45.0pt;width:442pt">PP1</td>
      <td class=xl1546105 width=145 style="border-left:none;width:109pt">'.$p23.'</td>
      <td rowspan=5 class=xl736105 width=145 style="border-bottom:1.0pt solid black;
      border-top:none;width:109pt">'.(($p23+$p24+$p25+$p26+$p27)/5).'</td>
     </tr>
     <tr height=60 style="mso-height-source:userset;height:45.0pt">
      <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
      height:45.0pt;width:442pt">PP2</td>
      <td class=xl1516105 width=145 style="border-top:none;border-left:none;
      width:109pt">'.$p24.'</td>
     </tr>
     <tr height=60 style="mso-height-source:userset;height:45.0pt">
      <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
      height:45.0pt;width:442pt">PP3</td>
      <td class=xl1516105 width=145 style="border-top:none;border-left:none;
      width:109pt">'.$p25.'</td>
     </tr>
     <tr height=60 style="mso-height-source:userset;height:45.0pt">
      <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
      height:45.0pt;width:442pt">PP4</td>
      <td class=xl1516105 width=145 style="border-top:none;border-left:none;
      width:109pt">'.$p26.'</td>
     </tr>
     <tr height=60 style="mso-height-source:userset;height:45.0pt">
      <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
      height:45.0pt;width:442pt">PP5</td>
      <td class=xl1516105 width=145 style="border-top:none;border-left:none;
      width:109pt">'.$p27.'</td>
     </tr>
     <tr height=26 style="mso-height-source:userset;height:20.1pt">
     <td colspan=4 height=26 class=xl1016105 style="height:20.1pt">&nbsp;</td>
    </tr>
    <tr height=21 style="height:15.75pt">
     <td colspan=2 rowspan=2 height=43 class=xl1566105 style="border-bottom:1.0pt solid black;
     height:32.25pt">CALIFICACION FINAL</td>
     <td colspan=2 rowspan=2 class=xl1056105 style="border-right:1.0pt solid black;
     border-bottom:1.0pt solid black">'.
     (
     (
     ((($p17+$p18)/2)*16/100)+
     ((($p7+$p8+$p9+$p10)/4)*12/100)+
     ((($p1+$p2)/2)*10/100)+
     ((($p13+$p14)/2)*10/100)+
     ((($p11+$p12)/2)*10/100)+
     ((($p19+$p20)/2)*9/100)+
     ((($p5+$p6)/2)*9/100)+
     ((($p15+$p16)/2)*9/100)+
     ((($p21+$p22)/2)*8/100)+
     ((($p3+$p4)/2)*7/100)
     
     +
     (($p23+$p24+$p25+$p26+$p27)/5))/2).'</td>
    </tr>';
  }
    //if para los 4

    else if($p26!=0)
    {
        $Exp .='
   
        <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl926105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP1</td>
        <td class=xl1546105 width=145 style="border-left:none;width:109pt">'.$p23.'</td>
        <td rowspan=4 class=xl736105 width=145 style="border-bottom:1.0pt solid black;
        border-top:none;width:109pt">'.(($p23+$p24+$p25+$p26)/4).'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP2</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p24.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP3</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p25.'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP4</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p26.'</td>
       </tr>
       <tr height=26 style="mso-height-source:userset;height:20.1pt">
       <td colspan=4 height=26 class=xl1016105 style="height:20.1pt">&nbsp;</td>
      </tr>
      <tr height=21 style="height:15.75pt">
       <td colspan=2 rowspan=2 height=43 class=xl1566105 style="border-bottom:1.0pt solid black;
       height:32.25pt">CALIFICACION FINAL</td>
       <td colspan=2 rowspan=2 class=xl1056105 style="border-right:1.0pt solid black;
       border-bottom:1.0pt solid black">'.
       (
       (
       ((($p17+$p18)/2)*16/100)+
       ((($p7+$p8+$p9+$p10)/4)*12/100)+
       ((($p1+$p2)/2)*10/100)+
       ((($p13+$p14)/2)*10/100)+
       ((($p11+$p12)/2)*10/100)+
       ((($p19+$p20)/2)*9/100)+
       ((($p5+$p6)/2)*9/100)+
       ((($p15+$p16)/2)*9/100)+
       ((($p21+$p22)/2)*8/100)+
       ((($p3+$p4)/2)*7/100)
       
       +
       (($p23+$p24+$p25+$p26)/4))/2).'</td>
      </tr>';
    }
      //if para los 7

  else if($p25!=0)
  {
      $Exp .='
 
      <tr height=60 style="mso-height-source:userset;height:45.0pt">
      <td colspan=2 height=60 class=xl926105 width=589 style="border-right:1.0pt solid black;
      height:45.0pt;width:442pt">PP1</td>
      <td class=xl1546105 width=145 style="border-left:none;width:109pt">'.$p23.'</td>
      <td rowspan=3 class=xl736105 width=145 style="border-bottom:1.0pt solid black;
      border-top:none;width:109pt">'.(($p23+$p24+$p25)/3).'</td>
     </tr>
     <tr height=60 style="mso-height-source:userset;height:45.0pt">
      <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
      height:45.0pt;width:442pt">PP2</td>
      <td class=xl1516105 width=145 style="border-top:none;border-left:none;
      width:109pt">'.$p24.'</td>
     </tr>
     <tr height=60 style="mso-height-source:userset;height:45.0pt">
      <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
      height:45.0pt;width:442pt">PP3</td>
      <td class=xl1516105 width=145 style="border-top:none;border-left:none;
      width:109pt">'.$p25.'</td>
     </tr>
     <tr height=26 style="mso-height-source:userset;height:20.1pt">
     <td colspan=4 height=26 class=xl1016105 style="height:20.1pt">&nbsp;</td>
    </tr>
    <tr height=21 style="height:15.75pt">
     <td colspan=2 rowspan=2 height=43 class=xl1566105 style="border-bottom:1.0pt solid black;
     height:32.25pt">CALIFICACION FINAL</td>
     <td colspan=2 rowspan=2 class=xl1056105 style="border-right:1.0pt solid black;
     border-bottom:1.0pt solid black">'.
     (
     (
     ((($p17+$p18)/2)*16/100)+
     ((($p7+$p8+$p9+$p10)/4)*12/100)+
     ((($p1+$p2)/2)*10/100)+
     ((($p13+$p14)/2)*10/100)+
     ((($p11+$p12)/2)*10/100)+
     ((($p19+$p20)/2)*9/100)+
     ((($p5+$p6)/2)*9/100)+
     ((($p15+$p16)/2)*9/100)+
     ((($p21+$p22)/2)*8/100)+
     ((($p3+$p4)/2)*7/100)
     
     +
     (($p23+$p24+$p25)/3))/2).'</td>
    </tr>';
  }
    //if para los 7

    else if($p24!=0)
    {
        $Exp .='
   
        <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl926105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP1</td>
        <td class=xl1546105 width=145 style="border-left:none;width:109pt">'.$p23.'</td>
        <td rowspan=2 class=xl736105 width=145 style="border-bottom:1.0pt solid black;
        border-top:none;width:109pt">'.(($p23+$p24)/2).'</td>
       </tr>
       <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl946105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP2</td>
        <td class=xl1516105 width=145 style="border-top:none;border-left:none;
        width:109pt">'.$p24.'</td>
       </tr>
       <tr height=26 style="mso-height-source:userset;height:20.1pt">
       <td colspan=4 height=26 class=xl1016105 style="height:20.1pt">&nbsp;</td>
      </tr>
      <tr height=21 style="height:15.75pt">
       <td colspan=2 rowspan=2 height=43 class=xl1566105 style="border-bottom:1.0pt solid black;
       height:32.25pt">CALIFICACION FINAL</td>
       <td colspan=2 rowspan=2 class=xl1056105 style="border-right:1.0pt solid black;
       border-bottom:1.0pt solid black">'.
       (
       (
       ((($p17+$p18)/2)*16/100)+
       ((($p7+$p8+$p9+$p10)/4)*12/100)+
       ((($p1+$p2)/2)*10/100)+
       ((($p13+$p14)/2)*10/100)+
       ((($p11+$p12)/2)*10/100)+
       ((($p19+$p20)/2)*9/100)+
       ((($p5+$p6)/2)*9/100)+
       ((($p15+$p16)/2)*9/100)+
       ((($p21+$p22)/2)*8/100)+
       ((($p3+$p4)/2)*7/100)
       
       +
       (($p23+$p24)/2))/2).'</td>
      </tr>';
    }
    else
    {
        $Exp .='
   
        <tr height=60 style="mso-height-source:userset;height:45.0pt">
        <td colspan=2 height=60 class=xl926105 width=589 style="border-right:1.0pt solid black;
        height:45.0pt;width:442pt">PP1</td>
        <td class=xl1546105 width=145 style="border-left:none;width:109pt">'.$p23.'</td>
        <td class=xl736105 width=145 style="border-bottom:1.0pt solid black;
        border-top:none;width:109pt">'.$p23.'</td>
       </tr>
       <tr height=26 style="mso-height-source:userset;height:20.1pt">
       <td colspan=4 height=26 class=xl1016105 style="height:20.1pt">&nbsp;</td>
      </tr>
      <tr height=21 style="height:15.75pt">
       <td colspan=2 rowspan=2 height=43 class=xl1566105 style="border-bottom:1.0pt solid black;
       height:32.25pt">CALIFICACION FINAL</td>
       <td colspan=2 rowspan=2 class=xl1056105 style="border-right:1.0pt solid black;
       border-bottom:1.0pt solid black">'.
       (
       (
       ((($p17+$p18)/2)*16/100)+
       ((($p7+$p8+$p9+$p10)/4)*12/100)+
       ((($p1+$p2)/2)*10/100)+
       ((($p13+$p14)/2)*10/100)+
       ((($p11+$p12)/2)*10/100)+
       ((($p19+$p20)/2)*9/100)+
       ((($p5+$p6)/2)*9/100)+
       ((($p15+$p16)/2)*9/100)+
       ((($p21+$p22)/2)*8/100)+
       ((($p3+$p4)/2)*7/100)
       
       +
       ($p23))/2).'</td>
      </tr>';
    
    }
    

    $Exp .='
 <tr height=22 style="height:16.5pt">
 </tr>
 <tr height=22 style="height:16.5pt">
  <td rowspan=6 height=128 class=xl906105 style="height:96.0pt;border-top:none">&nbsp;</td>
  <td colspan=3 class=xl1456105 style="border-right:1.0pt solid black;
  border-left:none">COMENTARIOS DEL EVALUADOR</td>
 </tr>
 <tr height=21 style="page-break-before:always;height:15.75pt">
  <td colspan=3 rowspan=8 height=170 class=xl1096105 style="border-right:1.0pt solid black;
  border-bottom:1.0pt solid black;height:127.5pt">'.$comen.'</td>
 </tr>
 <tr height=21 style="height:15.75pt">
 </tr>
 <tr height=21 style="height:15.75pt">
 </tr>
 <tr height=21 style="height:15.75pt">
 </tr>
 <tr height=22 style="height:16.5pt">
 </tr>
 <tr height=21 style="height:15.75pt">
  <td height=21 class=xl1116105 style="height:15.75pt">FIRMA:</td>
 </tr>
 <tr height=21 style="height:15.75pt">
  <td height=21 class=xl1166105 style="height:15.75pt">'.$Bnombre.'</td>
 </tr>
 <tr height=22 style="height:16.5pt">
  <td height=22 class=xl1176105 style="height:16.5pt">C.C '.$Bcedula.'</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style="display:none">
  <td width=314 style="width:236pt"></td>
  <td width=275 style="width:206pt"></td>
  <td width=145 style="width:109pt"></td>
  <td width=145 style="width:109pt"></td>
 </tr>
 <![endif]>
</table>

</div>

</body>

';
return $Exp;
}