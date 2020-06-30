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
                   c.fec_emision, 
                   c.fec_venc, 
                   c.nro_comprobante, 
                   c.valor, 
                   c.percep 
            FROM compra c INNER JOIN proveedor p
            ON c.cod_proveedor = p.cod_proveedor ORDER BY 1 DESC";
          // echo $sql; exit();
          $titulo = "GENERAL";
    }

    if ($_GET["pr1"]!="all" && $_GET["pr1"]!="") {
      $sql="SELECT c.cod_compra, 
                   p.razon_social,
                   p.ruc, 
                   c.fec_emision, 
                   c.fec_venc, 
                   c.nro_comprobante, 
                   c.valor, 
                   c.percep 
            FROM compra c INNER JOIN proveedor p
            ON c.cod_proveedor = p.cod_proveedor
            WHERE p.razon_social LIKE '%".$_GET["pr1"]."%' OR c.nro_comprobante = '".$_GET["pr1"]."'";
          // echo $sql; exit();
          $titulo = "POR PROVEEDOR : ";
    }

    if ($_GET["pr1"]=="em" && $_GET["fci"]!="" && $_GET["fcf"]!="") {
      $sql="SELECT c.cod_compra, 
                   p.razon_social,
                   p.ruc, 
                   c.fec_emision, 
                   c.fec_venc, 
                   c.nro_comprobante, 
                   c.valor, 
                   c.percep 
            FROM compra c INNER JOIN proveedor p
            ON c.cod_proveedor = p.cod_proveedor
            where c.fec_emision between '".$fec_ini."' AND '".$fec_fin."'";
      $titulo = "POR FECHA DE EMISION : ".$fec_ini." al ".$fec_fin;        
    }

    if ($_GET["pr1"]=="vnc" && $_GET["fci"]!="" && $_GET["fcf"]!="") {
      $sql="SELECT c.cod_compra, 
                   p.razon_social,
                   p.ruc, 
                   c.fec_emision, 
                   c.fec_venc, 
                   c.nro_comprobante, 
                   c.valor, 
                   c.percep 
            FROM compra c INNER JOIN proveedor p
            ON c.cod_proveedor = p.cod_proveedor
            where c.fec_venc between '".$fec_ini."' AND '".$fec_fin."'";
      $titulo = "POR FECHA DE VENCIMIENTO : ".$fec_ini." al ".$fec_fin;      
    }

 // echo $sql; exit();




 ?>
<!-- <link rel="stylesheet" href="css/style.default.css" type="text/css" /> -->
<!-- <link rel="stylesheet" href="../../css/estilos_admin.css" type="text/css" /> -->
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

 <table cellpadding="0" cellspacing="0" border="0" width="100%">
  <thead>
    <tr>
      <th colspan="4">
        <p align="center">
          Mercado Virtual
          <br>
          Chiclayo
          <br>
          Dirección: Km 10 - Carretera Pimentel
          <br>
          RUC: 202020456789
          <br>
          Telf: 306587
        </p>
      </th>
    </tr>
    <tr align="center">
      <th colspan="4" align="center" >
        <br>
        <p align="center">REPORTE DE COMPRAS <?php echo $titulo; ?></p>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>

  </tbody>
 </table> 

  <table class="tbl">
      <thead>
        <tr>
          <th colspan="3">&nbsp;
            <!-- Lista de Productos en Pedido COD: <?php //echo $_GET["id"]; ?> -->
          </th>
        </tr>
      </thead>

      <tr>
        <td>

        <table cellpadding="0" cellspacing="0" class="tbl01">
          <colgroup>
            <col class="con1" style="width: 5%"/>
            <col class="con0" style="width: 25%" />
            <col class="con1" style="width: 6%"/>
            <col class="con1" style="width: 10%" />
            <col class="con1" style="width: 8%" />
            <col class="con0" style="width: 8%" />
            <col class="con0" style="width: 8%" />
            <col class="con0" style="width: 8%" />
          </colgroup>
          <thead>
            <tr>
              <th class="head1">COD</th>
              <th class="head1">RAZON SOCIAL</th>
              <th class="head1">RUC</th>
              <th class="head1">FECHA EMISION</th>
              <th class="head1">FECHA VENC.</th>
              <th class="head1">NRO. COMP.</th>
              <th class="head1" style="text-align:center;">VALOR</th>
              <th class="head1" style="text-align:center;">PERCEP.</th>
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
                <td align="center"><?php echo dma_shora($row1[3]); ?></td>
                <td align="center"><?php echo dma_shora($row1[4]); ?></td>
                <td><?php echo $row1[5]; ?></td>
                <td align="right"><?php echo $row1[6]; ?></td>
                <td align="right"><?php echo $row1[7]; ?></td>
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