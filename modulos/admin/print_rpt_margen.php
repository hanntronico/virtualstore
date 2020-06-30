<?php 
    include("funciones.php");
    include("conectar.php");
    $link=Conectarse();
    // echo $_GET["id"];

    list($dia,$mes,$anio)=explode("/",$_GET["fci"]); 
    $fec_ini = $anio."-".$mes."-".$dia;

    list($dia,$mes,$anio)=explode("/",$_GET["fcf"]); 
    $fec_fin = $anio."-".$mes."-".$dia;

    if ($_GET["pr1"]!="") {
      $sql="SELECT p.cod_producto, 
                   concat('<img src=../productos/',p.imagen,' width=50 height=50>') as img, 
                   p.descripcion, 
                   dc.prec_unit as pcompra,
                   p.precio as pventa,
                   round((p.precio/dc.prec_unit)*100,2),
                   (p.precio - dc.prec_unit),
                   dc.cod_compra
            FROM det_compra dc INNER JOIN producto p
            ON dc.cod_producto = p.cod_producto
            WHERE (dc.cod_producto = '".$_GET["pr1"]."'
            OR p.descripcion like '".$_GET["pr1"]."%')
            ORDER BY 8 DESC LIMIT 1";
      $titulo="POR MARGEN";      
    }

 // echo $sql; exit();
 ?>
<style type="text/css" media="screen">
@media screen {
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
    padding: 4px;
  }
  #impresora { 
    border: 1px solid #CECECE;
    width: 100%
  }
}
</style>

<style type="text/css" media="print">
@media print {

* {
    color: #000000;
    font-family: Arial;
    font-size: 10px;
}

body {
  text-align: center;
  margin: 0px auto;
  padding-top: 20px;
  padding-left: 30px;
}

.tbl {
  border: none;
  padding: 0;
  margin: 0;
  width: 90%
}

.tbl01 {
  width: 100%;
}

.tbl01 thead th{
  background: #C0C0C0;
  border: 1px solid #CECECE;
}

.tbl01 tr td {
  border: 1px solid #CECECE;
  margin: 0px;
  padding: 4px;
}

#impresora {display:none;}
}
</style>


  <table class="tbl">
      <thead>
        <tr>
          <th colspan="3">
            Mercado Virtual
            <br>
            REPORTE DE PRODUCTOS <?php echo $titulo; ?><br><br>
          </th>
        </tr>
      </thead>

      <tr>
        <td>

        <table cellpadding="0" cellspacing="0" class="tbl01">
          <colgroup>
            <col class="con1" style="width: 2%"/>
            <!-- <col class="con1" style="width: 4%"/> -->
            <col class="con0" style="width: 50%" />
            <col class="con1" style="width: 8%" />
            <col class="con1" style="width: 8%" />
            <col class="con0" style="width: 8%" />
            <col class="con0" style="width: 8%" />
          </colgroup>
          <thead>
            <tr>
              <th class="head1">COD</th>
              <!-- <th class="head1">IMAGEN</th> -->
              <th class="head1">DESCRIPCION</th>
              <th class="head1">P. COMPRA</th>
              <th class="head1">P. VENTA</th>
              <th class="head1">MARGEN (%)</th>
              <th class="head1">MARGEN (S/)</th>
            </tr>
          </thead>

            <tbody>
              <tr>
                <tr colspan="7">Resultado: <?php echo $numfilas;?> registros encontrados.</tr>
              </tr>
              <?php 
                $rs=@mysql_query("set names utf8",$link);
                $fila=@mysql_fetch_array($res);

                $res=@mysql_query($sql,$link);
                  // echo $sql;exit();
                while($row1=@mysql_fetch_array($res))
                  {$i++;
              ?>  
              <tr class="gradeX">
                  <td align="center"><?php echo $row1[0]; ?></td>
                  <!-- <td><?php //echo $row1[1]; ?></td> -->
                  <td><?php echo $row1[2]; ?></td>
                  <td align="center"><?php echo $row1[3]; ?></td>
                  <td align="center"><?php echo $row1[4]; ?></td>
                  <td align="center"><?php echo $row1[5];?></td>
                  <td align="center"><?php echo $row1[6];?></td>
                </tr>
            <?php } ?>    
          </tbody>
        </table>
      </td>    
    </tr>
  </table>
  
  <p align="left">Reporte del <?php echo date("Y-m-d H:i:s"); ?></p>
  <div id="impresora">
    <button onclick="javascript:print(document.overviewhead);">
    <img src="images/print.png"  /></button>
  </div>