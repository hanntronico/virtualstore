<?php include ("head_ant.php"); ?>
   
    <body 
          <?php 
            $prod = $_GET['p'];
            if ($prod!="") { 
          ?>
            onload="verlist_bus2('<?=$prod?>');"
          <?php }else { ?>
            onload="vertodascat(0);"
    <?php  } ?>
    >
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


          <?php include ("paneles.php"); ?>
          <?php include ("header_ant.php"); ?>
          <?php include ("nav_ant.php"); ?>

        <section id="contenedor">
          <?php include ("contenedor.php"); ?>
          
          <?php include ("nuevosprod.php"); ?>
        </section>
        
          <!-- <aside> esto es el aside </aside> -->
          <?php include ("footer_ant.php"); ?>
          <!-- <br><br> -->
          <?php //include ("config_final.php"); ?>

    
    
    <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>


    </body>
</html>