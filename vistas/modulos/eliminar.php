<?php
include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("config/conexion.php");//Contiene de conexion a la base de datos


include "style.php";

echo '<a href="profile.php?action=administrar"  class="but">Volver</a>';

?>
<form method="POST">

        <h1 class="titulo">Eliminar Empleados</h1>
        <div class="section">
        <h3>Eliminar por cedula: </h3>
        <input class="field" type="text" ID="ID" name="ID" placeholder="Ingrese cedula sin puntos">

        <br>

        <input type="submit" name="eliminar">
        <br>
        <br>
        </div>
</form>

<?php

include "eliminar/eli.php";

?>

