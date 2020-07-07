
          <section id="land">

            <?php include 'funciones.php'; ?>

            <?php  
              if ($_GET["sw"]==2) {
                // include("../conectar.php");
                // $link=Conectarse();
                $id=autogenerado("pedidos","cod_pedido",3); 
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


              </div>    
            
              



            </div>  




            
            
            <?php } ?>

          </section>

          <br>

<?php include 'ofertas.php'; ?>