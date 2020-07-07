<?php
session_start();
date_default_timezone_set('America/Lima');
?>

<style type="text/css" media="screen">
	.datepicker {
  padding: 4px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  direction: ltr;
  /*.dow {
		border-top: 1px solid #ddd !important;
	}*/

}

.datepicker-inline {
  width: 220px;
}

.datepicker.datepicker-rtl {
  direction: rtl;
}

.datepicker.datepicker-rtl table tr td span {
  float: right;
}

.datepicker-dropdown {
  top: 0;
  left: 0;
}

.datepicker-dropdown:before {
  content: '';
  display: inline-block;
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-bottom: 7px solid #ccc;
  border-bottom-color: rgba(0, 0, 0, 0.2);
  position: absolute;
  top: -7px;
  left: 6px;
}

.datepicker-dropdown:after {
  content: '';
  display: inline-block;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #ffffff;
  position: absolute;
  top: -6px;
  left: 7px;
}

.datepicker>div {
  display: none;
}

.datepicker.days div.datepicker-days {
  display: block;
}

.datepicker.months div.datepicker-months {
  display: block;
}

.datepicker.years div.datepicker-years {
  display: block;
}

.datepicker table {
  margin: 0;
}

.datepicker td,
.datepicker th {
  text-align: center;
  width: 20px;
  height: 20px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  border: none;
}

.table-striped .datepicker table tr td,
.table-striped .datepicker table tr th {
  background-color: transparent;
}

.datepicker table tr td.day:hover {
  background: #eeeeee;
  cursor: pointer;
}

.datepicker table tr td.old,
.datepicker table tr td.new {
  color: #999999;
}

.datepicker table tr td.disabled,
.datepicker table tr td.disabled:hover {
  background: none;
  color: #999999;
  cursor: default;
}

.datepicker table tr td.today,
.datepicker table tr td.today:hover,
.datepicker table tr td.today.disabled,
.datepicker table tr td.today.disabled:hover {
  background-color: #fde19a;
  background-image: -moz-linear-gradient(top, #fdd49a, #fdf59a);
  background-image: -ms-linear-gradient(top, #fdd49a, #fdf59a);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fdd49a), to(#fdf59a));
  background-image: -webkit-linear-gradient(top, #fdd49a, #fdf59a);
  background-image: -o-linear-gradient(top, #fdd49a, #fdf59a);
  background-image: linear-gradient(top, #fdd49a, #fdf59a);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fdd49a', endColorstr='#fdf59a', GradientType=0);
  border-color: #fdf59a #fdf59a #fbed50;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  color: #000 !important;
}

.datepicker table tr td.today:hover,
.datepicker table tr td.today:hover:hover,
.datepicker table tr td.today.disabled:hover,
.datepicker table tr td.today.disabled:hover:hover,
.datepicker table tr td.today:active,
.datepicker table tr td.today:hover:active,
.datepicker table tr td.today.disabled:active,
.datepicker table tr td.today.disabled:hover:active,
.datepicker table tr td.today.active,
.datepicker table tr td.today:hover.active,
.datepicker table tr td.today.disabled.active,
.datepicker table tr td.today.disabled:hover.active,
.datepicker table tr td.today.disabled,
.datepicker table tr td.today:hover.disabled,
.datepicker table tr td.today.disabled.disabled,
.datepicker table tr td.today.disabled:hover.disabled,
.datepicker table tr td.today[disabled],
.datepicker table tr td.today:hover[disabled],
.datepicker table tr td.today.disabled[disabled],
.datepicker table tr td.today.disabled:hover[disabled] {
  background-color: #fdf59a;
}

.datepicker table tr td.today:active,
.datepicker table tr td.today:hover:active,
.datepicker table tr td.today.disabled:active,
.datepicker table tr td.today.disabled:hover:active,
.datepicker table tr td.today.active,
.datepicker table tr td.today:hover.active,
.datepicker table tr td.today.disabled.active,
.datepicker table tr td.today.disabled:hover.active {
  background-color: #fbf069 \9;
}

.datepicker table tr td.active,
.datepicker table tr td.active:hover,
.datepicker table tr td.active.disabled,
.datepicker table tr td.active.disabled:hover {
  background-color: #006dcc;
  background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
  background-image: -ms-linear-gradient(top, #0088cc, #0044cc);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
  background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
  background-image: -o-linear-gradient(top, #0088cc, #0044cc);
  background-image: linear-gradient(top, #0088cc, #0044cc);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc', endColorstr='#0044cc', GradientType=0);
  border-color: #0044cc #0044cc #002a80;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  color: #fff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}

.datepicker table tr td.active:hover,
.datepicker table tr td.active:hover:hover,
.datepicker table tr td.active.disabled:hover,
.datepicker table tr td.active.disabled:hover:hover,
.datepicker table tr td.active:active,
.datepicker table tr td.active:hover:active,
.datepicker table tr td.active.disabled:active,
.datepicker table tr td.active.disabled:hover:active,
.datepicker table tr td.active.active,
.datepicker table tr td.active:hover.active,
.datepicker table tr td.active.disabled.active,
.datepicker table tr td.active.disabled:hover.active,
.datepicker table tr td.active.disabled,
.datepicker table tr td.active:hover.disabled,
.datepicker table tr td.active.disabled.disabled,
.datepicker table tr td.active.disabled:hover.disabled,
.datepicker table tr td.active[disabled],
.datepicker table tr td.active:hover[disabled],
.datepicker table tr td.active.disabled[disabled],
.datepicker table tr td.active.disabled:hover[disabled] {
  background-color: #0044cc;
}

.datepicker table tr td.active:active,
.datepicker table tr td.active:hover:active,
.datepicker table tr td.active.disabled:active,
.datepicker table tr td.active.disabled:hover:active,
.datepicker table tr td.active.active,
.datepicker table tr td.active:hover.active,
.datepicker table tr td.active.disabled.active,
.datepicker table tr td.active.disabled:hover.active {
  background-color: #003399 \9;
}

.datepicker table tr td span {
  display: block;
  width: 23%;
  height: 54px;
  line-height: 54px;
  float: left;
  margin: 1%;
  cursor: pointer;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}

.datepicker table tr td span:hover {
  background: #eeeeee;
}

.datepicker table tr td span.disabled,
.datepicker table tr td span.disabled:hover {
  background: none;
  color: #999999;
  cursor: default;
}

.datepicker table tr td span.active,
.datepicker table tr td span.active:hover,
.datepicker table tr td span.active.disabled,
.datepicker table tr td span.active.disabled:hover {
  background-color: #006dcc;
  background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
  background-image: -ms-linear-gradient(top, #0088cc, #0044cc);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
  background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
  background-image: -o-linear-gradient(top, #0088cc, #0044cc);
  background-image: linear-gradient(top, #0088cc, #0044cc);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc', endColorstr='#0044cc', GradientType=0);
  border-color: #0044cc #0044cc #002a80;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  color: #fff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}

.datepicker table tr td span.active:hover,
.datepicker table tr td span.active:hover:hover,
.datepicker table tr td span.active.disabled:hover,
.datepicker table tr td span.active.disabled:hover:hover,
.datepicker table tr td span.active:active,
.datepicker table tr td span.active:hover:active,
.datepicker table tr td span.active.disabled:active,
.datepicker table tr td span.active.disabled:hover:active,
.datepicker table tr td span.active.active,
.datepicker table tr td span.active:hover.active,
.datepicker table tr td span.active.disabled.active,
.datepicker table tr td span.active.disabled:hover.active,
.datepicker table tr td span.active.disabled,
.datepicker table tr td span.active:hover.disabled,
.datepicker table tr td span.active.disabled.disabled,
.datepicker table tr td span.active.disabled:hover.disabled,
.datepicker table tr td span.active[disabled],
.datepicker table tr td span.active:hover[disabled],
.datepicker table tr td span.active.disabled[disabled],
.datepicker table tr td span.active.disabled:hover[disabled] {
  background-color: #0044cc;
}

.datepicker table tr td span.active:active,
.datepicker table tr td span.active:hover:active,
.datepicker table tr td span.active.disabled:active,
.datepicker table tr td span.active.disabled:hover:active,
.datepicker table tr td span.active.active,
.datepicker table tr td span.active:hover.active,
.datepicker table tr td span.active.disabled.active,
.datepicker table tr td span.active.disabled:hover.active {
  background-color: #003399 \9;
}

.datepicker table tr td span.old {
  color: #999999;
}

.datepicker th.switch {
  width: 145px;
}

.datepicker thead tr:first-child th,
.datepicker tfoot tr:first-child th {
  cursor: pointer;
}

.datepicker thead tr:first-child th:hover,
.datepicker tfoot tr:first-child th:hover {
  background: #eeeeee;
  /*background: #004A7F;*/
}

.datepicker .cw {
  font-size: 10px;
  width: 12px;
  padding: 0 2px 0 5px;
  vertical-align: middle;
}

.datepicker thead tr:first-child th.cw {
  cursor: default;
  background-color: transparent;
}

.input-append.date .add-on i,
.input-prepend.date .add-on i {
  display: block;
  cursor: pointer;
  width: 16px;
  height: 16px;
}
</style>


<SCRIPT LANGUAGE="JavaScript">
<!--

function imprimir() {
	ventana=window.open("imprimir.php","","resizable=NO,scrollbars=yes,HEIGHT=600,WIDTH=600,LEFT=100,TOP=200");
}

// -->
</SCRIPT>

<!-- <link rel="stylesheet" href="../../funciones/style.css" type="text/css"> -->

<script>

function letras(e)
{ // 1

tecla = (document.all) ? e.keyCode : e.which; // 2
if (tecla==8) return true; // 3
patron =/[A-Za-z\s\Ñ\ñ\Á\É\Í\Ó\Ú\á\é\í\ó\ú\.\,]/; // 4
te = String.fromCharCode(tecla); // 5
return patron.test(te); // 6
} 

function numeros(n)
{ // 

tecla = (document.all) ? n.keyCode : n.which; // 2
if (tecla==8) return true; // 3
patron =/[0\1-9\-]/; // 4
te = String.fromCharCode(tecla); // 5
return patron.test(te); // 6
} 


function confirma(producto)
{
	if (confirm("Relamente desea eliminar "+producto+" de su carrito de compras?" ))
	{
		return true;
	}
	return false;

}

function ver_factura() {
 	if (document.frm02.chkfac.checked) {
    	var content = jQuery("#raz_soc");
    	content.fadeIn('slow').load("factura.php");
 	}else	{
		var content = jQuery("#raz_soc");
    	content.fadeOut('slow').load("factura.php");
 	}	
 		// alert(document.frm02.chkcomp[1].checked);

 // 	if (document.frm02.chkcomp[1].checked == true) {
 //      var content = jQuery("#raz_soc");
 //      content.fadeIn('slow').load("factura.php");
 // 	}	

	// if (document.frm02.chkcomp[1].checked == false) {
 //      var content = jQuery("#raz_soc");
 //      content.fadeOut('slow').load("factura.php");
 // 	} 

 // 	if (document.frm02.chkcomp[0].checked == true) {
 // 			return false;
 // 	} 	

} 

function ver_direc() {
	// alert(document.frm02.swt.value);
	// document.direc2.css.visibility('visible');
	// document.getElementById("direc2").style.visibility="visible";
	// var valor 
	// alert(document.frm02.swt.value);

	if (document.frm02.swt.value=='F'){
		document.frm02.swt.value="V";
		var content = jQuery("#direc2");
    	content.fadeIn('slow').load("tel_dir.php");
	}
	else{
		if(document.frm02.swt.value=='V')
		{
		 document.frm02.swt.value="F";	
		 var content = jQuery("#direc2");
    	content.fadeOut('slow').load("tel_dir.php");
		}

	}


}

function ver_nom2() {
	if (document.frm02.swtnom.value=='F'){
		document.frm02.swtnom.value="V";
		var content = jQuery("#nom2");
    content.fadeIn('slow').load("txtnombre2.php");
	}
	else{
		if(document.frm02.swtnom.value=='V')
		{
		document.frm02.swtnom.value="F";	
		var content = jQuery("#nom2");
   		// content.fadeOut('slow').load("txtnombre2.php");
   	content.fadeOut('slow');
		}
	}
}

function recalcula () {
	frm01.accion[0].click();
}

function valid_form() {

	if (document.frm02.chktipago[0].checked!=false || document.frm02.chktipago[1].checked!=false){

			if (document.frm02.fecha.value!="") {
				
				var f = new Date();
				var fec_ped = f.getFullYear() + "-" + (f.getMonth() +1) + "-" +  f.getDate();
				
				var str=document.frm02.fecha.value;
			  var n=str.split("/",3);
				var fec_ent = n[2]+"-"+n[1]+"-"+n[0];

				var ent = Date.parse(fec_ent.toString());
				var ped = Date.parse(fec_ped.toString());

				if(ent < ped){
			 		alert("Por favor ingrese una fecha válida");
					document.frm02.fecha.focus();
					return false;
				} else {

					if(ent == ped){ 
							var horasel=document.frm02.cbohora.value.toString().substring(0,2);
							var ihorasel=parseInt(horasel);
							var hora_act=parseInt(f.getHours());

							if (ihorasel<hora_act+2) {
								alert("Seleccione una hora válida por favor.");
								return false;
							}else {

								if (document.frm02.swtnom.value=='V') {
									if (document.frm02.txtnom2.value=="") {
										alert("Por favor ingrese nombre de entrega 2");
										document.frm02.txtnom2.focus();
										return false;
									}
								}	

								
								if (document.frm02.swt.value=='F') {
									// alert(document.frm02.txttelf.value);
									if (document.frm02.txttelf.value=="") {
										alert("Por favor ingrese teléfono");
										document.frm02.txttelf.focus();
										return false;
									}
									
									if (document.frm02.txtdir.value=="") {
										alert("Por favor ingrese calle correctamente");
										document.frm02.txtdir.focus();
										return false;
									}		
									
									if (document.frm02.txtzona.value=="") {
										alert("Por favor ingrese zona correctamente");
										document.frm02.txtzona.focus();
										return false;
									}								
								}else{
									
									if (document.frm02.txttelf2.value=="") {
											alert("Por favor ingrese teléfono 2");
											document.frm02.txttelf2.focus();
											return false;
										}

										if (document.frm02.txtdir2.value=="") {
											alert("Por favor ingrese calle 2 correctamente");
											document.frm02.txtdir2.focus();
											return false;
										}	

										if (document.frm02.txtzona2.value=="") {
											alert("Por favor ingrese zona 2 correctamente");
											document.frm02.txtzona2.focus();
											return false;
										}
								}
									
								if (document.frm02.chkfac.checked) {
									if (document.frm02.txtrz.value=="") {
										alert("Por favor ingrese razón social");
										document.frm02.txtrz.focus();
										return false;
									}

									if (document.frm02.txtruc.value=="") {
										alert("Por favor ingrese RUC");
										document.frm02.txtruc.focus();
										return false;
									}

									if (document.frm02.txtruc.value.length!=11) {
										alert("Por favor ingrese RUC válido");
										return false;
									}
								}
								// alert("ok pasele"); return false;

								if (confirm("Seguro que desea finalizar su compra?")) {
									return true;	
								}else{
									return false;
								}								
					
							}

					}else {
/***************************************  OJO  *********************************************/
								if (document.frm02.swtnom.value=='V') {
									if (document.frm02.txtnom2.value=="") {
										alert("Por favor ingrese nombre de entrega 2");
										document.frm02.txtnom2.focus();
										return false;
									}
								}	

								
								if (document.frm02.swt.value=='F') {

									if (document.frm02.txttelf.value=="") {
										alert("Por favor ingrese teléfono");
										document.frm02.txttelf.focus();
										return false;
									}
									
									if (document.frm02.txtdir.value=="") {
										alert("Por favor ingrese calle correctamente");
										document.frm02.txtdir.focus();
										return false;
									}		
									
									if (document.frm02.txtzona.value=="") {
										alert("Por favor ingrese zona correctamente");
										document.frm02.txtzona.focus();
										return false;
									}								
								}else{
									
									if (document.frm02.txttelf2.value=="") {
											alert("Por favor ingrese teléfono 2");
											document.frm02.txttelf2.focus();
											return false;
										}

										if (document.frm02.txtdir2.value=="") {
											alert("Por favor ingrese calle 2 correctamente");
											document.frm02.txtdir2.focus();
											return false;
										}	

										if (document.frm02.txtzona2.value=="") {
											alert("Por favor ingrese zona 2 correctamente");
											document.frm02.txtzona2.focus();
											return false;
										}
								}
									
								if (document.frm02.chkfac.checked) {
									if (document.frm02.txtrz.value=="") {
										alert("Por favor ingrese razón social");
										document.frm02.txtrz.focus();
										return false;
									}

									if (document.frm02.txtruc.value=="") {
										alert("Por favor ingrese RUC");
										document.frm02.txtruc.focus();
										return false;
									}

									if (document.frm02.txtruc.value.length!=11) {
										alert("Por favor ingrese RUC válido");
										return false;
									}
								}

								if (confirm("Seguro que desea finalizar su compra?")) {
									return true;	
								}else{
									return false;
								}
/*******************************************************************************************/
					}

				}


			}else{
				alert("Por favor ingrese fecha");
				document.frm02.fecha.focus();
				return false;
			}

		}else {
			alert("Por favor seleccionar tipo de pago");
			document.frm02.chktipago[0].focus();
			return false;			
		}


}

function valid_form1() {

	if (document.frm02.chktipago[0].checked==false && document.frm02.chktipago[1].checked==false){
			alert("Por favor seleccionar tipo de pago");
			document.frm02.chktipago[0].focus();
			return false;
		} 


	if (document.frm02.fecha.value=="") {
		alert("Por favor ingrese fecha");
		document.frm02.fecha.focus();
		return false;
	
	} else {
			// console.log("Desea finalizar la compra? - 1");
			// return false;

			var f = new Date();
			var fec_ped = f.getFullYear() + "-" + (f.getMonth() +1) + "-" +  f.getDate();
			
			var str=document.frm02.fecha.value;
		  var n=str.split("/",3);
			var fec_ent = n[2]+"-"+n[1]+"-"+n[0];

			var ent = Date.parse(fec_ent.toString());
			var ped = Date.parse(fec_ped.toString());

			// alert(ent+""+ped);
			if(ent < ped){
		 		alert("Por favor ingrese una fecha válida");
				document.frm02.fecha.focus();
				return false;
			}

			if(ent == ped){ 

				var horasel=document.frm02.cbohora.value.toString().substring(0,2);
				var ihorasel=parseInt(horasel);
				var hora_act=parseInt(f.getHours());

				if (ihorasel<hora_act+2) {
					alert("Seleccione una hora válida por favor.");
					return false;
				}

				if (document.frm02.txtnom.value=="") {
					alert("Por favor ingrese fecha");
					// document.frm02.txtnom.focus();
					return false;
				}	
				// console.log("Desea finalizar la compra? - 2");
				// return false;
			}


			if (document.frm02.swtnom.value=='V') {
				if (document.frm02.txtnom2.value=="") {
					alert("Por favor ingrese nombre de entrega 2");
					document.frm02.txtnom2.focus();
					return false;
				}
			}

			if (document.frm02.chkfac.checked) {
				if (document.frm02.txtrz.value=="") {
					alert("Por favor ingrese razón social");
					document.frm02.txtrz.focus();
					return false;
				}

				if (document.frm02.txtruc.value=="") {
					alert("Por favor ingrese RUC");
					document.frm02.txtruc.focus();
					return false;
				}

				if (document.frm02.txtruc.value.length!=11) {
					alert("Por favor ingrese RUC válido");
					return false;
				}
				
		}
			

			if (document.frm02.swt.value=='F') {

				if (document.frm02.txttelf.value=="") {
					alert("Por favor ingrese teléfono");
					document.frm02.txttelf.focus();
					return false;
				}

				if (document.frm02.txtdir.value=="") {
					alert("Por favor ingrese calle correctamente");
					document.frm02.txtdir.focus();
					return false;
				}	

				if (document.frm02.txtzona.value=="") {
					alert("Por favor ingrese zona correctamente");
					document.frm02.txtzona.focus();
					return false;
				}
			}


			if (document.frm02.swt.value=='V') {

				if (document.frm02.txttelf2.value=="") {
					alert("Por favor ingrese teléfono 2");
					document.frm02.txttelf2.focus();
					return false;
				}

				if (document.frm02.txtdir2.value=="") {
					alert("Por favor ingrese calle 2 correctamente");
					document.frm02.txtdir2.focus();
					return false;
				}	

				if (document.frm02.txtzona2.value=="") {
					alert("Por favor ingrese zona 2 correctamente");
					document.frm02.txtzona2.focus();
					return false;
				}
			} 

	} 
	// else {

	// 	console.log("Desea finalizar la compra? - 2");
	//   return false;
	// }  

	// console.log("Desea finalizar la compra? - 2");
	// return false;







	// if (confirm("Seguro que desea finalizar su compra?")) {
	// 	return true;	
	// }else{
	// 	return false;
	// }


	// var hora_ped = f.getHours();
	// alert(hora_ped);
	// alert(document.frm02.cbohora.value.toString().substring(0,2));

	// if(ent == ped){
	// 	var hora_act = f.getHours();
		
	// 	if (parseInt(hora_act)<=8) {
	// 		var hora = 8;
	// 		document.frm02.cbohora.value = (hora+2).toString()+":00";
	// 	}else if (parseInt(hora_act)<=18) {
	// 		// var strhora = document.frm02.cbohora.value.toString().substring(0,2);
	// 		// alert(hora_act.toString());
	// 		var hora = parseInt(hora_act);
	// 		document.frm02.cbohora.value = (hora+2).toString()+":00";
	// 	// alert((hora+2).toString());

	// 	}
	// }
		
	return true;
}

</script>


<div id="carrito">


<?php 
	$k=$_SESSION["s_prod"];

	if (count($k)==0) 
	{
		echo "<div id='msnvacio'>
				TU CANASTA DE COMPRAS ESTÁ VACÍA <br>
				<a href='principal.php'>Retornar a ver productos</a>
             </div>";
		// exit();
	}else{

		foreach( $k as $key => $value ){
		$acum+=$value;}

		if ($acum==0) {
			echo "<div id='msnvacio'>
				TU CANASTA DE COMPRAS ESTÁ VACÍA <br>
				<a href='principal.php'>Retornar a ver productos</a>
             </div>";
			// exit();
		}
	}

$k=$_SESSION["s_prod"];
$total=0;
// $id=autogenerado("pedidos","cod_pedido",6); 

// print_r($k);
// echo "contador : ".count($k);
// echo "<br>";

if (count($k)>0)
{
	foreach( $k as $key => $value ) 
	{	
		$sqlconsul = "SELECT * FROM producto WHERE cod_producto=".$key;
		$res=mysqli_query($link,$sqlconsul);
		$row=mysqli_fetch_array($res);
		$total+=($row["precio"]*$value);

		if ($value!=0) {
			$acum2+=$value;
		}
	}
  // echo $acum2;
} 

if ($acum2!=0) {

?>


<br>


<form class="p-2" name="frm02" action="finalizar.php" method="post" onsubmit="return valid_form();" style="border: 1px solid #1f2d3e; background-color: #D9ECFF;">

  <fieldset>
    <legend class="bg-info" style="color:#fff;">Datos adicionales del pedido</legend>

    <div class="form-group row mb-0">
      <label for="staticEmail" class="col-sm-2 col-form-label">
      	Codigo del pedido:  <?php echo $id; ?>
     	</label>
	    
	    <div class="col-sm-10">
	    	<div class="pull-right">
	    		<span style="color:#FF0000 ; font-size:18px; text-decoration:underline;">Total del pedido:  S/. <?php echo sprintf("%01.2f", $total); ?></span>
	    	</div>
	    </div>
    </div>


    <div class="form-group row mb-0">

      <label for="staticEmail" class="col-sm-2 col-form-label">
      	Tipo de pago:
     	</label>	
			
			<div class="col-sm-4 py-2">
	      <div class="form-check">
	        <label class="form-check-label">
	          <input type="radio" class="form-check-input" name="chktipago" id="optionsRadios1" value="E" checked="checked">
	          Efectivo contra entrega
	        </label>
	      </div>     
     	</div>

			<div class="col-sm-6 py-2">
	      <div class="form-check">
	        <label class="form-check-label">
	        	<input type="radio" class="form-check-input" name="chktipago" value="T" />
	        	Tarjeta de Crédito
	        	<select id="tarjeta" name="tarjeta" style="width: 110px;">
							<option value="vs">Visa</option>
							<option value="mc">Master Card</option>
							<option value="ae">Am. Ex</option>
							<option value="dc">Dinners</option>
	        	</select>
	        </label>
	      </div>
     	</div>

    </div>

    <div class="form-group row mb-0">
			    	
      <label for="staticEmail" class="col-sm-2 col-form-label">
      	Horario de entrega:
     	</label>

			<div class="col-sm-3 py-2 pl-0">
	      <div class="form-check">
	        <label class="form-check-label">
	        	Fecha: 
	          <?php //include 'calendario/calendario.php'; ?>

<script type="text/javascript">
	$(document).ready(function() {
	  $('#dp3').datepicker({
	    // format: 'yyyy-mm-dd',
	    format: 'dd/mm/yyyy',
	    autoclose: true
	  });
	});
</script>

<input type="text" id='dp3' name="fecha" class="campofecha" size="12" readonly>
	        	
<!-- <input class="span2" id='dp3' size="16" type="text"> -->


	        </label>
	      </div>     
     	</div>     		

			<div class="col-sm-2 py-2 pl-0">
	      <div class="form-check">
	        <label class="form-check-label">
					Hora:
					<select name="cbohora" style="width: 80px;">
						<option value="07:00">07:00</option>
						<option value="08:00">08:00</option>
						<option value="09:00">09:00</option>
						<option value="10:00">10:00</option>
						<option value="11:00">11:00</option>
						<option value="12:00">12:00</option>
						<option value="13:00">13:00</option>
						<option value="14:00">14:00</option>
						<option value="15:00">15:00</option>
						<option value="16:00">16:00</option>
						<option value="17:00">17:00</option>
						<option value="18:00">18:00</option>
						<option value="19:00">19:00</option>
						<option value="20:00">20:00</option>
					</select>
					
	        </label>
	      </div>     
     	</div>  

			<div class="col-sm-5 py-2 pl-0">
	      <div class="form-check">
	        <label class="form-check-label">
	        <span style="font-size:11px; color:#FF0000">** Tener en cuenta 2 horas para su pedido.</span></label>
	      </div>
	    </div>

    </div>

					<?php $codusu=$_SESSION["s_cod"]; 

						 $res=@mysqli_query($link, "set names utf8");
				 		 $row=@mysqli_fetch_array($res);
						 $sqlqry = "SELECT * FROM usuario WHERE cod_usuario = ".$codusu;
						 $res=mysqli_query($link, $sqlqry);
				 		 
				 		 $row=mysqli_fetch_array($res);
				 		 
					?>

    <div class="form-group row mb-0">
    	<label for="staticEmail" class="col-sm-2 col-form-label">
      	Nombre de entrega:
     	</label>

     	<div class="col-sm-4 py-2 pl-3">
				<input type="text" name="txt1" value="<?php echo $row[3].' '.$row[4]; ?>" style="width: 100%;" disabled="disabled">
				<input type="hidden" name="txtnom" value="<?php echo $row[3].' '.$row[4]; ?>">
     	</div>

			<div class="col-sm-6 py-2 pl-0">
	      <div class="form-check">
					<label class="form-check-label">
						<span style="font-size:11px; color:#FF0000">Para agregar otro nombre de entrega, 
							<!-- <a href="#" onclick="ver_nom2(); return false;">click aquí</a>. -->
						</span>
						<span class="badge badge-pill badge-danger">
						<a href="#" onclick="ver_nom2(); return false;" style="color: #fff;">click aquí</a>
					</span>
					</label>		
	      </div>
	    </div>

    </div>


    <input type="hidden" name="swtnom" id="swtnom" value="F">
    <div id="nom2" class="form-group row mb-0"></div>
			<!-- <div id="nom2"></div> -->
    


    <div class="form-group row mb-0">
    	<label for="staticEmail" class="col-sm-2 col-form-label">
      	Teléfono:
     	</label>

     	<div class="col-sm-4 py-2 pl-3">
				<?php if ($row[7]!="") { ?>

				<input type="text" name="txttelf" value="<?php echo $row[7]; ?>" readonly>
						<!-- <input type="hidden" name="txtdir" value="<?php //echo $row[6]; ?>"> -->
				<?php } else {?>
						
				<input type="text" name="txttelf" value="<?php echo $row[7]; ?>" onKeyPress="return numeros(event)" maxLength="10">

				<?php } ?>
     	</div>

    </div>



    	<div class="form-group row mb-0">

    		<label for="staticEmail" class="col-sm-2 col-form-label">
      		Dirección:
     		</label>

     	
				<?php if ($row[6]!="") { ?>

				<div class="col-sm-5 py-2 pl-3">
					<input type="text" name="txt2" value="<?php echo $row[6];?>" style="width: 100%" readonly>
					<input type="hidden" name="txtdir" value="<?php echo $row[6]; ?>">
					<input type="hidden" name="txtzona" value=".">
				</div>

				<div class="col-sm-5 py-2 pl-3">			
					<span style="font-size:11px; color:#FF0000">
						Para agregar otro teléfono de contacto y otra dirección de entrega diferentes, 
<!-- 						<a href="#" onclick="ver_direc(); return false;" style="text-decoration: none;" class="text-danger">click aquí</a>. -->
					</span>
						<span class="badge badge-pill badge-danger">
							<a href="#" onclick="ver_direc(); return false;" style="color: #fff;">click aquí</a>
						</span>
				</div>		

				<?php } else { ?>
					<div class="col-sm-7 py-2 pl-0">
	      		<div class="form-check pl-3">	

							
							<select id="dir_epec" name="dir_epec" style="width: 70px;">
								<option value="calle">Calle</option>
								<option value="avenida">Avenida</option>
								<option value="jiron">Jirón</option>
								<option value="avenida">Pasaje</option>
							</select>

							<input type="text" name="txtdir" value="<?php echo $row[6]; ?>" style="width: 180px;">

							<select id="dir_zona" name="dir_zona" style="width: 110px;">
								<option value="urb">Urbanización</option>
								<option value="res">Residencial</option>
								<option value="cond">Condominio</option>
								<option value="uv">Unidad Vecinal</option>
								<option value="pj">Pueblo Joven</option>
							</select>
							
							<input type="text" name="txtzona" value="<?php echo $row[6]; ?>" style="width: 180px;">

						</div>
					</div>

					<div class="col-sm-12 px-0">
						<div class="form-check">

							<span class="tit_grabar mr-5">* Grabar el teléfono y la dirección en sus datos personales?
							<input type="radio" name="grab_dir" value="S" checked="checked" class="ml-4">Sí 
							<input type="radio" name="grab_dir" value="N" class="ml-4">No
							</span>
							
							<span class="tit_grabar">Si desea actualizar sus datos 
								<a href="cuenta.php">entrar aquí</a></span>							

						</div>
					</div>	
						<!-- <br> -->
						
					<?php } ?>

     	</div>

     	<input type="hidden" name="swt" id="swt" value="F">
			<div id="direc2" class="form-group row mb-0"></div>


			<div class="form-group row mb-0">
				<label for="staticEmail" class="col-sm-12 col-form-label text-danger">
      		Por favor verificar que los datos ingresados sean verdaderos y correctos. De esta manera podremos cumplir con la entrega de su pedido.
     		</label>
			</div>

			<div class="form-group row mb-0">
				<label for="staticEmail" class="col-sm-12 col-form-label">
					Si desea recibir FACTURA por su compra haga check aquí : &nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="chkfac" onclick="ver_factura();" value="F"> Factura
     		</label>
			</div>

			<div id="raz_soc"></div>			

			<div class="form-group row mb-0">
				<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align: right;">
						<a href="principal.php" style="text-decoration: none;" class="text-danger">¿Olvidaste algo? todavía estas a tiempo de regresar, 
							<span class="mr-5">pulsa aquí</span></a>
				</label>

				<div class="col-sm-2 py-2 pl-3">
					
					<input name="accion" type="submit" value="Finalizar" class="btn btn-primary btn-md px-5">
				</div>

			</div>
	
	</form>

</div>








<!-- 	<form name="frm02_B" action="finalizar.php" method="post" onsubmit="return valid_form();"> 
	<table width="100%" class="tbcar2">
		<thead>
			<tr>
				<td colspan="3">Datos adicionales del pedido</td>
			</tr>
		</thead>
		<tbody>	
			<tr>  
				<td>&nbsp;</td>
				<td width="60%">Codigo del pedido:  <?php echo $id; ?></td>
				<td><span style="color:#FF0000 ; font-size:18px; text-decoration:underline;">Total del pedido:  S/. <?php echo sprintf("%01.2f", $total); ?></span></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td colspan="2">Tipo de pago: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" name="chktipago" value="E" checked="checked" />
					&nbsp;Efectivo contra entrega &nbsp;&nbsp;&nbsp;
					<input type="radio" name="chktipago" value="T" />&nbsp;Tarjeta de Crédito
						<select id="tarjeta" name="tarjeta" style="width: 110px;">
							<option value="vs">Visa</roption>
							<option value="mc">Master Card</option>
							<option value="ae">Am. Ex</option>
							<option value="dc">Dinners</option>
						</select>
				</td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td width="20%" colspan="2">Horario de entrega 
					<?php //require('datepicker/calendario.php'); ?>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Fecha: -->
					
					<?php //include 'calendario/calendario.php'; ?>

<!-- 					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Hora:
					<select name="cbohora" style="width: 80px;">
						<option value="07:00">07:00</option>
						<option value="08:00">08:00</option>
						<option value="09:00">09:00</option>
						<option value="10:00">10:00</option>
						<option value="11:00">11:00</option>
						<option value="12:00">12:00</option>
						<option value="13:00">13:00</option>
						<option value="14:00">14:00</option>
						<option value="15:00">15:00</option>
						<option value="16:00">16:00</option>
						<option value="17:00">17:00</option>
						<option value="18:00">18:00</option>
						<option value="19:00">19:00</option>
						<option value="20:00">20:00</option>
					</select>
					<span style="font-size:11px; color:#FF0000">Tener en cuenta 2 horas para su pedido.</span>
				</td>
			</tr>


			<tr>
				<td>&nbsp;</td>
				<td colspan="2">Nombre de entrega: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->


					<?php 
						// $codusu=$_SESSION["s_cod"]; 

						// $res=@mysqli_query($link, "set names utf8");
				 	// 	$row=@mysqli_fetch_array($res);
						// $sqlqry = "SELECT * FROM usuario WHERE cod_usuario = ".$codusu;
						// $res=mysqli_query($link, $sqlqry);
				 		 
				 	// 	$row=mysqli_fetch_array($res);
					?>


<!-- 					<input type="text" name="txt1" value="<?php echo $row[3].' '.$row[4]; ?>" style="width: 400px;" disabled="disabled">

					<input type="hidden" name="txtnom" value="<?php echo $row[3].' '.$row[4]; ?>">
					
					<span style="font-size:11px; color:#FF0000">Para agregar otro nombre de entrega, <a href="#" onclick="ver_nom2(); return false;">click aquí</a>.</span>

					<input type="hidden" name="swtnom" id="swtnom" value="F">
					<div id="nom2"></div>
				</td>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td colspan="2">Teléfono: &nbsp;&nbsp;&nbsp;&nbsp; -->

					<?php if ($row[7]!="") { ?>

<!-- 					<input type="text" name="txttelf" value="<?php echo $row[7]; ?>" style="width: 120px;" readonly> -->

					<!-- <input type="hidden" name="txtdir" value="<?php //echo $row[6]; ?>"> -->
					<?php } else {?>
					
					<!-- <input type="text" name="txttelf" value="<?php echo $row[7]; ?>" style="width: 120px;" onKeyPress="return numeros(event)" maxLength="10"> -->

					<?php } ?>

<!-- 
				
				</td>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td colspan="2">Dirección: &nbsp;&nbsp;&nbsp; -->
					
					<?php if ($row[6]!="") { ?>

<!-- 					<input type="text" name="txt2" value="<?php echo $row[6]; ?>" style="width: 400px;" readonly>
					<input type="hidden" name="txtdir" value="<?php echo $row[6]; ?>">
					<input type="hidden" name="txtzona" value=".">


						<br>
						<span style="font-size:11px; color:#FF0000">Para agregar otro teléfono de contacto y otra dirección de entrega diferentes, 
						<a href="#" onclick="ver_direc(); return false;">click aquí</a>.</span> -->
						

					<?php } else { ?>
						
<!-- 						<select id="dir_epec" name="dir_epec" style="width: 70px;">
							<option value="calle">Calle</option>
							<option value="avenida">Avenida</option>
							<option value="jiron">Jirón</option>
							<option value="avenida">Pasaje</option>
						</select>

						<input type="text" name="txtdir" value="<?php echo $row[6]; ?>" style="width: 180px;">

						<select id="dir_zona" name="dir_zona" style="width: 110px;">
							<option value="urb">Urbanización</option>
							<option value="res">Residencial</option>
							<option value="cond">Condominio</option>
							<option value="uv">Unidad Vecinal</option>
							<option value="pj">Pueblo Joven</option>
						</select>
						
						<input type="text" name="txtzona" value="<?php echo $row[6]; ?>" style="width: 180px;">

						
						<br>
						&nbsp;<span class="tit_grabar">*</span>
						&nbsp;
						
						<span class="tit_grabar">Grabar el teléfono y la dirección en sus datos personales?&nbsp;&nbsp;&nbsp;
						<input type="radio" name="grab_dir" value="S" checked="checked"> Sí &nbsp;
						<input type="radio" name="grab_dir" value="N"> No</span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						<span class="tit_grabar">Si desea actualizar sus datos 
							<a href="cuenta.php">entrar aquí</a></span> -->

					<?php } ?>

						<!-- <input type="hidden" name="swt" id="swt" value="F">
						<div id="direc2"></div> -->
				
<!-- 				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td colspan="2"><span style="color:#FF0000">Por favor verificar que los datos ingresados sean verdaderos y correctos. De esta manera podremos cumplir con la entrega de su pedido.</span></td>
			</tr> -->

<!-- 			<tr>
				<td>&nbsp;</td>
				<td colspan="2">
						Si desea recibir FACTURA por su compra haga check aquí : &nbsp;&nbsp;&nbsp;
						<input type="checkbox" name="chkfac" onclick="ver_factura();" value="F"> Factura -->

	<!-- 				<input type="radio" name="chkcomp" value="T" onclick="ver_factura();" checked="checked" />
							&nbsp;Boleta &nbsp;&nbsp;&nbsp;
					<input type="radio" name="chkcomp" value="E" onclick="ver_factura();" />
							&nbsp;Factura -->

<!-- 				</td>
			</tr>
	</tbody>
	</table>
	<div id="raz_soc"></div>

	<br>
		<div id="botonera"> -->

			<!-- <input name="accion" type="submit" value="Recalcular" class="btnrecalc"> -->

<!-- 			<a href="principal.php">¿Olvidaste algo? todavía estas a tiempo de regresar, 
				<span style="text-decoration: underline;">pulsa aquí</span></a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input name="accion" type="submit" value="Finalizar" class="btnblue">
		</div>
	</form> -->



<!-- </div> -->






<!-- ************************************************************************************* -->





<?php } ?>	