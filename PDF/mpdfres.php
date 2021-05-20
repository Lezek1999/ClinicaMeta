<?php

require_once('mpdf/vendor/autoload.php');

//Html Tabla 
require_once('tablare.php');

//css
$css = file_get_contents('sty_tabla.css');

//base de datos
require_once('basedatosre.php');

$mpdf = new \Mpdf\Mpdf
([
'format' => 'Legal'
]);

$Exp = getExp
(
$num,
$cedula,
$nombre,
$grupo,
$cargo,
$Rp1,
$Rp2,
$Rp3,
$Rp4,
$Rp5,
$Rp6,
$Rp7,
$Rp8,
$Rp9,
$Rp10,
$Rp11,
$Rp12,
$Rp13,
$Rp14,
$Rp15,
$Rp16,
$Rp17,
$Rp18,
$Rp19,
$Rp20,
$Rp21,
$Rp22,
$Rp23,
$Rp24,
$Rp25,
$Rp26,
$Rp27,
$Rp28,
$Rp29,
$Rp30,
$Rp31,
$Rp32,
$comen
);

$mpdf->writeHtml($css,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($Exp,\Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output("EVALUACION DE DESEMPEÑO.pdf","I");