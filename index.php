<?php 
session_start();
if (isset($_SESSION["s_cod"]))
{
  if (isset($_SESSION["s_tipo"]))  
    { 
     if($_SESSION["s_tipo"]==1) 
      {  
        header("location: modulos/admin/");
        exit;
      }elseif ($_SESSION["s_tipo"]==2) {
        header("location: modulos/usuario/principal.php");
        exit;
      }
    }
}


include("modulos/conectar.php");
$link=Conectarse();
?>

<?php include ("head.php"); ?>
    
    <body <?php 
      // if ($_GET["deny"]==1 || $_GET["deny"]==2 || $_GET["deny"]==3 || $_GET["deny"]==4) 
      //     { echo "onload='carga_registro();'";}

      // if ($_GET["deny"]==6) {
      //       echo "onload='carga_msn();'";}
      
      // if ($_GET["deny"]==5) {
      //       echo "onload='carga_forgot();'";}     
  ?> >
        

          <?php include ("paneles.php"); ?>
          <?php include ("header.php"); ?>
          <?php include ("nav.php"); ?>

        <section class="container" id="contenedor" style="border-radius: 0.75em;" >
          <?php include ("contenedor.php"); ?>
          <?php //include ("nuevosprod.php"); ?>
        </section>
        
          <!-- <aside> esto es el aside </aside> -->
          <?php include ("footer.php"); ?>
          <?php include ("config_final.php"); ?>

    </body>
</html>
