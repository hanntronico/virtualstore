          <section id="nuevos">
              <hgroup> <h1>Nuevos Productos</h1> </hgroup>

              <?php 
                $res=@mysqli_query($link, "set names utf8");
                $row=@mysqli_fetch_array($res);
                // $res=mysql_query("select * from producto where stock <> 0 and estado=2",$link);
                $cns="SELECT * FROM producto WHERE estado=1 AND stock <> 0 ORDER BY 1 DESC LIMIT 0,4";
                $res=mysqli_query($link, $cns);

                  
                  while ($rwc=mysqli_fetch_array($res))
                    {
           // cod_producto descripcion cod_tipo  precio  imagen  stock cod_marca prom
              ?> 

              <section id="bloqueA">
                <div id="imgprod">
                  <a href="#" onClick="enviar(<?php echo $rwc[0]?>); return false;">
                    <img src="../productos/<?php echo $rwc[4];?>" alt="<?php echo $rwc[4];?>">
                  </a>  

                </div>
                <div id="descprod">
                <a href="#" onClick="enviar(<?php echo $rwc[0]?>); return false;"><?php echo $rwc[1]."<br>S/. ".$rwc[3]; ?></a></div>
<!--                 <div id="descprod">
                <a href="#" onClick="enviar(<?php //echo $rwc[0]?>); return false;"><?php //echo $rwc[1]; ?> </a></div> -->
                <div id="btnpro">
                  <input type="button"  value=" Comprar " onClick="enviar(<?php echo $rwc[0]?>)" class="btnprod">
                </div>
              </section> 

              <?php } ?>


<!--              <section id="bloqueA">
                <div id="imgprod">
                  &nbsp;
                </div>
                <div id="descprod"><a href="#">Descripción del producto aquí</a></div>
                <div id="btnpro">
                  <input type="button" value=" Comprar " class="btnprod">
                </div>
              </section>

               <section id="bloqueB">
                <div id="imgprod">
                  &nbsp;
                </div>
                <div id="descprod"><a href="#">Descripción del producto aquí</a></div>
                <div id="btnpro">
                  <input type="button" value=" Comprar " class="btnprod">
                </div>
              </section>
              
              <section id="bloqueC">
                <div id="imgprod">
                  &nbsp;
                </div>
                <div id="descprod"><a href="#">Descripción del producto aquí</a></div>
                <div id="btnpro">
                  <input type="button" value=" Comprar " class="btnprod">
                </div>
              </section>

              <section id="bloqueD">
                <div id="imgprod">
                  &nbsp;
                </div>
                <div id="descprod"><a href="#">Descripción del producto aquí</a></div>
                <div id="btnpro">
                  <input type="button" value=" Comprar " class="btnprod">
                </div>
              </section> -->
          </section>