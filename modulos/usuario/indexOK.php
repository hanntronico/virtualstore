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
          <?php // include ("contenedor.php"); ?>
          <section id="land">
            <!-- <img src="../../img/slider2.png" alt=""> -->
            <?php include 'slider/slider_gp.php'; ?>
          </section>

          <?php 

          $res=@mysqli_query($link, "set names utf8");
          $row=@mysqli_fetch_array($res);
          // $res=@mysql_query("select * from producto where estado >= 1 ORDER BY 1 limit 0,3",$link);
          $res=mysqli_query($link, "SELECT * FROM producto WHERE estado=2 AND stock <> 0 ORDER BY 1 LIMIT 0,3");

          while ($rwc=mysqli_fetch_array($res))
            {
           ?>

          <section id="bloque01">
            <div id="nompro">
              <div id="subnompro"><?php echo $rwc[1]?></div>
              <div id="prec">S/. <?php echo $rwc[3]?></div>
              <a href="#" onClick="enviar(<?php echo $rwc[0]?>); return false;">
                <div id="nubecompra">COMPRAR <br>AHORA</div></a>
            </div>
            <article>
                <img src="../../modulos/productos/<?php echo $rwc[4];?>" alt="">
            </article>
          </section>

          <?php } ?>

          <?php include ("nuevosprod.php"); ?>
        </section>
        
          <!-- <aside> esto es el aside </aside> -->
          <?php include ("footer.php"); ?>
          <br><br>
          <?php include ("config_final.php"); ?>

    </body>
</html>
