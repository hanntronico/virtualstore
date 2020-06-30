      <?php //echo $_GET["cod"]; 
        $codcat=$_GET["cod"];
        $pag=$_GET['pag'];      
        if ($pag==""){
          $pag=0;
          $filini =0;
        }else {
          $filini = ($pag-1)*6;
        }

        include("../conectar.php");
        $link=Conectarse();
        
        if($codcat==0){
          $sq="SELECT * FROM categoria";
          $res=mysqli_query($link,  $sq);
          $numreg=mysqli_num_rows($res);

        }elseif ($codcat>0) {
          $sq="SELECT * FROM subcategorias WHERE cod_tipo=".$codcat;
          $res=mysqli_query($link, $sq);
          $numreg=mysqli_num_rows($res);
        }
        
        // echo $sq." ".$numreg;

      ?>  


    <div id="opciones">


      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mt-3">
        <tr>
          <td>
            <?php 
                  $res=@mysqli_query($link, "set names utf8");
                  $row=@mysqli_fetch_array($res);
                  $sqlq="SELECT * FROM categoria WHERE cod_tipo=".$_GET["cod"];  
                  $res=mysqli_query($link,$sqlq);
                  $rwc=mysqli_fetch_array($res);
                  if ($_GET["cod"]==0) {
                    $str1="TODAS";  
                  }else{
                    $str1=$rwc[1];
                  }
                  echo $str1;
            ?>
          </td>
          <td align="right">

            <div class="pull-right">
              <ul class="pagination">            
                <li class="page-item">
                  <a class="page-link" href="#" onClick="verpag(<?php echo $codcat;?>,1);">&laquo;</a>
                </li>

            <?php $npag=ceil($numreg/6); 
            for ($i=1; $i <= $npag; $i++) {
        // echo "<input type='button' value='".$i."' class='btnpag' onClick='verpag($codcat,$i);'>";}
            // echo $codcat." ".$pag;

                if ($_GET["pag"]=="" && $i==1) {
                  // if ($_GET["pag"]==1) {
                    $activo = "active";
                  // }
                }else{
                  if ($_GET["pag"]==$i) {
                    $activo = "active";
                  }else{
                    $activo = "";
                  }
                }                
            ?>
              <li class="page-item <?php echo $activo;?>">
                <a class="page-link" href="#" onClick="verpag(<?php echo $codcat.",".$i ;?>);"><?php echo $i;?></a>
              </li>

          <?php } ?>    

            </ul>
          </div>          

          </td>
        </tr>
      </table>
    
    </div>



  <div class="row mt-3">   
  
    <?php 
      $res=@mysqli_query($link, "set names utf8");
      $row=@mysqli_fetch_array($res);
                  
      if($codcat==0){
        $sq="select * from categoria LIMIT $filini,6";
        $res=mysqli_query($link, $sq);
        $strimag="categorias/";
      }elseif ($codcat>0) {
        $sq="select * from subcategorias where cod_tipo=".$codcat." LIMIT $filini,6";
        $res=mysqli_query($link, $sq);
        $strimag="";
      }
      
       // echo $sq; exit();          
                  
      while ($rwc=mysqli_fetch_array($res))
       		{
           // cod_subcat	subcat	desc_subcat	img_subcat	cod_tipo
      ?> 

      <div class="col-md-4 my-2">
        <a href="#" onClick="ver_prod(<?php echo $rwc[0]?>); return false;">
          <div class="card text-center">
            <div id="imgprod">
              <img class="card-img-top" src="../productos/subcategorias/<?php echo $strimag.$rwc[3];?>" alt="Card image cap" style="width: 70%;" >
            </div>  
            <div class="card-body" style="padding: 5px;">
              <!-- <p class="card-text"><?php //echo $rwc[1]; ?></p> -->
              <a href="#" onClick="ver_prod(<?php echo $rwc[0]?>); return false;" class="btn btn-primary"><?php echo $rwc[1]; ?></a>
            </div>
          </div>
        </a>  
      </div>





<!--               <section id="bloqueSC">
                <a href="#" onClick="ver_prod(<?php //echo $rwc[0]?>); return false;">
                  <div id="imgprod">
                    <img src="../productos/subcategorias/<?php //echo $strimag.$rwc[3];?>" alt="<?php //echo $strimag.$rwc[3];?>">
                  </div>
                </a>    
  
                <div id="desc_scat">
	                <a href="#" onClick="ver_prod(<?php //echo $rwc[0]?>); return false;">
                  <?php //echo $rwc[1]; ?> </a>
	              </div>
              </section>  -->

      <?php } ?>
  </div>