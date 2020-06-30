<?php 
	include("funciones.php");
	include("conectar.php");
  	$link=Conectarse();

  	// list($dia,$mes,$anio)=explode("/",$_GET["fci"]); 
    // echo $_GET["pr1"]."<br>"; exit();
  	// echo $_GET["band"]."<br>";exit();

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
            WHERE (dc.cod_producto = '".$prmt."'
            OR p.descripcion like '".$prmt."%')
            ORDER BY 8 DESC LIMIT 1";
    }
      
        $rs=@mysql_query("set names utf8",$link);
        $fila=@mysql_fetch_array($rs);
    		// echo $sql;exit();
        $res=@mysql_query($sql,$link);
        $numfilas=@mysql_num_rows($res);
?>       

		<table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="listprod">
          <colgroup>
            <col class="con1" style="width: 2%"/>
            <col class="con1" style="width: 4%"/>
            <col class="con0" style="width: 50%" />
            <col class="con1" style="width: 8%" />
            <col class="con1" style="width: 8%" />
            <col class="con0" style="width: 8%" />
            <col class="con0" style="width: 8%" />
          </colgroup>
          <thead>
            <tr>
              <th class="head1">COD</th>
              <th class="head1">IMAGEN</th>
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
            <?php while($row1=@mysql_fetch_array($res))
              {$i++;
            ?>  
            <tr class="gradeX">
                <td align="center"><?php echo $row1[0]; ?></td>
                <td><?php echo $row1[1]; ?></td>
                <td><?php echo $row1[2]; ?></td>
                <td align="center"><?php echo $row1[3]; ?></td>
                <td align="center"><?php echo $row1[4]; ?></td>
                <td align="center"><?php echo $row1[5];?></td>
                <td align="center"><?php echo $row1[6];?></td>
              </tr>
          <?php } ?>    
          </tbody>
        </table>