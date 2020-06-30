<?php 
session_start();
if (!isset($_SESSION["s_cod"]))
{
	header("location: ../../");
	exit;
}
if (!isset($_SESSION["s_tipo"]))
{
	header("location: ../../");
	exit;
}
if (!isset($_SESSION["s_solonom"]))
{
	header("location: ../../");
	exit;
}
if (!isset($_SESSION["s_nombreC"]))
{
	header("location: ../../");
	exit;
}

include("../conectar.php");
$link=Conectarse();

$consul="select dni from usuario where cod_usuario=".$_SESSION["s_cod"];
// echo $consul;
$rsa=mysqli_query($link, $consul);
$rwa=mysqli_fetch_array($rsa);

$dni = $rwa[0];

$consul="select clave from usuario where dni=".$dni;
// echo $consul;
$rs01=mysqli_query($link, $consul);
$rw1=mysqli_fetch_array($rs01);

$consul="select clave from usuario_temporal where dni=".$dni;
// echo $consul;
$rs02=mysqli_query($link, $consul);
$rw2=mysqli_fetch_array($rs02);

if ($rw1[0] == md5($rw2[0])) {
	header("location: ../../cpass.php");
	exit;
	// echo "hanntronico";
}

?>