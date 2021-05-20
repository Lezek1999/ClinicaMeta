<?php
// Estableciendo la conexion a la base de datos
include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("config/conexion.php");//Contiene de conexion a la base de datos
 
session_start();// Sesion iniciada
?>


<style>

*{
	padding:0;
	margin:0;
	font-family: : century gothic;
	text-align: center;
}
body{
padding:0;
margin:0;
width:100%; 
background: #00c6ff;  /* fallback for old browsers */
background:  url("img/fd.jpg");  /* Chrome 10-25, Safari 5.1-6 */
background:  url("img/fd.jpg"); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
height: 800px;
background-position: center;

position: relative;
font-family: 'Signika', sans-serif;
}


. ok {
	text-align: center;
	width: 100% ;
	padding:  12px ;
	background-color: #4e8;
	color : #fff
}
. bad {
	text-align: center;
	width: 100% ;
	padding: 12px ;
	background-color:  #a22 ;
	color: #fff


}
    
h5 {
  font-family: 'Oswald', sans-serif;
  color: #black;
  font-weight: normal;
  font-size: 30pt;
  text-align: center;
}
</style>

<?php

include "eva.php";

?>	

