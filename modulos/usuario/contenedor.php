
          <section id="land">

            <?php include 'funciones.php'; ?>

            <?php  
              if ($_GET["sw"]==2) {
                // include("../conectar.php");
                // $link=Conectarse();
                echo $id=autogenerado("pedidos","cod_pedido",3); 
            ?>

            <?php include 'vercarrito2.php'; ?>

              <?php 
                }else { 
              ?>




            <div class="row" style="font-weight: bolder;">
              <div class="col-lg-3 pt-4">

                <div id="control">
                  
                  CATEGORÍAS :<br><br>
                  <!-- <select name="cbocateg" id="cbocateg" onchange="ver_cat();" multiple="multiple" class="selcateg"> -->

              <div class="form-group">
                  <select name="cbocateg" id="cbocateg" onclick="ver_cat();" multiple="multiple" class="selcateg form-control" style="height: 180px;">
                    <option value="0">Todas...</option>
                    <?php 
                      // cod_tipo  tipo  descripcion  
                      $res=@mysqli_query($link, "set names utf8");
                      $row=@mysqli_fetch_array($res);
                      $res=mysqli_query($link, "SELECT * FROM categoria ORDER BY 2");
                      while ($rwc=mysqli_fetch_array($res))
                        {
                    ?>
                    <option value="<?php echo $rwc[0]; ?>"> <?php echo $rwc[1]; ?></option>
                    
                    <?php } ?>  
                    
                  </select>
                </div>     
                  <br><br>
    <!--          <input type="hidden" name="txtbusqueda" id="txtbusqueda" value="<?= $prod ?>"> <br>
                  <input type="button" id="acep" value="Aceptar" onclick="verlist_bus();"> -->
                </div>

                   
              </div>

<!-- <button type="button" class="btn btn-primary|secondary|success|danger|warning|info|light|dark btn-lg|btn-sm">Button</button>
 -->
              <div id="productos" class="col-lg-9">

<!--                 <div class="row mt-3">

                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>

                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>

                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>   

                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>   


                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>                                      

                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>   

                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>   


                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>                                      

                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>   

                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>   


                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>                                      

                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>   

                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>   


                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>                                      

                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>   

                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>   


                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>                                      

                  <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>   

                                     

                </div> -->


<!--                 <div class="row mt-3">

                    <div class="col-md-4 my-2">

                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>

                    </div>

                    <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>   

                </div>

                <div class="row mt-3">

                    <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 my-2">
                      <div class="card text-center">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>   

                </div> -->

              </div>    
            
              



            </div>  




            
            
            <?php } ?>

          </section>

          <br>


<!--           <div class="row">
            <div class="col-lg-4">
                hanntronico1
            </div>
            <div class="col-lg-4">
                hanntronico2
            </div>
            <div class="col-lg-4">
                hanntronico3
            </div>                        
          </div> -->



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
              
              <img style="width: 50%; display: block; text-align: center; margin: 0px auto; margin-top: 10px;" src="../productos/<?php echo $rwc[4];?>" alt="Card image">

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
