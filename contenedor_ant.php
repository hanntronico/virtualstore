<?php 

$res=@mysqli_query($link, "set names utf8");
$row=@mysqli_fetch_array($res);
// select * from producto where estado=1 and stock <> 0 ORDER BY 1 DESC limit 0,4
// $res=mysqli_query("select * from producto where estado=2 and stock <> 0 ORDER BY 1 limit 0,3",$link);
$sql = "SELECT * FROM producto WHERE estado=2 AND stock <> 0 ORDER BY 1 LIMIT 0,3";
$res=@mysqli_query($link, $sql);
    // $row=mysqli_fetch_array($res);
?>
          <section id="land">
            
            <?php //include 'slider/slider_gp.php'; ?>

          </section>
          
          <?php 
          while ($rwc=@mysqli_fetch_array($res))
            {
              //echo $rwc[0]." ";
           // cod_producto descripcion cod_tipo  precio  imagen  stock cod_marca prom
           ?>

          <section id="bloque01">
            <div id="nompro">
              <div id="subnompro"><?php echo $rwc[1]?></div>
              <div id="prec">S/. <?php echo $rwc[3]?></div>
              <a href="#caja_msn2" data-rel="prettyPhoto[caja_msn2]"> 
                <div id="nubecompra">COMPRAR <br>AHORA</div></a>
            </div>
            <article>
                <img src="modulos/productos/<?php echo $rwc[4];?>" alt="">
            </article>
          </section>

          <?php  } ?>