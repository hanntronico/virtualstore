<?php include ("head.php"); ?>
    
    <body onload="carga_compra();">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

          <?php //include ("paneles.php"); ?>
          <?php include ("header.php"); ?>
          <?php include ("nav.php"); ?>
          <?php include ("subnav.php"); ?>

        <section class="container" id="contenedor" style="border-radius: 0.75em;">
        <!-- <section id="contenedor" style="border: 1px solid #ff0000;" > -->
          <section id="land"></section>
          
          <?php 

          $res=@mysqli_query($link, "set names utf8");
          $row=@mysqli_fetch_array($res);
          $res=mysqli_query($link, "SELECT * FROM producto ORDER BY 1 LIMIT 0,3");

          while ($rwc=mysqli_fetch_array($res))
            {
           ?>

<!--           <section id="bloque01">
            <div id="nompro">
              <div id="subnompro"><?php echo $rwc[1]?></div>
              <div id="prec">S/. <?php echo $rwc[3]?></div>
              <a href="#" onClick="enviar(<?php echo $rwc[0]?>); return false;">
                <div id="nubecompra">COMPRAR <br>AHORA</div></a>
            </div>
            <article>
                <img src="../../modulos/productos/<?php echo $rwc[4];?>" alt="">
            </article>
          </section> -->

          <?php } ?>


          <?php include ("ofertas.php"); ?>
          
          <?php //include ("nuevosprod.php"); ?>
        
        </section>
        


          <!-- <aside> esto es el aside </aside> -->
          <?php include ("footer.php"); ?>

          <?php include ("config_final.php"); ?>

    </body>
</html>