<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title></title>
	<link href="css/estails.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-Bo21yfmmZuXwcN/9vKrA5jPUMhr7znVBBeLxT9MA4r2BchhusfJ6+n8TLGUcRAtL" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

	<link href="../../css/style.css" rel="stylesheet">
	<link href="../../css/popup.css" rel="stylesheet">
	<link href="../../css/mobile-menu.css" rel="stylesheet">	
</head>



<body>
	
<!-- <div id="main-wrapper">

  <div id="preloader">
      <div id="status">
          <div class="status-mes"></div>
      </div>
  </div>

	<div class="uc-mobile-menu-pusher">

		<div class="content-wrapper"> -->


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

                    
                    <?php if (isset($_SESSION["s_cod"])){ ?>
                      <li class="phone">
                      	<i class="fa fa-user" aria-hidden="true"></i> Bienvenido(a):&nbsp;<?php echo $solonom; ?></li>
                    <?php }else{ ?>

                       <li class="get-a-quote"><a href="ctrl_admin/" target="_blank"><i class="fa fa-laptop" aria-hidden="true"></i> Iniciar Sesión</a></li>
                    <?php } ?>
                
                </ul>
            </div>



			</div>
		</div>
	</div>




</body>
</html>