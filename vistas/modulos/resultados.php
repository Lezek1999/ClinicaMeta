<?php
include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("config/conexion.php");//Contiene de conexion a la base de datos


include "style.php";

echo '<a href="profile.php?action=administrar"  class="but">Volver</a>';
?>

<form method="POST">

       <h1 class="titulo">Resultados de Evaluacion</h1>
       <div class="section">
        <h3>Resultados por Cedula:  </h3>
        <input class="field" type="text" ID="id_A" name="id_A" placeholder="Ingrese una A antes de la cedula">

        <br>
        <br>

        <input type="submit" name="calcular">
        <br>
        <br>
        </div>
</form>

<div class="section">
<br>

<?php

include "resultados/res.php";

?>
<br><br><br>
</div>