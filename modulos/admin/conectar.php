<?php

function Conectarse()
{
	if (!($enlace=mysqli_connect("localhost","root","*274053*")))
	{
	echo "ERROR EN LA CONEXION";
	exit();
	}
	// if (!mysql_select_db("bdtienda",$enlace))
	if (!mysqli_select_db($enlace, "bdredeshard"))
	{
	echo "EEROR EN LA CONEXION BD";
	exit();
	}
return $enlace;
}
?>
