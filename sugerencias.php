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
    
    <body onload="accion();">
        
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

          <?php include ("paneles.php"); ?>
          <?php include ("header.php"); ?>
          <?php include ("nav.php"); ?>

        <section id="contenedor">
          <?php //include ("contenedor.php"); ?>
          <?php //include ("nuevosprod.php"); ?>

          <?php  if ($_GET['msn']==1) { ?>
          <div id='msn_box_ok'>
              Su mensaje se envió con exito!! Gracias por la sugerencia
          </div>
          <?php } ?> 

          <section id="msn_block">
            <div id="cont_text">
              <div id="tit_suger">Sugerencias</div>
              
              <form name="frm_suger" action="reg_suger.php" method="post" accept-charset="utf-8" onsubmit="return valida_suger();">

                <div class="formsuger">
                 
                  <label>
                    <div class="nom"></div>
                    Nombre y Apellidos:
                  </label>
                  <p><input type="text" name="txtnomape"></p>
                  <br><br>
                  <label>
                    <div class="email"></div>
                    Correo electrónico:
                  </label>
                  <p><input type="text" name="txtemail"></p>
                  <br><br>
                  <label>
                    <div class="msn"></div>
                    Correo electrónico:
                  </label>
                  <p><textarea name="txtmensaje" cols="50" rows="8"></textarea></p>
                  <br><br>
                  <div id="botones">
                    <input type="submit" name="btngrabar" value=" Grabar " class="btnblue">&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" name="btngrabar" value=" Cancelar " onclick="javascript: location.href='index.php';" class="btnblue">
                  </div>
             
                  
                </div>

              </form> 
            
            </div>
          </section>
        </section>
        
          <!-- <aside> esto es el aside </aside> -->
          <?php include ("footer.php"); ?>
          <br><br>
          <?php include ("config_final.php"); ?>

    </body>
</html>
