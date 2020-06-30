<?php 
    include("funciones.php");
    include("conectar.php");
    $link=Conectarse();
    // echo $_GET["pr1"]; exit();

    list($dia,$mes,$anio)=explode("/",$_GET["fci"]); 
    $fec_ini = $anio."-".$mes."-".$dia;

    list($dia,$mes,$anio)=explode("/",$_GET["fcf"]); 
    $fec_fin = $anio."-".$mes."-".$dia;

    if ($_GET["pr1"]=="all") {
      $sql="SELECT c.cod_compra, 
                   p.razon_social,
                   p.ruc, 
                   c.nro_comprobante,
                   c.fec_emision, 
                   c.fec_venc, 
                   c.valor,
                   ROUND((c.valor*0.18),2) as igv,
                   ROUND((c.valor*1.18),2) as subtotal,
                   ROUND(((c.valor*1.18)*(c.percep)),2) AS percepcion,
                   ROUND(((c.valor*1.18)*(1+c.percep)),2) as total
            FROM compra c INNER JOIN proveedor p
            ON c.cod_proveedor = p.cod_proveedor
            WHERE c.percep <> 0  
            ORDER BY 1 DESC";
          // echo $sql; exit();
          $titulo = "GENERAL";
    }

    if ($_GET["pr1"]!="all" && $_GET["pr1"]!="") {
      $sql="SELECT c.cod_compra, 
                   p.razon_social,
                   p.ruc, 
                   c.nro_comprobante,
                   c.fec_emision, 
                   c.fec_venc, 
                   c.valor,
                   ROUND((c.valor*0.18),2) as igv,
                   ROUND((c.valor*1.18),2) as subtotal,
                   ROUND(((c.valor*1.18)*(c.percep)),2) AS percepcion,
                   ROUND(((c.valor*1.18)*(1+c.percep)),2) as total
            FROM compra c INNER JOIN proveedor p
            ON c.cod_proveedor = p.cod_proveedor
            WHERE c.percep <> 0
            AND p.razon_social LIKE '%".$_GET["pr1"]."%' OR c.nro_comprobante = '".$_GET["pr1"]."'";
          // echo $sql; exit();
          $titulo = "POR PROVEEDOR : ";
    }

    if ($_GET["pr1"]=="em" && $_GET["fci"]!="" && $_GET["fcf"]!="") {
      $sql="SELECT c.cod_compra, 
                   p.razon_social,
                   p.ruc, 
                   c.nro_comprobante,
                   c.fec_emision, 
                   c.fec_venc,
                   c.valor,
                   ROUND((c.valor*0.18),2) as igv,
                   ROUND((c.valor*1.18),2) as subtotal,
                   ROUND(((c.valor*1.18)*(c.percep)),2) AS percepcion,
                   ROUND(((c.valor*1.18)*(1+c.percep)),2) as total
            FROM compra c INNER JOIN proveedor p
            ON c.cod_proveedor = p.cod_proveedor
            WHERE c.percep <> 0
            AND c.fec_emision between '".$fec_ini."' AND '".$fec_fin."'";
      $titulo = "POR FECHA DE EMISION : ".$fec_ini." al ".$fec_fin;        
    }

    if ($_GET["pr1"]=="vnc" && $_GET["fci"]!="" && $_GET["fcf"]!="") {
      $sql="SELECT c.cod_compra, 
                   p.razon_social,
                   p.ruc, 
                   c.nro_comprobante,
                   c.fec_emision, 
                   c.fec_venc,
                   c.valor,
                   ROUND((c.valor*0.18),2) as igv,
                   ROUND((c.valor*1.18),2) as subtotal,
                   ROUND(((c.valor*1.18)*(c.percep)),2) AS percepcion,
                   ROUND(((c.valor*1.18)*(1+c.percep)),2) as total
            FROM compra c INNER JOIN proveedor p
            ON c.cod_proveedor = p.cod_proveedor
            WHERE c.percep <> 0
            AND c.fec_venc between '".$fec_ini."' AND '".$fec_fin."'";
      $titulo = "POR FECHA DE VENCIMIENTO : ".$fec_ini." al ".$fec_fin;      
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
            Mercado Virtual <br> 
            REPORTE DE PERCEPCIONES <?php echo $titulo; ?> <br><br>
          </th>
        </tr>
      </thead>

      <tr>
        <td>

        <table cellpadding="0" cellspacing="0" class="tbl01">
         <colgroup>
            <col class="con1" style="width: 5%"/>
            <col class="con0" style="width: 22%" />
            <col class="con1" style="width: 6%"/>
            <col class="con1" style="width: 10%" />
            <col class="con1" style="width: 9%" />
            <col class="con0" style="width: 9%" />
            <col class="con1" style="width: 8%" />
            <col class="con0" style="width: 8%" />
            <col class="con0" style="width: 8%" />
            <col class="con0" style="width: 8%" />
            <col class="con0" style="width: 8%" />
          </colgroup>
          <thead>
            <tr>
              <th class="head1">COD</th>
              <th class="head1">RAZON SOCIAL</th>
              <th class="head1">RUC</th>
              <th class="head1">NRO. COMPRO</th>
              <th class="head1" style="font-size:10px;">FEC. EMISION</th>
              <th class="head1" style="font-size:10px;">FEC. VENC.</th>
              <th class="head1" style="text-align:center;">VALOR</th>
              <th class="head1" style="text-align:center;">IGV</th>
              <th class="head1" style="text-align:center;">SUBTOTAL</th>
              <th class="head1" style="text-align:center;">PERCEP.</th>
              <th class="head1" style="text-align:center;">TOTAL</th>
            </tr>
          </thead>

          <tbody>

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
                <td><?php echo $row1[1]; ?></td>
                <td><?php echo $row1[2]; ?></td>
                <td><?php echo $row1[3]; ?></td>
                <td align="center"><?php echo dma_shora($row1[4]); ?></td>
                <td align="center"><?php echo dma_shora($row1[5]); ?></td>
                <td align="right"><?php echo $row1[6]; ?></td>
                <td align="right"><?php echo $row1[7]; ?></td>
                <td align="right"><?php echo $row1[8]; ?></td>
                <td align="right"><?php echo $row1[9]; ?></td>
                <td align="right"><?php echo $row1[10]; ?></td>
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