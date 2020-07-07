    <div id="opciones">
        <?php 
        // echo trim($_GET["dat"]);
        $dat=$_GET["dat"];
        $pag=$_GET["pag"];  

        // echo "dato: ".$dat." pagina:".$pag;

        if ($pag==""){
          $pag=0;
          $filini =0;
        }else {
          $filini = ($pag-1)*6;
        }

        include("../conectar.php");
        $link=Conectarse();
        
        // if($dat==0){
          $sq="SELECT * FROM producto WHERE stock <> 0 AND estado >= 1 AND descripcion LIKE '%".$_GET["dat"]."%'";
          $res=mysqli_query($link, $sq);
          $numreg=mysqli_num_rows($res);
        // }
        
        // echo $sq." ".$numreg;
        // exit();

      ?>  

      <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td>
            <?php 
                  $res=@mysqli_query($link,"set names utf8");
                  $row=@mysqli_fetch_array($res);
                  $sqlq="SELECT * FROM producto WHERE stock <> 0 AND estado >= 1 AND descripcion LIKE '%".$_GET["dat"]."%'";
                  // echo $sqlq;  
                  $res=mysqli_query($link, $sqlq);
                  $rwc=mysqli_fetch_array($res);
                  // if ($_GET["cod"]==0) {
                  //   $str1="TODAS";  
                  // }else{
                  //   $str1=$rwc[1];
                  // }
                  // echo $str1;
            	echo "Mostrando ".$numreg." resultados";
            ?>

          </td>
          <td align="right"><?php $npag=ceil($numreg/6); 
            for ($i=1; $i <= $npag; $i++) { 

            // echo "<input type='button' value='".$i."' class='btnpag' onClick='verpag3(,$i);'>";}
            // echo $dat." ".$pag;
            	?>
            	<input type="button" value="<?=$i?>" class="btnpag" onClick="verpag3('<?=$dat?>',<?=$i?>);">

           <?php } ?>
          </td>
        </tr>
      </table>
    
    </div>
    <?php 
      $res=@mysqli_query($link, "set names utf8");
      $row=@mysqli_fetch_array($res);
                  
      // if($dat==''){
        $sq="SELECT * FROM producto WHERE stock <> 0 AND estado >= 1 AND descripcion LIKE '%".$_GET["dat"]."%' order by 2 LIMIT $filini,6";
        // echo $sq;
        // exit();
        $res=mysqli_query($link, $sq);
        $strimag="";

      // }
      
       // echo $sq; exit();          
                  
      while ($rwc=mysqli_fetch_array($res))
       	{
// cod_producto, descripcion, cod_subcat, precio, imagen, stock, cod_marca, prom
      ?> 
             
              <section id="bloqueA">
                <div id="imgprod">
                  <a href="#" onClick="enviar(<?php echo $rwc[0]?>); return false;">
                    <img src="../productos/<?php echo $strimag.$rwc['imagen'];?>" alt="<?php echo $strimag.$rwc[3];?>">
                  </a>    
                </div>
                <div id="descprod">
           
                <a href="#" onClick="enviar(<?php echo $rwc[0]?>); return false;">
                  <?php echo $rwc[1]."<br> <span class='precio'>S/ ".$rwc[3]."</span>"; ?> </a>

                </div>
                <div id="btnpro">
                  <input type="button"  value=" Comprar " onClick="enviar(<?php echo $rwc[0]?>)" class="btnprod">
                </div>
              </section>





      <?php } ?>    