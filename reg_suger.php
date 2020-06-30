<?php 
	include("modulos/conectar.php");
  $link=Conectarse();
  $fec_liq = date("Y-m-d H:i:s");
  $res=@mysqli_query($link, "set names utf8");
  $row=@mysqli_fetch_array($res);
  $sq="insert into mensajes (nom_ape, email, fec_mens, mensaje) values('".$_POST["txtnomape"]."','".$_POST["txtemail"]."','".$fec_liq."','".$_POST["txtmensaje"]."')";
  // echo $sq;
  // $res=mysqli_query($link, $sq);

  if (!mysqli_query($link, $sq)) {
    header("location:sugerencias.php?deny=1");
    exit();
   } 

   header("location:sugerencias.php?msn=1");

?>