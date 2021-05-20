
<?php

// Estableciendo la conexion a la base de datos
include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("config/conexion.php");//Contiene de conexion a la base de datos
 
session_start();// Sesion iniciada

$user_check=$_SESSION['login_user_sys']; // Sesion iniciada
// SQL Query para completar la informacion del usuario

$ses_sql=mysqli_query($con, "select cedula from personas where cedula='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['cedula'];

if(!isset($login_session))
{
mysqli_close($con); // Cerrando la conexion
header('Location: index.php'); // Redirecciona a la pagina de inicio
}

$cargo = "Dato no Actualizado";
$celular = "Dato no Actualizado";
$correo = "Dato no Actualizado";
$direccion = "Dato no Actualizado";
$edad= "Dato no Actualizado";
$genero = "Dato no Actualizado";

$auto_sql=mysqli_query($con, "SELECT PE.cedula,nombre, grupo,cargo,celular,EV.correo,direccion, edad, genero FROM personas PE, evaluado EV WHERE PE.cedula=EV.cedula and PE.cedula = '$login_session'");
$row = mysqli_fetch_assoc($auto_sql);
$cedula = $row['cedula'];
$nombre = $row['nombre'];
$grupo = $row['grupo'];
$cargo = $row['cargo'];

if( strlen ($row['celular'])>= 1 ||
	strlen ($row['correo'])>= 1 ||
	strlen ($row['direccion'])>= 1 ||
	strlen ($row['edad'])>= 1 ||
	strlen ($row['genero'])>= 1)
{
$celular = $row['celular'];
$correo = $row['correo'];
$direccion = $row['direccion'];
$edad = $row['edad'];
$genero = $row['genero'];
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
	
	
	input {
		width: calc(15% - 20px);
		padding: 9px;
		margin: auto;
		margin-top:12px ;
		font-size: 16px
	}
	
	input [type='submit'] { 
		width: calc(50% - 20px);
		padding: 9px;
		margin: auto;
		margin-top:12px ;
		font-size: 16px
	}
	
	input[type='number']:focus {
		border: 3px solid #555;
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
		</style>



    <div>
    <h2> <?php echo "DATOS PERSONALES"; ?> </h2>
    <div>

    <p>

		<table style="width:50%" class="center">	
            <tr>
				<td><h3> Nombre: </h3> </td>
                <td><h3><?php echo $nombre; ?><h3></td>
            </tr>
            <tr>
				<td><h3> Cedula: </h3> </td>
                <td ><h3><?php echo $cedula; ?><h3></td>
            </tr>
			<tr>
				<td><h3> Grupo: </h3> </td>
                <td ><h3><?php echo $grupo; ?><h3></td>
            </tr>
			<tr>
				<td><h3> Cargo: </h3> </td>
                <td ><h3><?php echo $cargo; ?><h3></td>
            </tr>
			<tr>
				<td><h3> Celular: </h3> </td>
                <td ><h3><?php echo $celular; ?><h3></td>
            </tr>
			<tr>
				<td><h3> Correo: </h3> </td>
                <td ><h3><?php echo $correo; ?><h3></td>
            </tr>
			<tr>
				<td><h3> Direccion: </h3> </td>
                <td ><h3><?php echo $direccion; ?><h3></td>
            </tr>
			<tr>
				<td><h3> Edad: </h3> </td>
                <td ><h3><?php echo $edad; ?><h3></td>
            </tr>
			<tr>
				<td><h3> Genero: </h3> </td>
                <td ><h3><?php echo $genero; ?><h3></td>
            </tr>

            </table>

    </p>
    </div>
    </div>

	<br><br></br>

	
	<?php echo '<a href="profile.php?action=actualizar"  class="but">Actualizar Datos</a>';?>
	





