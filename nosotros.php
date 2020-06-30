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
      if ($_GET["deny"]==1 || $_GET["deny"]==2 || $_GET["deny"]==3 || $_GET["deny"]==4) 
          {echo "onload='carga_registro();'";} ?> >
        
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

          <?php include ("paneles.php"); ?>
          <?php include ("header.php"); ?>
          <?php include ("nav.php"); ?>

        <section id="contenedor">
          <?php //include ("contenedor.php"); ?>
          <?php //include ("nuevosprod.php"); ?>
          <section id="msn_block">
            <div id="cont_text" style="padding:10px;">
            <fieldset>
                      
            <h2>¿Por qué elegirnos?</h2>
            <div style="padding:0px 40px;">
              <p align="justify">
                <ol>
                    <li>Por su comodidad: El mercado usted lo hace desde su casa y evitando así las largas colas, bolsas pesadas y perder tiempo valioso.</li>
                    <li>Darle valor a su inversión: usted recibe un servicio personalizado de acuerdo a su gusto y respetando cada una de las especificaciones que usted exige por producto, sin pagar un sol de más.</li>
                    <li>Contrato de garantía: al contratar nuestro servicio nosotros nos vemos con la firme obligación de que si alguno de nuestros productos no cumple con sus expectativas se lo cambiamos inmediatamente sin consto alguno.</li>
                    <li>Surtido competitivo: pues siendo los supermercados nuestro principal contendor poseemos una gama completa de productos de: Primera necesidad, enlatados, licores, cigarros y demás, para satisfacer sus necesidades en todos los niveles con los mejores productos.</li>
                </ol>
              </p>

              <p align="justify">
                <h1> Quienes somos:</h1>
                El mercadito virtual es una empresa Chiclayana creada con el fin de que usted haga sus compras desde la comodidad de su hogar, oficina, evitando así las largas colas donde se pierde tiempo que nosotros consideramos valioso por eso esta alternativa te da la posibilidad de hacer tus compras con un clic y son llevadas a la puerta de tu casa y lo mejor es la calidad de nuestros productos y nuestros excelentes precios.</p>
              <p align="justify">
                <h1>Misión</h1>
                Satisface la necesidad de nuestros clientes entregándoles los mejores productos y en la puerta de su casa en el menor tiempo posible.
              </p>
              <br>
              <p align="justify">
                <h1>Visión</h1>
                Ser la empresa líder del mercado Chiclayano donde no solo abastezcamos de productos a las familias sino también ser reconocidos por nuestra calidad y servicio personalizado.
              </p>
            </div>

             <br>
            </fieldset>
            </div>
          </section>
        </section>
        
          <!-- <aside> esto es el aside </aside> -->
          <?php include ("footer.php"); ?>
          <br><br>
          <?php include ("config_final.php"); ?>

    </body>
</html>
