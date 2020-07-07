<?php

function Conectarse()
{
	if (!($enlace=mysqli_connect("localhost","mercados_user2020","*m3rc@d05*")))
	{
	echo "ERROR EN LA CONEXION";
	exit();
	}
	if (!mysqli_select_db("mercados_virtualstore",$enlace))
	{
	echo "EEROR EN LA CONEXION BD";
	exit();
	}
return $enlace;
}
?>
