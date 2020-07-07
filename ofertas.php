<div class="row">

          <?php 

          $res=@mysqli_query($link, "set names utf8");
          $row=@mysqli_fetch_array($res);
          // $res=mysql_query("select * from producto where estado=1 ORDER BY 1 limit 0,3",$link);
          $res=mysqli_query($link, "SELECT * FROM producto WHERE estado=2 AND stock <> 0 ORDER BY 1 LIMIT 0,3");
 
          while ($rwc=mysqli_fetch_array($res))
            {$xx++;
           // cod_producto descripcion cod_tipo  precio  imagen  stock cod_marca prom
           ?>


          <div class="col-lg-4">

            <div class="card mb-3">
              <h4 class="card-header">Oferta Nro <?php echo $xx; ?></h4>

        <!--       <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
              </div> -->
              
              <img style="width: 50%; display: block; text-align: center; margin: 0px auto; margin-top: 10px;" src="modulos/productos/<?php echo $rwc[4];?>" alt="Card image">

              <div class="card-body">
                <p class="card-text"><?php echo $rwc[1]?></p>
                <a href="#" onClick="enviar(<?php echo $rwc[0]?>); return false;" class="card-link" style="font-size: 20px;">S/. <?php echo $rwc[3]?></a>
                <a href="#" onClick="enviar(<?php echo $rwc[0]?>); return false;" class="card-link btn btn-primary pull-right">COMPRAR AHORA</a>
              </div>

<!--               <div class="card-body">
              </div> -->

<!--               <div class="card-footer text-muted">
                2 days ago
              </div> -->
            </div>
          
          </div> 


<!--               <section id="bloque01">
                <div id="nompro">
                  <div id="subnompro"><?php echo $rwc[1]?></div>
                  <div id="prec">S/. <?php echo $rwc[3]?></div>
                  <a href="#" onClick="enviar(<?php echo $rwc[0]?>); return false;">
                    <div id="nubecompra">COMPRAR <br>AHORA</div></a>
                </div>
                <article>
                    <img src="../productos/<?php echo $rwc[4];?>" alt="">
                </article>
              </section> -->


          <?php  } ?>
          
</div>