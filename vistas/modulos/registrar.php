
<?php
include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("config/conexion.php");//Contiene de conexion a la base de datos


include "style.php";

echo '<a href="profile.php?action=administrar"  class="but">Volver</a>';
?>



<form method="POST">

    <h1 class="titulo"> REGISTRAR PERSONAL </h1>
    <br>

        

        <p class="center">Debe completar todos los datos para poder registrarlos</p><br><br>

	<hr class="hr">
	<div class="section">
    <h3 class="sex">DATOS DE REGISTRO:</h3>


      <br>


            
        
            <!--  cedula  -->


			<p class="bren";>CEDULA:  </p>
            <input class="field" type="text" id="cedula" name="cedula" placeholder="Solo Numeros">
			
            <br>
            <br>

            <!--  celular -->


			<p class="bren";>NOMBRE:  </p>
            <input class="field" type="text" id="nombre" name="nombre" placeholder="Nombre Completo">

            <br>
            <br>

            <!--  grupo -->


			<p class="bren";>DEPARTAMENTO - AREA:  </p>
            <input class="field" type="text" id="grupo" name="grupo" placeholder="Grupo-Area">

            <br>
            <br>

            <!--  cargo -->


			<p class="bren";>CARGO:  </p>
            <input class="field" type="text" id="cargo" name="cargo" placeholder="Cargo que ocupa">



            <br><br><br>

            <p class="bren";>La contraseña es la misma cedula, para ingresar</p>


            <br>
			<br>
            <br>
            </div>
            <br><hr class="hr"><br/>


                        
                            <!--  Enviar  -->

                            <br>    
                        

                            </div>

                                <input type="submit" name="registrar">
                               
                            

    

    </form>

    <?php 
        include "registrar/reg.php";
    ?>
