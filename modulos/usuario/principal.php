<?php include ("head.php"); ?>
   
    <?php 
      $alcargar = "";
      $prod = $_GET['p'];
        if ($prod!="") { 
          $alcargar = "onload=\"verlist_bus2('".$prod."')\"";
    
        }else {
          $alcargar = "onload=\"vertodascat(0);\"";
        } 
    ?>


  <body <?php echo $alcargar;?> >

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


          <?php //include ("paneles.php"); ?>
          <?php include ("header.php"); ?>
          <?php include ("nav.php"); ?>
          <?php include ("subnav.php"); ?>

        <section class="container" id="contenedor" style="border-radius: 0.75em;" >
          <?php include ("contenedor.php"); ?>
          
          <?php //include ("nuevosprod.php"); ?>
        </section>
        
          <!-- <aside> esto es el aside </aside> -->
          <?php include ("footer.php"); ?>
          <!-- <br><br> -->
          <?php include ("config_final.php"); ?>


    </body>
</html>