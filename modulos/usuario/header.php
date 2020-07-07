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

                       <li class="get-a-quote"><a href="ingresar/" target="_blank"><i class="fa fa-laptop" aria-hidden="true"></i> Iniciar Sesión</a></li>
                    <?php } ?>
                
                </ul>
            </div>



			</div>
		</div>

	</div>