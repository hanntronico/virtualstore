<?php 
    include("conectar.php");
    $link=Conectarse();
    // echo $_GET["id"];
 ?>
<!-- <link rel="stylesheet" href="css/style.default.css" type="text/css" /> -->
<!-- <link rel="stylesheet" href="../../css/estilos_admin.css" type="text/css" /> -->
<style type="text/css" media="screen">
  
  * {
    /*color: #ff0000;*/
    font-family: sans-serif;
    font-size: 10px;
  }

.tbl {
  border: none;
  padding: 0;
  margin: 0;
  width: 100%
}

.tbl01 tr td {
  border: 1px solid #CECECE;
  margin: 0px;
  padding: 0px;
}


</style>


<style type="text/css" media="print">
@media print {
  * {
      color: #000000;
      font-family: Arial;
      font-size: 10px;
  }

  .tbl {
    border: none;
    padding: 0;
    margin: 0;
    width: 95%
  }

  .tbl01 tr td {
    background: #008080;
    border: 1px solid #CECECE;
    margin: 0px;
    padding: 0px;
  }

  #fec_em {
    /*border: 0.1em solid #000000;*/
    margin-top: 80px;
    margin-left: 20px;
    padding: 4px;
    width: 30%;

  }

  #dir_part, #dir_llega {
    /*border: 0.1em solid #000000;*/
    display: inline-block;
    vertical-align: top;
    font-size: 10px;
    margin-top: 25px;
    margin-left: 20px;
    padding: 4px;
    width: 40%;
  }

  #destinatario {
    /*border: 0.1em solid #000000;*/
    display: inline-block;
    vertical-align: top;
    font-size: 10px;
    margin-top: 25px;
    margin-left: 20px;
    padding: 4px;
    width: 40%;
  }

  #content {
    margin-left: 20px;
  }

  #impresora {display:none;}
}
</style>

<?php 

    $rs=@mysql_query("set names utf8",$link);
    $fila=@mysql_fetch_array($res);
    $sql="SELECT p.*, concat(u.nombre, ' ', u.apellidos) as usu, u.dni 
          FROM pedidos p 
          inner join usuario u 
          on p.cod_usuario = u.cod_usuario  
          WHERE p.cod_pedido ='".$_GET["id"]."'"; 
    $res=@mysql_query($sql,$link);
    $row1=@mysql_fetch_array($res); 

 ?>

 <div id="fec_em">
    Fecha <br> 
    de emisión: <?=date("Y-m-d")?> <?=" Hora: ".date("H:i:s")?>   
 </div>

 <div id="dir_part">
    Cal. Parque Industrial Mza. E lote. 4 Z.I. <br>
    Parque Industrial Lambayeque - Chiclayo - Pimentel
 </div>

 <div id="dir_llega">
    <?=$row1[7]?>
 </div>

 <div id="destinatario">
  Cliente: <?=$row1[12]?> <br>
  DNI: <?=$row1["dni"]?>
  Razón Social: <?=$row1[9]?> <br>
  RUC: <?php if ($row1[10]==0) { echo "-----"; }else{ echo $row1[10];} ?> <br>
  Destinatario: <?=$row1[6]?> <br>
 </div>


<br><br><br>

<div id="content">
  
  <table class="tbl" border="0">

      <tr>
        <td>

        <table cellspacing="2" cellpadding="2" border="0" width="100%">
          <colgroup>
            <col class="con0" style="width: 2%" />
            <col class="con1" style="width: 68%" />
            <col class="con0" style="width: 8%" />
            <col class="con1" style="width: 5%" />
            <col class="con1" style="width: 8%" />

          </colgroup>
          <thead>
            <tr>
              <th class="head1">COD</th>
              <th class="head1" style="text-align:left">PRODUCTOS</th>
              <th class="head1">PRECIO</th>
              <th class="head1">CANT.</th>
              <th class="head1">SUBTOTAL</th>
            </tr>
          </thead>

          <tbody>

          <?php 

              $rs=@mysql_query("set names utf8",$link);
              $fila=@mysql_fetch_array($res);
              $sql="SELECT dp.cod_producto,
                           concat('<img src=../productos/',p.imagen,' width=50 height=50>') as Img,
                           p.descripcion, 
                           dp.precio, 
                           dp.cantidad, 
                           dp.subtotal,
                           dp.igv
                    FROM det_pedidos dp
                    INNER JOIN producto p ON dp.cod_producto = p.cod_producto
                    WHERE dp.cod_pedido ='".$_GET["id"]."'".
                    " AND dp.cantidad<>0"; 
              $res=@mysql_query($sql,$link);
              // echo $sql;
              // exit();
              // echo mysql_num_rows($res);
              $total = 0;
              while($row1=@mysql_fetch_array($res))
              {$i++;

              // if ($row1[6]==0) {
              //   $estrella=" url('images/icons/star.png') no-repeat 98% 50%";
              //   // $color_row=" #FFCE9D";
              //  } else{
              //   $estrella=" none";
              // }
          ?>  

              <tr class="gradeX">

                <td align="center"><?php echo $row1[0]; ?></td>
                <td style="background:<?=$estrella?>;"><?php echo $row1[2]; ?></td>
                <td align="right"><?php echo $row1[3]; ?></td>
                <td align="right"><?php echo $row1[4]; ?></td>
                <td align="right"><?php echo $row1[5]; ?></td>

              </tr>
          <?php  
                $total = $total + $row1[5];
            } ?> 
<!--               <tr>
                <td colspan="4"></td>
                <td align="right"><strong>TOTAL :</strong></td>
                <td align="right"><?=sprintf("%01.2f", $total)?></td>
              </tr> -->
              
            <?php 
              $rs=@mysql_query("set names utf8",$link);
              $fila=@mysql_fetch_array($res);

              $sql="SELECT sum(dp.subtotal), 
                           (sum(dp.subtotal)/1.18), 
                           ((sum(dp.subtotal)/1.18)*0.18)
                    FROM det_pedidos dp
                    INNER JOIN producto p ON dp.cod_producto = p.cod_producto
                    WHERE dp.cod_pedido ='".$_GET["id"]."'".
                    " AND dp.igv = 1"; 
              $res=@mysql_query($sql,$link);
              $row1=@mysql_fetch_array($res);

              $sql="SELECT sum(dp.subtotal), 
                           (sum(dp.subtotal)/1),
                           ((sum(dp.subtotal)/1)*0)
                    FROM det_pedidos dp
                    INNER JOIN producto p ON dp.cod_producto = p.cod_producto
                    WHERE dp.cod_pedido ='".$_GET["id"]."'".
                    " AND dp.igv = 0"; 
              $res=@mysql_query($sql,$link);
              $row2=@mysql_fetch_array($res);

            ?>



              <tr>
                <td colspan="7" align="right">
<!--                   <table cellspacing="0" cellpadding="0" width="50%">
                      <thead>
                        <tr>
                          <th align="center">Impuesto</th>
                          <th align="center">Compra</th>
                          <th align="center">Base imp.</th>
                          <th align="center">IGV</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td align="left">IGV=18%</td>
                          <td align="right"><?php //echo sprintf("%01.2f", $row1[0]); ?></td>
                          <td align="right"><?php //echo sprintf("%01.2f", $row1[1]); ?></td>
                          <td align="right"><?php //echo sprintf("%01.2f", $row1[2]); ?></td>
                        </tr>
                        <tr>
                          <td align="left">IGV=0</td>
                          <td align="right"><?php //echo sprintf("%01.2f", $row2[0]); ?></td>
                          <td align="right"><?php //echo sprintf("%01.2f", $row2[1]); ?></td>
                          <td align="right"><?php //echo sprintf("%01.2f", $row2[2]); ?></td>
                        </tr>
                        <tr>
                          <td align="left"><b>TOTAL</b></td>
                          <td align="right"><?php //echo sprintf("%01.2f", $row1[0]+$row2[0]); ?></td>
                          <td align="right"><?php //echo sprintf("%01.2f", $row1[1]+$row2[1]); ?></td>
                          <td align="right"><?php //echo sprintf("%01.2f", $row1[2]+$row2[2]); ?></td>
                        </tr>

                      </tbody>
                  </table> -->

                </td>
              </tr>


              <tr>
                <td colspan="6">
                  <div id="impresora">
                    <button onclick="javascript:print(document.overviewhead);"><img src="images/print.png"  /></button>
                  </div>
                </td>
              </tr> 
            </tbody>
          </table>
        </td>    
      </tr>
    </table>
  </div>  