<!-- <div class="bg-primary" style="padding: 5px;"> -->
	<div class="container py-2">
		
		<div class="row">
      
<!--       <div class="pull-right">
        <div id="bus_cont"></div> 
      </div> -->

      
      <div class="col-lg-12">
          <div class="pull-right">

        <div id="bus_cont"></div> 

             <?php 

                $k=$_SESSION["s_prod"];
                $total=0;
                $conta=0;
                if (count($k)>0)
                  {
                    foreach( $k as $key => $value ) 
                    {
                      $res=mysqli_query($link, "SELECT * FROM producto WHERE cod_producto=".$key);
                      $row=mysqli_fetch_array($res);
                      $total+=($row[3]*$value);
                        if ($value<>0)
                        {$conta++;
                           // echo sprintf("%01.2f", $total);
                        }
                    }
                    
                    $untotal = sprintf("%01.2f", $total); 

                  }else{

                    $untotal = sprintf("%01.2f", $total);                     
                  }

                 ?>





    <!-- <a href="compra.php" class="mr-2"> -->
    <a href="principal.php?sw=2" class="mr-2" style="text-decoration: none;" >
      <span class="badge badge-pill badge-success" style="font-weight: bolder; font-size: 1.05em;">Pagar: S/. <?php echo $untotal; ?></span>

      <!-- <span class="f_compra" style="font-weight: bolder; font-size: 1.1em;" >Pagar: S/. <?php echo $untotal; ?> </span> -->
    </a>


						<a href="compra.php" class="btn btn-info btn-md" style="padding: 5px 10px">
              <div id="canasta"> 
                <span style="color: #fff ; font-weight: bolder; font-size: 16px; border-radius: 10px; background-color: #ff0000; padding: 2px 6px">
                  <?php echo $conta; ?></span>
                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 20px;"></i> 
              <!-- Mi Compra -->  
                </div>
            </a>


						<a href="#" class="btn btn-info btn-md" style="padding-right: 20px; padding-left: 20px;" onclick="salir(); return false;"><div id="salir">Salir</div></a>
					</div>
			</div>
		</div>

	</div>
<!-- </div> -->