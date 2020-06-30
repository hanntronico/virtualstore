    <div id="opciones2">
        <?php 
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
          $sq="select * from producto where stock <> 0 and estado >= 1 and descripcion like '%".$_GET["dat"]."%'";
          $res=mysqli_query($link, $sq);
          $numreg=mysqli_num_rows($res);
        // }
        
        // echo $sq." ".$numreg;
        if ($numreg==0) {
            echo "Sin resultados";
          }  
      ?>  


    
    </div>

<table border="0" cellpadding="2" cellspacing="2">

    <?php 
      $res=@mysqli_query($link, "set names utf8");
      $row=@mysqli_fetch_array($res);
                  
      // if($dat==''){
        $sq="select * from producto where stock <> 0 and estado >= 1 and descripcion like '%".$_GET["dat"]."%' order by 2 LIMIT $filini,6";
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
        <tr>
          <td>
            <a href="#" onClick="enviar(<?php echo $rwc[0]?>); return false;">
              <img src="../productos/<?php echo $strimag.$rwc['imagen'];?>" alt="<?php echo $strimag.$rwc[3];?>" width="30" height="30">
            </a>
          </td>
          <td>&nbsp;</td>
          <td width="45%">
            <a href="#" onClick="enviar(<?php echo $rwc[0]?>); return false;">
            <?php echo $rwc[1]; ?> </a>
          </td>
          <td align="right">
            <a href="#" onClick="enviar(<?php echo $rwc[0]?>); return false;">
            <?php echo "S/.".$rwc[3]; ?> </a>
          </td>
        </tr>





<!--               <section id="bloqueA">
                <div id="imgprod">
                  <a href="#" onClick="enviar(<?php //echo $rwc[0]?>); return false;">
                    <img src="../productos/<?php //echo $strimag.$rwc['imagen'];?>" alt="<?php //echo $strimag.$rwc[3];?>" width="30" height="30">
                  </a>    
                </div>
                <div id="descprod">
           
                <a href="#" onClick="enviar(<?php //echo $rwc[0]?>); return false;">
                  <?php //echo $rwc[1]."<br> <span class='precio'>S/ ".$rwc[3]."</span>"; ?> </a>

                </div>
                <div id="btnpro">
                  <input type="button"  value=" Comprar " onClick="enviar(<?php //echo $rwc[0]?>)" class="btnprod">
                </div>
              </section> -->





      <?php } ?>    
    </table>