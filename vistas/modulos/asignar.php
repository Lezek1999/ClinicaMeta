<?php
include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("config/conexion.php");//Contiene de conexion a la base de datos


include "style.php";

echo '<a href="profile.php?action=administrar"  class="but">Volver</a>';
?>

<form method="POST">

    <h1 class="titulo"> ASIGNAR PERSONAL A EVALUAR </h1>
    <br>

        <p class="center">Debe completar todos los datos para poder registrarlos</p><br><br>

	<hr class="hr">
	<div class="section">
    <h3 class="sex">ASIGNACION DE EVALUADOR</h3>


      <br>


            
        
            <!--  cedula  -->


			<p class="bren";>[B]CEDULA EVALUADOR:  </p>
            <input class="field" type="text" id="id_B" name="id_B" placeholder="Ingrese una B antes de la cedula">
			
            <br>
            <br>

            <!--  celular -->


			<p class="bren";>[A]CEDULA PERSONAL A EVALUAR:  </p>
            <input class="field" type="text" id="E1" name="E1" placeholder="Ingrese una A antes de la cedula">
            <input class="field" type="text" id="E2" name="E2" placeholder="Ingrese una A antes de la cedula">
            <input class="field" type="text" id="E3" name="E3" placeholder="Ingrese una A antes de la cedula">
            <p class="bren";>[A]CEDULA JEFE A EVALUAR:  </p>
            <input class="field" type="text" id="jefe" name="jefe" placeholder="Ingrese una A antes de la cedula">
            




            <br><br><br>



            <br>
			<br>
            <br>
            </div>
            <br><hr class="hr"><br/>


                        
                            <!--  Enviar  -->

                            <br>    
                        

                            </div>

                                <input type="submit" name="asignar">
                               
                            

    

    </form>

    <?php 
        include "asignar/asi.php";
    ?>