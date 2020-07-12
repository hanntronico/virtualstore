<?php include ("head.php"); ?>


<?php 
  $prod = $_GET['p'];
  if ($prod!="") { 
    // $cargonload = "onload='verlist_bus2('".$prod."');'";
    $cargonload = "onload=\"verlist_bus2('".$prod."')\"";
  }else{
    // $cargonload = "onload='vertodascat(0);'";
    $cargonload = "onload=\"vertodascat(0);\"";
  }    
?>
            


<body <?php echo $cargonload; ?> >

          <?php //include ("paneles.php"); ?>
          <?php include ("header.php"); ?>
          <?php include ("nav.php"); ?>
          <?php include ("subnav.php"); ?>


      <section class="container" id="contenedor" style="border-radius: 0.75em;" >

				<?php include ("contenedor.php"); ?>
          
        <?php //include ("nuevosprod.php"); ?>

      </section>


<!--         <section id="contenedor">
          <?php //include ("contenedor.php"); ?>
          
          <?php //include ("nuevosprod.php"); ?>
        </section> -->
        
          <!-- <aside> esto es el aside </aside> -->
          <?php include ("footer.php"); ?>
          <!-- <br><br> -->
          <?php include ("config_final.php"); ?>

  </body>
</html>