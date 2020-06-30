<script type="text/javascript" src="js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.cookie.js"></script>

<script type="text/javascript" src="js/plugins/colorpicker.js"></script>

<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.slimscroll.js"></script>
<script type="text/javascript" src="js/plugins/charCount.js"></script>
<script type="text/javascript" src="js/plugins/ui.spinner.min.js"></script>
<script type="text/javascript" src="js/plugins/chosen.jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.alerts.js"></script>

<script type="text/javascript" src="js/custom/elements.js"></script>

<script type="text/javascript" src="js/custom/forms.js"></script>
<script type="text/javascript" src="js/custom/tables.js"></script>
<script type="text/javascript" src="js/custom/dashboard.js"></script>

<script type="text/javascript">

  jQuery( "#fec_ini" ).datepicker();
  jQuery( "#fec_fin" ).datepicker();

  function envia_rpt() {
  // 	var fini= document.frmrpt01.fec_ini.value;
  // 	var ffin= document.frmrpt01.fec_fin.value;
  	var opc01 = document.getElementsByName("opt1");
  	var parabus = document.frmrpt03.txtparabus.value;
		var res = parabus.split(" ");

		// var content = jQuery("#view_rpt");
		// content.fadeIn('slow').load("proc_rpt02.php");
  	
  	if (opc01[0].checked) {

		var content = jQuery("#view_rpt");
		content.fadeIn('slow').load("proc_rpt03.php?band=1");
  	
  	};	

  	if (opc01[1].checked) {
	  	
		var content = jQuery("#view_rpt");
		content.fadeIn('slow').load("proc_rpt03.php?band=2");
  	};

  	if (opc01[2].checked) {
		var content = jQuery("#view_rpt");
		content.fadeIn('slow').load("proc_rpt03.php?band=3");
  	};

  	if (opc01[3].checked) {

	  	if (parabus=="") {
	  		alert("Por favor ingrese producto: código o descripción");
	  		document.frmrpt03.txtparabus.focus();
	  		return false;
  		};

  		var param="";
			for (var i = 0; i < res.length; i++) {
				param = param + res[i] + '%20';
			};


		var content = jQuery("#view_rpt");
		content.fadeIn('slow').load("proc_rpt_margen.php?pr1="+param.substring(0,(param.length-3)));
  	};

  }

 	function verprint(url) {
			// var fini= document.frmrpt01.fec_ini.value;
	  	// var ffin= document.frmrpt01.fec_fin.value;
  		var parabus = document.frmrpt03.txtparabus.value;
			// // alert(parabus);
	  	var opc01 = document.getElementsByName("opt1");
		
	  	if (opc01[0].checked) {
				// printview('print_rpt01.php?pr1='+parabus);
			printview2('print_rpt03.php?band=1');
	  	};	

	  	if (opc01[1].checked) {
	  		// printview('print_rpt01.php?fci='+fini+'&fcf='+ffin);
	  		printview2('print_rpt03.php?band=2');
	  	};

	  	if (opc01[2].checked) {
	  		printview2('print_rpt03.php?band=3');
  		};

  		if (opc01[3].checked) {

		  	if (parabus=="") {
		  		alert("Por favor ingrese producto: código o descripción");
		  		document.frmrpt03.txtparabus.focus();
		  		return false;
	  		};

	   		printview2('print_rpt_margen.php?pr1='+parabus);
  		};
	}	
  
</script>

<?php include 'funciones.php'; ?>

<body>

<?php
  include("conectar.php");
  $link=Conectarse();
  $pag = "REPORTE DE PRODUCTOS";

  $pag_org = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
  //verificamos si en la ruta nos han indicado el directorio en el que se encuentra
  if ( strpos($pag_org, '/') !== FALSE )
      //de ser asi, lo eliminamos, y solamente nos quedamos con el nombre y su extension
  $pag_org = array_pop(explode('/', $pag_org));

 
  $pag_sext=preg_replace('/\.php$/', '' ,$pag_org);

 
  ?>

<div id="fra_crud">
      
  <div class="contenttitle2">
  	<h3><?php echo strtoupper($pag); ?></h3>
  </div><!--contenttitle-->
  <br>

  <form action="#" method="post" enctype="multipart/form-data" name="frmrpt03" onSubmit="return false;">
    <table class="form_crud">
		  <thead>
		    <tr>
		      <th colspan="3">
		        DATOS DEL REPORTE         
		      </th>
		    </tr>
		  </thead>
      <tbody>
      	<tr>
					<td>
			     
			      <table cellpadding="0" cellspacing="0" border="0" class="stdtable">
			        <tbody>
			          <tr>
			            <td colspan="2">
			            	<input type="radio" name="opt1" value="1" checked="checked">Productos más vendidos
			            	&nbsp;&nbsp;&nbsp;
			            	<input type="radio" name="opt1" value="2">Productos sin stock
			            	&nbsp;&nbsp;&nbsp;
			            	<input type="radio" name="opt1" value="3">Productos con stock mínimo&nbsp;&nbsp;&nbsp;
			            	<input type="radio" name="opt1" value="4">Productos por margen
			            	&nbsp;&nbsp;&nbsp;
			            </td>
			          </tr>    	

			          <tr>
			              <td colspan="2">
			              	<label>Ingrese cliente : </label>&nbsp;&nbsp;&nbsp;
				            	<span class="field">
				              	<input type="text" id="txtparabus" name="txtparabus" class="smallinput" style="width:30%;" />
				              </span>	
<!-- 				              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			              	<label>Fecha Inicio : </label>&nbsp;&nbsp;&nbsp;
			                <span class="field">
			                  <input type="text" id="fec_ini" name="fec_ini" class="width100" />
			                </span>
			                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			               	<label>Fecha Inicio : </label>&nbsp;&nbsp;&nbsp;
			                <span class="field">
			                  <input type="text" id="fec_fin" name="fec_fin" class="width100" />
			                </span> -->
			              </td>
			          </tr> 

			          <tr>
			            <td colspan="2">
				            <p class="stdformbutton">

				             	<input type="button" name="aceptar"  value="   Aceptar   " class="stdbtn btn_orange" onclick="envia_rpt();">
				              &nbsp;&nbsp;&nbsp;

				              <input type="button" name="imprimir" value="  Imprimir  " class="stdbtn btn_orange" onclick="verprint('print_rpt02.php'); return false;">
				              &nbsp;&nbsp;&nbsp;	

 		                  <input type="hidden" value="<?php echo $_GET["id"]; ?>" name="id">
				            </p>
			            </td>
			          </tr>
			        </tbody>
			      </table>

		    	</td>  
      	</tr>
      </tbody>
    </table>
  </form>
</div>

    <div id="fra_crud"><div id="view_rpt"></div></div>

</body>
</html>