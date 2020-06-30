<?php
session_start();
// include("clases/conex.php");
// $cn=new conex();
include("modulos/conectar.php");
$link=Conectarse();
// $res=mysqli_query("select * from producto where cod_producto=38",$link);
// $row=mysqli_fetch_array($res);


$login=htmlentities($_POST["uscorreo"]);
$clave=md5($_POST["uspassword"]);

// echo  $row[0].' '.$row[1].' '.$row[2].' '.$login.' '.$_POST["uspassword"].' '.$clave;
// exit();

// $login=htmlentities($_POST["login"]);
// $clave=md5($_POST["clave"]);
// $ima=$_POST["ima"];

// if (md5($_POST["codigo"])!=$_SESSION["valorimagen"])
// {
// 	header("location: index.php?deny=0");
// 	exit;
// }

$res=mysqli_query($link, "select * from usuario_temporal where correo='$login' and estado=1");
$numfila = mysqli_num_rows($res);
// cod_usuario	login	clave	nombre	apellidos	dni	direccion	telefono	correo	cod_nivel
if ($numfila<>0){
	$res=@mysqli_query($link, "set names utf8");
    $row=@mysqli_fetch_array($res);
	$consul="select * from usuario_temporal where correo='$login' and estado=1";
	$resu=mysqli_query($link, $consul);
	$rowu=mysqli_fetch_array($resu);
	// echo $rowu[0]." ".$rowu[1]." ".$rowu[2]." ".$rowu[3]." ".$rowu[4]." ".$rowu[5]." ".$rowu[6]." ".$rowu[7]." ".$rowu[8]." ".$rowu[9];
// cod_usuario	login	clave	nombre	apellidos	dni	direccion	telefono	correo	cod_nivel

	$res=@mysqli_query($link, "set names utf8");
    $row=@mysqli_fetch_array($res);
	$sql="insert into usuario (login, clave, nombre, apellidos, dni, direccion, telefono, correo, cod_nivel, estado) 
					values ('".$rowu[1]."', '".
							   md5($rowu[2])."','".
							   $rowu[3]."', '".
							   $rowu[4]."', '".
							   $rowu[5]."', '".
							   $rowu[6]."', '".
							   $rowu[7]."', '".
							   $rowu[8]."',3,1)";
	// echo "<br>";
	// echo $sql;
	// echo $rowu[0];	
	// exit();
	
	$resu=mysqli_query($link, $sql);

	$res=@mysqli_query($link, "set names utf8");
    $row=@mysqli_fetch_array($res);
    
	$sql1="UPDATE usuario_temporal SET estado = 0 WHERE cod_usuario =".$rowu[0]." LIMIT 1" ;
	$resu=mysqli_query($link, $sql1);

	// $rowu=mysqli_fetch_array($resu);

}



// if (md5($_POST["codigo"])!=$_SESSION["valorimagen"])
// {
// 	header("location: index.php?deny=0");
// 	exit;
// }
	
	// cod_usuario	login	clave	nombre	apellidos	dni	direccion	telefono	correo	cod_nivel
	

	$res=mysqli_query($link, "select * from usuario where correo='$login'");
	if (mysqli_num_rows($res)==0)
	{
		header("location: index.php?deny=6");
		exit;	
	}
	$row=mysqli_fetch_array($res);
	$codu=$row[0];
	
	$res=mysqli_query($link, "select * from usuario where cod_usuario='$codu' and clave='$clave' and estado=1");
	if (mysqli_num_rows($res)>0)
	{
		$row=mysqli_fetch_array($res);

		$_SESSION["s_cod"]=$row[0];
		$_SESSION["s_tipo"]=$row["cod_nivel"];
		$_SESSION["s_solonom"]=htmlentities($row["nombre"]);
		$_SESSION["s_nombreC"]=htmlentities($row["nombre"]." ".$row["apellidos"]);
		$_SESSION["s_correousu"]=htmlentities($row["correo"]);

		// echo $_SESSION["s_cod"]." ".$_SESSION["s_tipo"]." ".$_SESSION["s_nombreC"];
		// exit();
		

		if ($row["cod_nivel"]==1)
		{
			header("location: modulos/admin/main_admin.php");
			exit;
		}

		if ($row["cod_nivel"]==2)
		{
			header("location: modulos/admin/main_admin.php");
			exit;
		}
		

		if ($row["cod_nivel"]==3)
		{
			// $id=$row[0];
			// $res2=mysqli_query("select * from admin where adm_codigo='$id'",$link);
			// $row2=mysqli_fetch_array($res2);
			
			// $_SESSION["s_nivel"]=$row2[3];
			// $_SESSION["s_fac"]=$row2[1];
			// $_SESSION["s_esc"]=$row2[2];
			// $_SESSION["s_sede"]=$row2["sed_codigo"];
			// $esc=$row2[2];

			header("location: modulos/usuario/principal.php");			
			exit;
		}
	}
	else
	{
		header("location: index.php?deny=6");
		exit;	
	}
exit;
?>