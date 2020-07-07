<nav class="navbar navbar-expand-lg navbar-dark bg-primary logo" style="padding-top: 10px; padding-bottom: 10px;"> 
       
      <div class="container">
          
        <a class="navbar-brand" href="#">
					<img src="img/logo2.png">
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
			      <li class="nav-item px-5">
			        <!-- <a class="nav-link" href="#">Catálogo</a> -->
			      </li>				      		      			      

			      <li>
			      	<!-- <form class="form-inline my-2 my-lg-0 busqueda"> -->
<!-- 			      		<input class="form-control mr-sm-2" type="text" placeholder="Buscar" id="txtbuscar" aria-label="Search" onkeydown="checkKey(event,'txtbuscar');" autocomplete="off">
			      		
			      		<button class="btn btn-secondary my-2 my-sm-0" type="submit" name="btnbus" id="btnbus" onclick="srch()">Buscar</button> -->
			    		<!-- </form> -->

			    		<div class="form-inline my-2 my-lg-0 busqueda">
	         			<input class="form-control mr-sm-2" type="text" name="txtbuscar" id="txtbuscar" placeholder="Busca" onkeydown="checkKey(event,'txtbuscar');" autocomplete="off" >
	              <input class="btn btn-secondary my-2 my-sm-0" type="button" name="btnbus" id="btnbus" value="Buscar" onclick="srch()">
	              <!-- <div id="bus_cont"></div>  -->
			    		</div>

			      </li>
  		    </ul>
			  </div>
    </div>    

</nav>