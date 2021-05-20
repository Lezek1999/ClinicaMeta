<?php

require_once('mpdf/vendor/autoload.php');

//Html Tabla 
require_once('tablap.php');

//css
$css = file_get_contents('sty_tabla.css');

//base de datos
require_once('basedatos.php');

$mpdf = new \Mpdf\Mpdf
([
'format' => 'Legal'
]);

$Exp = getExp
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
);

$mpdf->writeHtml($css,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($Exp,\Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output("EVALUACION DE DESEMPEÑO.pdf","I");