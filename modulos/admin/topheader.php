    <div class="topheader">
        <div class="left">
            <h1 class="logo">SISTEMA DE <span>MERCADO VIRTUAL</span></h1>
            <!-- <span class="slogan">admin template</span> -->
            
<!--             <div class="search">
            	<form action="" method="post">
                	<input type="text" name="keyword" id="keyword" value="Enter keyword(s)" />
                    <button class="submitbutton"></button>
                </form>
            </div> --><!--search-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
        	<div class="notification">
                <a class="count" href="ajax/noti.php"><span>
                    <?php 
                        include("conectar.php");
                        $link=Conectarse();
                        $rs=@mysqli_query($link, "set names utf8");
                        $fila=@mysqli_fetch_array($res);
                        $sql="SELECT count(*) FROM mensajes WHERE estado =0"; 
                        $res=@mysqli_query($link, $sql);
                        $row1=@mysqli_fetch_array($res);
                        echo $row1[0];
                     ?>
                </span></a>
        	</div>
            <div class="userinfo">
            	<img src="images/thumbs/admin.png" alt="" />
                <span><!-- Administrador  -->
                    <?php //echo " ".$_SESSION["s_cod"]; 
                        $rs=@mysqli_query($link, "set names utf8");
                        $fila=@mysqli_fetch_array($res);
                        $sql="SELECT login, nombre, correo 
                              FROM usuario 
                              WHERE cod_usuario=".$_SESSION["s_cod"]; 
                        $res=@mysqli_query($link, $sql);
                        $row1=@mysqli_fetch_array($res);
                        echo $row1[0];     
                    ?>
                </span>
            </div><!--userinfo-->
            
            <div class="userinfodrop">
            	<div class="avatar">
                	<a href=""><img src="images/thumbs/adminbig.png" alt="" /></a>
                </div><!--avatar-->
                <div class="userdata">
                	<h4><?php echo $row1['nombre']; ?></h4><br>
                    <span class="email"><?php echo $row1['correo']; ?></span>
                    <ul>
                    	<li><a href="#">Editar cuenta</a></li>
                        <li><a href="#">Configuración</a></li>
                        <!-- <li><a href="salir.php">Salir</a></li> -->
                        <li><a href="#" onclick="salir();return false;">Salir</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
