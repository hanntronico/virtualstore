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
  jQuery('.notibar .close').click(function(){
    jQuery(this).parent().fadeOut(function(){
      jQuery(this).remove();
    });
  });

  function cerrar() {
    document.getElementById('equis').click();
  }

  jQuery( "#fec_ini" ).datepicker();
  jQuery( "#fec_fin" ).datepicker();

  function envia_rpt1() {
  	
  }

  function envia_rpt() {
  	var fini= document.frmrpt04.fec_ini.value;
  	var ffin= document.frmrpt04.fec_fin.value;
  	var parabus = document.frmrpt04.txtparabus.value;

  	var opc01 = document.getElementsByName("opt1");
		var res = parabus.split(" ");
  	
		if (opc01[0].checked) {
			var content = jQuery("#view_rpt");
			content.fadeIn('slow').load("proc_rpt05.php?pr1=all");
		};




  	if (opc01[1].checked) {

	  	if (parabus=="") {
	  		alert("Por favor ingrese proveedor");
	  		document.frmrpt04.txtparabus.focus();
	  		return false;
  		};

			var param="";
			for (var i = 0; i < res.length; i++) {
				param = param + res[i] + '20%';
			};

			var content = jQuery("#view_rpt");
			content.fadeIn('slow').load("proc_rpt05.php?pr1="+param.substring(0,(param.length-3)));
	  };	

  	if (opc01[2].checked) {
	  	
	  	if (fini=="") {
	  		alert("Por favor ingrese fecha inicial");
	  		document.frmrpt04.fec_ini.focus();
	  		return false;
	  	};

	  	if (ffin=="") {
	  		alert("Por favor ingrese fecha final");
	  		document.frmrpt04.fec_fin.focus();
	  		return false;
	  	};

	  	var str=document.frmrpt04.fec_ini.value;
   		var n=str.split("/",3);
			var fec_in = n[2]+"-"+n[1]+"-"+n[0];

			var str=document.frmrpt04.fec_fin.value;
   		var m=str.split("/",3);
			var fec_fn = m[2]+"-"+m[1]+"-"+m[0];

			var f_ini = Date.parse(fec_in.toString());
			var f_fin = Date.parse(fec_fn.toString());

		if(Number(f_ini)>Number(f_fin)){
	 		alert("Por favor ingrese periodo de días válido");
			document.frmrpt04.fec_ini.focus();
			return false;
		}

	  	var content = jQuery("#view_rpt");
			content.fadeIn('slow').load("proc_rpt05.php?pr1=em&fci="+fini+"&fcf="+ffin);
  	};

  	if (opc01[3].checked) {
	  	
	  	if (fini=="") {
	  		alert("Por favor ingrese fecha inicial");
	  		document.frmrpt04.fec_ini.focus();
	  		return false;
	  	};

	  	if (ffin=="") {
	  		alert("Por favor ingrese fecha final");
	  		document.frmrpt04.fec_fin.focus();
	  		return false;
	  	};

	  	var str=document.frmrpt04.fec_ini.value;
   		var n=str.split("/",3);
			var fec_in = n[2]+"-"+n[1]+"-"+n[0];

			var str=document.frmrpt04.fec_fin.value;
   		var m=str.split("/",3);
			var fec_fn = m[2]+"-"+m[1]+"-"+m[0];

			var f_ini = Date.parse(fec_in.toString());
			var f_fin = Date.parse(fec_fn.toString());

		if(Number(f_ini)>Number(f_fin)){
	 		alert("Por favor ingrese periodo de días válido");
			document.frmrpt04.fec_ini.focus();
			return false;
		}

	  	var content = jQuery("#view_rpt");
			content.fadeIn('slow').load("proc_rpt05.php?pr1=vnc&fci="+fini+"&fcf="+ffin);
  	};

  }

 	function verprint(url) {
		var fini= document.frmrpt04.fec_ini.value;
  		var ffin= document.frmrpt04.fec_fin.value;
  		var parabus = document.frmrpt04.txtparabus.value;
		// alert(parabus);
	  	var opc01 = document.getElementsByName("opt1");
		
		if (opc01[0].checked) {
			printview2('print_rpt05.php?pr1=all');
		};

	  	if (opc01[1].checked) {
			printview2('print_rpt05.php?pr1='+parabus);
	  	};	

	  	if (opc01[2].checked) {
	  		printview2('print_rpt05.php?pr1=em&fci='+fini+'&fcf='+ffin);
	  	};

	  	if (opc01[3].checked) {
	  		printview2('print_rpt05.php?pr1=vnc&fci='+fini+'&fcf='+ffin);
	  	};
	}	
  
</script>

<?php
	include 'funciones.php';
  include("conectar.php");
  $link=Conectarse();
  $pag = "REPORTE DE PERCEPCIONES";
?>

<body>
	<div id="fra_crud">
	  <div class="contenttitle2">
	    <h3><?php echo strtoupper($pag); ?></h3>
	  </div><!--contenttitle-->
	  <br>

	  <form action="emitir.php" method="post" enctype="multipart/form-data" name="frmrpt04" onSubmit="return validar(this)">
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
						        	<input type="radio" name="opt1" value="1" checked="checked">Todas las percepciones
						         	&nbsp;&nbsp;&nbsp;
						         	<input type="radio" name="opt1" value="2">Por Proveedor
						        	&nbsp;&nbsp;&nbsp;
						        	<input type="radio" name="opt1" value="3">Por Fecha de Emisión
						        	&nbsp;&nbsp;&nbsp;
						        	<input type="radio" name="opt1" value="4">Por Fecha de Vencimiento
						        	&nbsp;&nbsp;&nbsp;
						        </td>
				      		</tr>    	

						      <tr>
						        <td colspan="2">
						         	<label>Ingrese proveedor : </label>&nbsp;&nbsp;&nbsp;
						         	<span class="field">
						           	<input type="text" id="txtparabus" name="txtparabus" class="smallinput" style="width:30%;" />
						          </span>	
						          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						         	<label>Fecha Inicio : </label>&nbsp;&nbsp;&nbsp;
						          <span class="field">
						            <input type="text" id="fec_ini" name="fec_ini" class="width100" />
						          </span>
						          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						         	<label>Fecha Inicio : </label>&nbsp;&nbsp;&nbsp;
					            <span class="field">
					            	<input type="text" id="fec_fin" name="fec_fin" class="width100" />
						          </span>
						        </td>
						      </tr> 

						      <tr>
						      	<td colspan="2">
							      	<p class="stdformbutton">
						            <input type="button" name="aceptar"  value="   Aceptar   " class="stdbtn btn_orange" onclick="envia_rpt();">
						            &nbsp;&nbsp;&nbsp;
						            <input type="button" name="imprimir" value="  Imprimir  " class="stdbtn btn_orange" onclick="verprint('print_rpt01.php'); return false;">
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