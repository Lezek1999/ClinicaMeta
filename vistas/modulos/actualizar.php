
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



	$auto_sql=mysqli_query($con, "SELECT PE.cedula FROM personas PE, evaluado EV WHERE PE.cedula=EV.cedula and PE.cedula = '$login_session'");
    $row = mysqli_fetch_assoc($auto_sql);
	$cedula = $row['cedula'];

	include "style.php";

    ?>

<body>

    

    <form method="POST">

    <h1 class="titulo"> ACTUALIZACION </h1>
    <br>

        

        <p class="center">Debe completar todos los datos para poder actualizarlos</p><br><br>

	<hr class="hr">
	<div class="section">
    <h3 class="sex">DATOS PERSONALES:</h3>


      <br>
 
        
    
            <!--  celular -->


			<p class="bren">CELULAR:  </p>
            <input class="field" type="text" id="celular" name="celular" placeholder="Celular">

			<br>
			<br>

			<!--  correo -->


			<p class="bren">CORREO:  </p>
            <input class="field" type="email" id="correo" name="correo" placeholder="Correo">

			<br>
			<br>

			<!--  direccion -->


			<p class="bren">DIRECCION:  </p>
            <input class="field" type="text" id="direccion" name="direccion" placeholder="Direccion">

			<br>
			<br>

			<!--  edad -->


			<p class="bren">EDAD:  </p>
            <input class="field" type="text" id="edad" name="edad" placeholder="Edad">

			<br>
			<br>

			<!--  genero -->

			<p class="bren">GENERO:

			<br>
			<br>

            <label><input type="radio" name="genero" value= "M"> 
			Masculino(M)
			</label><br>

			<label><input type="radio" name="genero" value= "F"> 
			Femenino(F)
			</label><br>

			<label><input type="radio" name="genero" value= "X"> 
			Otro(X)
			</label><br>

			</p>

			<br>
			<br>

            <br>
			<br>
            <br>
            </div>
            <br><hr class="hr"><br/>




                        
                            <!--  Enviar  -->

                            <br>    
                        

                            </div>

                                <input type="submit" name="actualizar">
                               
                            

    

    </form>

    <?php 
        include "actualizar/act.php";
    ?>


</body>
</html> 





