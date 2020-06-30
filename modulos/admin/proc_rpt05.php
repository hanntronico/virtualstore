<?php 
	include("funciones.php");
	include("conectar.php");
  	$link=Conectarse();

  	// echo $_GET["pr1"]."<br>"; exit();  


  	$param1 = explode("%",$_GET["pr1"]);
  	
  	// echo count($param1);

  	if (count($param1)>1) {
  		// echo substr($param1[0], 0, -2);
  		for ($i=0; $i < count($param1); $i++) { 
  			// $prmt = $prmt." ".substr($param1[$i], 0, -2);
  			// echo substr($param1[$i], 0, -2);
  			$prmt = $prmt.str_replace("20", " ", $param1[$i]);
  		}
  	}else {
      $prmt = $_GET["pr1"];
    }


  	// echo $prmt;
  	// exit();

    list($dia,$mes,$anio)=explode("/",$_GET["fci"]); 
    $fec_ini = $anio."-".$mes."-".$dia;

  	list($dia,$mes,$anio)=explode("/",$_GET["fcf"]); 
  	$fec_fin = $anio."-".$mes."-".$dia;

//cod_compra, cod_proveedor, fec_emision, fec_venc, cod_usuario, nro_comprobante, valor, percep

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
            AND p.razon_social LIKE '%".$prmt."%' OR c.nro_comprobante = '".$prmt."'";
          // echo $sql; exit();
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
    }

        $rs=@mysql_query("set names utf8",$link);
        $fila=@mysql_fetch_array($res);
		    // echo $sql;exit(); 
        $res=@mysql_query($sql,$link);
        $numfilas=@mysql_num_rows($res);
?>       

		<table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="listprod">
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
          	<tr>
          		<tr colspan="7">Resultado: <?php echo $numfilas;?> registros encontrados.</tr>
          	</tr>
          <?php while($row1=@mysql_fetch_array($res))
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





