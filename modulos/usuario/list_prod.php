                <?php  
                  include("../conectar.php");
                  $link=Conectarse();
                  // echo $sc=$_GET["cod"];
                  $sqlq = "SELECT cod_tipo 
                           FROM subcategorias WHERE subcategorias.cod_subcat=".$_GET["cod"];  
                  // echo $sqlq;
                  // exit();
                  $res=mysqli_query($link, $sqlq);
                  $rwc=mysqli_fetch_array($res);
                  $cat = $rwc[0];
                ?>
                

                
                
                <?php //echo $_GET["cod"]; 
                  $res=@mysqli_query($link, "set names utf8");
                  $row=@mysqli_fetch_array($res);
                  $sqlq = "SELECT * FROM subcategorias WHERE cod_subcat=".$_GET["cod"];  
                  $res=mysqli_query($link, $sqlq);
                  $rwc=mysqli_fetch_array($res);
                  // echo $rwc[1];
                ?>


              <div id="opciones">

                <div class="row my-2">
                  <div class="col-md-4 mt-2"><?php echo $rwc[1]; ?></div>
                  <div class="col-md-8">
                    <button type="button" class="btn btn-warning btn-md pull-right" onclick="javascript: location.href='principal.php'">VER CATEGORIAS</button>
                  </div>

                <!-- &nbsp;&nbsp;&nbsp; -->
                <!-- <div id="nom_cat"><?php //echo $rwc[1]; ?></div> -->


                <!-- <div id="btn_cat" class="pull-right"> -->
<!--                   <input type="button" value="VER CATEGORIAS" onClick="javascript: location.href='principal.php'" class="btnblue">  -->
                  
                  <!-- <div id="lnkblue"><a href="principal.php">Ver Categorias</a></div>                  -->
                <!-- </div> -->
              

                </div>
              </div>


          <div class="row mt-3">   
    
              <?php 
                  $codcat=$_GET["cod"];
                  $res=@mysqli_query($link, "set names utf8");
                  $row=@mysqli_fetch_array($res);
                  
                  if($codcat==0){
                    $res=mysqli_query($link, "SELECT * FROM producto WHERE stock <> 0 AND estado >= 1");
                  }elseif ($codcat>0) {
                    $res=mysqli_query($link, "SELECT * FROM producto WHERE stock <> 0 AND estado >= 1 AND cod_subcat=".$codcat);
                  }
                  
                  
                  while ($rwc=mysqli_fetch_array($res))
                    {
           // cod_producto descripcion cod_subcat  precio  imagen  stock cod_marca prom
              ?> 


          <div class="col-md-4 my-2">
            <a href="#" onClick="enviar(<?php echo $rwc[0]?>); return false;">
              <div class="card text-center">
                <div id="imgprod">
                  <img class="card-img-top" src="../productos/<?php echo $rwc[4];?>" alt="<?php echo $rwc[4];?>" style="width: 70%;" >
                </div>  
                <div class="card-body" style="padding: 5px;">
                  <p class="card-text"><?php echo $rwc[1]; ?> <br> <?php echo "S/ ".$rwc[3]; ?></p>

                  <!-- <?php //echo "<span class='precio'>S/ ".$rwc[3]."</span> <br>"; ?> -->
                  
<!--                   <a href="#" onClick="enviar(<?php //echo $rwc[0]?>); return false;" class="btn btn-primary"></a> -->

                  <button type="button" class="btn btn-primary btn-md">Comprar</button>
                </div>
              </div>
            </a>  
          </div>




<!--               <section id="bloqueA">
                <div id="imgprod">
                  <a href="#" onClick="enviar(<?php echo $rwc[0]?>); return false;">
                    <img src="../productos/<?php echo $rwc[4];?>" alt="<?php echo $rwc[4];?>">
                  </a>    
                </div>
                <div id="descprod">
           
                <a href="#" onClick="enviar(<?php echo $rwc[0]?>); return false;">
                  <?php echo $rwc[1]."<br> <span class='precio'>S/ ".$rwc[3]."</span>"; ?> </a>

                </div>
                <div id="btnpro">
                  <input type="button"  value=" Comprar " onClick="enviar(<?php echo $rwc[0]?>)" class="btnprod">
                </div>
              </section>  -->

              <?php } ?>
  </div>
                                       