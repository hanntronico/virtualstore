<?php 
    include ("inc_seguridad.php");
    // $_SESSION["s_cod"]='Usuario actual'; 
    $usr=$_SESSION["s_cod"];  
    $solonom=$_SESSION["s_solonom"];
    $nomusu=$_SESSION["s_nombreC"];
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
	<title></title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-Bo21yfmmZuXwcN/9vKrA5jPUMhr7znVBBeLxT9MA4r2BchhusfJ6+n8TLGUcRAtL" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->

	<!-- <link href="../../css/miestilo.css" rel="stylesheet"> -->
  <link href="css/estails.css" rel="stylesheet">
	<!-- <link href="../../css/estilos.css" rel="stylesheet"> -->


<!-- <link href="../../css/style.css" rel="stylesheet">
	   <link href="../../css/popup.css" rel="stylesheet">
	   <link href="../../css/mobile-menu.css" rel="stylesheet"> -->


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../js/jquery-1.8.2.min.js">\x3C/script>')</script> 
        
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js" type="text/javascript"></script> 
        
  <link href="boxes/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />
  <link rel="stylesheet" href="boxes2/thickbox.css" type="text/css" media="screen" />
        
  <script type="text/javascript" src="http://www.google.com/jsapi"></script> 
  <script type="text/javascript" src="boxes2/jquery.js"></script>
  <script type="text/javascript" src="boxes2/thickbox.js"></script>
  <script type="text/javascript" src="boxes/jquery.alerts.js" ></script>
  <script type="text/javascript" src="../../js/jquery.noconflict.js"></script>
  <script type="text/javascript" src="../../js/vendor/modernizr-2.6.2.min.js"></script>

</head>


<?php 
  $prod = $_GET['p'];
  if ($prod!="") { 
    $cargonload = "onload='verlist_bus2('".$prod."');'";
  }else{
    $cargonload = "onload='vertodascat(0);'";
  }    
?>
            


<body <?php echo $cargonload; ?> >

	<div class="header-top visible-md visible-lg">
		<div class="container">
			<div class="row">
        <div class="col-sm-12 col-md-4">
				  	<ul class="social-icon">
                <li><a href="https://www.facebook.com/SCJAMBO/" target="_blank" class="fa fa-facebook" aria-hidden="true"> </a></li>
                <li><a href="https://twitter.com/SAGRADO09759140" target="_blank" class="fa fa-twitter" aria-hidden="true"> </a></li>
                <li><a href="https://www.youtube.com/channel/UCmXa75_QU7PXRFVPNy38LHQ" target="_blank" class="fa fa-youtube" aria-hidden="true"> </a></li>
            </ul>
				</div>


            <div class="col-sm-12 col-md-8">
                <ul class="top-contact pull-right">
                    <li class="phone"><i class="fa fa-phone-square" aria-hidden="true"></i> 926 564 458</li>
                    <li class="email"><i class="fa fa-envelope" aria-hidden="true"></i>ventas@mercadosdelnorte.com</li>

<!-- <div id="solo_nom">
	<a href="#"><span class="f_compra">Bienvenido(a):&nbsp;
                <?php echo $solonom; ?></span></a></div> -->

                    
                    <?php if (isset($_SESSION["s_cod"])){ ?>
                      <li class="phone">
                      	<i class="fa fa-user" aria-hidden="true"></i> Bienvenido(a):&nbsp;<?php echo $solonom; ?></li>
                    <?php }else{ ?>

<!--                       <li class="get-a-quote"><a href="ingresar/" title="" style="background-color: #FC6D72;">Inicia Sesión</a></li> -->
<!--                       <li class="get-a-quote"><a href="ingresar/" style="background-color: #D9534F; font-weight: bold;" target="_blank">Inicia Sesión</a></li> -->

                       <li class="get-a-quote"><a href="ctrl_admin/" target="_blank"><i class="fa fa-laptop" aria-hidden="true"></i> Iniciar Sesión</a></li>
                    <?php } ?>
                
                </ul>
            </div>



			</div>
		</div>

	</div>



<nav class="navbar navbar-expand-lg navbar-dark bg-primary logo" style="padding-top: 10px; padding-bottom: 10px;"> 
       
      <div class="container">
          
        <a class="navbar-brand" href="#">
					<img src="../../img/logo2.png">
				</a>


<!--         <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="../../img/logo2.png" alt=""></a>
        </div> -->

			  <button class="navbar-toggler" 
                type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
		
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">

			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="nosotros.php">Nosotros</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="demo.php">Demo</a>
			      </li>	
			      <li class="nav-item">
			        <a class="nav-link" href="sugerencias.php">Sugerencias</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="principal.php">Catálogo</a>
			      </li>				      		      			      

			      <li>
			      	<!-- <form class="form-inline my-2 my-lg-0 busqueda"> -->
<!-- 			      		<input class="form-control mr-sm-2" type="text" placeholder="Buscar" id="txtbuscar" aria-label="Search" onkeydown="checkKey(event,'txtbuscar');" autocomplete="off">
			      		
			      		<button class="btn btn-secondary my-2 my-sm-0" type="submit" name="btnbus" id="btnbus" onclick="srch()">Buscar</button> -->
			    		<!-- </form> -->

			    		<div class="form-inline my-2 my-lg-0 busqueda">
	         			<input class="form-control mr-sm-2" type="text" name="txtbuscar" id="txtbuscar" placeholder="Busca" onkeydown="checkKey(event,'txtbuscar');" autocomplete="off" >
	              <input class="btn btn-secondary my-2 my-sm-0" type="button" name="btnbus" id="btnbus" value="Buscar" onclick="srch()">
			    		</div>

			      </li>
  		    </ul>
			  </div>
    </div>    

</nav>



<!-- <div class="bg-primary" style="padding: 5px;"> -->
	<div class="container py-2">
		
		<div class="row">
			<div class="col-lg-12">
					<div class="pull-right">

             <?php 

                $k=$_SESSION["s_prod"];
                $total=0;
                $conta=0;
                if (count($k)>0)
                  {
                    foreach( $k as $key => $value ) 
                    {
                      $conta++;  
                      $res=mysqli_query($link, "select * from producto where cod_producto=".$key."");
                      $row=mysqli_fetch_array($res);
                      $total+=($row[3]*$value);
                        if ($value<>0)
                        {
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


<section class="container bg-light" id="contenedor" style="border-radius: 0.75em;" >

				<?php include ("contenedor.php"); ?>
          
        <?php //include ("nuevosprod.php"); ?>

</section>


<!--         <section id="contenedor">
          <?php //include ("contenedor.php"); ?>
          
          <?php //include ("nuevosprod.php"); ?>
        </section> -->
        
          <!-- <aside> esto es el aside </aside> -->
          <?php //include ("footer.php"); ?>
          <!-- <br><br> -->
          <?php //include ("config_final.php"); ?>



    <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <!-- <script src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script> -->
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- <script src="https://bootswatch.com/_assets/js/custom.js"></script> -->
    <script type="text/javascript" src="js/scripts.js"></script>


</body>
</html>