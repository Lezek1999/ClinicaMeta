
<?php
// Estableciendo la conexion a la base de datos
include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("config/conexion.php");//Contiene de conexion a la base de datos
 
session_start();// Iniciando Sesion
// Guardando la sesion
$user_check=$_SESSION['login_user_sys'];
// SQL Query para completar la informacion del usuario
$ses_sql=mysqli_query($con, "select cedula from personas where cedula='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['cedula'];
if(!isset($login_session))
{
mysqli_close($con); // Cerrando la conexion
header('Location: index.php'); // Redirecciona a la pagina de inicio
}

$consulta = "SELECT cedula, nombre FROM personas WHERE cedula = $login_session";
$resultado= mysqli_query($con,$consulta);

if($resultado)
{
    while($row = $resultado->fetch_array())
    {
        $nombre = $row['nombre'];
        $cedula = $row['cedula'];
        //$grupo = $row['grupo'];
    }

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

h1,h2,h3,h4,h5,h6{
    font-family: 'Oswald', sans-serif;
	font-weight:200	;
	text-transform:uppercase;
	text-decoration:none;
	color:#16151b;
	letter-spacing:1px;
    display:inline-block;
    font-size: 3em;
    text-align: center;
    margin: 1.5em 0em 1em 0em;
}

ul.but {
  padding: 0;
  width: 100%;
}

li.but {
  display: inline;
}

a.but {
  outline: none;
  text-decoration: none;
  display: inline-block;
  width: 19.5%;
  margin-right: 0.625%;
  text-align: center;
  line-height: 3;
  color: white;
}
a.but{
	font-family: 'Oswald', sans-serif;
	font-weight:500;
	text-transform:uppercase;
	text-decoration:none;
	color: white;
	margin:0 20px;
	font-size:16px;
	letter-spacing:1px;
	position:relative;
	display:inline-block;
	}

li:last-child a.but {
  margin-right: 0;
}

a:link.but, a:visited.but, a:focus.but {
background: #36D1DC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #5B86E5, #36D1DC); 
}

a:hover.but {
  background: gray;
}

a:active.but {
  background: black;
  color: white;
}

	
h3{
		font-size:20px;
	}
	
	
	caption {
		background-color: rgb(255, 255, 255);
		text-align:center;
	}
	


table, th, td, caption {
		  margin-left: auto; 
		  margin-right: auto;
		border: 2px solid black;
		border-collapse: collapse;
		background-color:rgba(255, 255, 255, 0.25) ;
		color: rgba(255, 255, 255, 0.25) ;
	  }


form{
	padding: 50px 20px ;
	background-color: #ededed ;
	margin: 80px;
	margin-top:70px ;
	padding-top : 28px ;
	margin-bottom: 30px;
}

p{
	text-align: center;
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
  font-size: 65px;
  text-align: center;
}
</style>

    
  <body>
    <p>
        <h5>Bienvenid@ <?php echo $nombre; ?></h5>
    </p>
  </body> 
 
    <?php

	if($cedula=="1121969652" || $cedula=="1006823012")
	{
		echo '<a href="profile.php?action=administrar"  class="but">Administrar</a>';
	}

	

	include "inicio/nota.php";



	?>

	<div>
    <h2> <?php echo "INFORMACION DE EVALUACIÓN"; ?> </h2>
    <div>

	<p>

		<table style="width:50%" class="center">	
            <tr>
				<td><h3> NOTA FINAL: </h3> </td>
                <td><h3><?php echo $Exp; ?><h3></td>
            </tr>
            <tr>
				<td><h3> TOTAL EVALUADORES: </h3> </td>
                <td ><h3> <?php echo $num; ?>/4 </h3></td>
            </table>
	</p>
	</div>
    </div>
	<?php
} 

?>




