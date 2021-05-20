<?php

class EnlacesPaginas
{
	public static function enlacesPaginasModelo($enlacesModelo)
	{
		$modelo="";

		if ($enlacesModelo=="inicio"||
			$enlacesModelo=="perfil"||
			$enlacesModelo=="evaluar"||
			$enlacesModelo=="exportar"||
			$enlacesModelo=="actualizar"||
			$enlacesModelo=="administrar"||
			$enlacesModelo=="registrar"||
			$enlacesModelo=="buscar"||
			$enlacesModelo=="asignar"||
			$enlacesModelo=="eliminar"||
			$enlacesModelo=="resultados"||
			$enlacesModelo=="registrados"||
			$enlacesModelo=="cerrar")
		{
			$modelo = "vistas/modulos/".$enlacesModelo.".php";	
		}
		else if($enlacesModelo=="profile")
		{
			$modelo = "vistas/modulos/inicio.php";
		}

		return $modelo;
	}
}

?>