<?php

class controladores
{

public static function plantilla()
	{
		include "vistas/template.php";
	}

public static function enlacesPaginasControlador()
	{
		if(isset($_GET["action"]))
		{
			$enlacesControlador=$_GET["action"];
		}
		else
		{
			$enlacesControlador="profile";
		}
		
		//echo $enlacesControlador;

		$respuesta=EnlacesPaginas::enlacesPaginasModelo($enlacesControlador);
		include $respuesta;


		
	}
}

?>
