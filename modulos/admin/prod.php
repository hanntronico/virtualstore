<?php session_start(); ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Panel de Administrador</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="../../css/estilos_admin.css" type="text/css" />

<script type="text/javascript" src="js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.cookie.js"></script>
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

<script type="text/javascript" src="js/custom/general.js"></script>

<script type="text/javascript" src="js/custom/forms.js"></script>
<script type="text/javascript" src="js/custom/tables.js"></script>
<script type="text/javascript" src="js/custom/dashboard.js"></script> 

<script language="JavaScript" src="funciones/validaciones.js"></script>


<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/plugins/excanvas.min.js"></script><![endif]-->
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>

<script type="text/javascript">
  function carga_form (num) {
    
    if (num==1){
      var content = jQuery("#conte");
      content.fadeIn('slow').load("inc_productos.php");
    }
    if (num==2){
      var content = jQuery("#conte");
      content.fadeIn('slow').load("inc_subcat.php");
    }
    if (num==3){
      var content = jQuery("#conte");
      content.fadeIn('slow').load("inc_cat.php");
    }
    if (num==4){
      var content = jQuery("#conte");
      content.fadeIn('slow').load("inc_pedidos.php");
    }
    
  }

  function anula(cod) {
    document.location.href='anular.php?id='+cod;
  }

  function cargare(UR) {
    jQuery('#conte').html('<div style="padding:5px;"><img src="images/loaders/loader6.gif"/>&nbsp;Espero un momento porfavor</div>');
    var content = jQuery("#conte");
    content.fadeIn('fast').load(UR);
  }

  function G(UR) {
    var content = jQuery("#conte");
    content.fadeIn('slow').load(UR);
  }

  function CA(isOn){
    for (var i=0;i<frmList.elements.length;i++){
      var e = frmList.elements[i];
      if ((e.name != 'allbox') && (e.type=='checkbox')){
        if (isOn != 1){
          e.checked = frmList.allbox.checked;
          if (frmList.allbox.checked){
            hL(e);
          }else{
            dL(e);
          }
        }else{
          e.tabIndex = i;
          if (e.checked){
            hL(e);
          }else{
            dL(e);
          }
        }
      }
    }
  }

  function hL(E){
    while (E.tagName!="TR"){
      E=E.parentNode;
    }
    E.className = "H";
  }

  function dL(E){
    while (E.tagName!="TR"){
      E=E.parentNode;
    }
    E.className = "";
  }

  function CCA(CB){

      if (CB.checked)
        hL(CB);
      else
        dL(CB);
        
    var TB=TO=0;
    for (var i=0;i<frmList.elements.length;i++){
      var e = frmList.elements[i];
      if ((e.name != 'allbox') && (e.type=='checkbox')){
        TB++;
        if (e.checked) TO++;
      }
    }
    if (TO==TB)
      frmList.allbox.checked=true;
    else
      frmList.allbox.checked=false;
  }

  function vChk(frm){ 
    var sw=0;
    for(var i=0;i<frm.length;i++){
      if(frm.elements[i].checked){
        sw=1;
      }   
    }
    if(sw!=1){
      alert("No hay ningun registro seleccionado.");
      return(false);
    }
    rpta=confirm("Esta seguro de Eliminar estos Registros?");
    if (rpta==false){
      return(false);
    }
  }

  function Disable(act,first,dosub,e) {
    if (act=='delete'){
      if (!e) var e=window.event;
      e.cancelBubble=true;
    }
    if (act=='notbulkmail'){
      frm.action="/cgi-bin/notbulk";
    }else if (act=='report'){
      frm.action="/cgi-bin/kill";
      frm.ReportLevel.value="1";
    }

    num=vChk(frmList);
    // alert(num);
    if (num!=false){
      // frmList.submit();
      for(var i=0;i<frmList.length;i++){
        if(frmList.elements[i].checked){
          var chkid = frmList.elements[i].value;
          // alert(chkid);
          document.location.href='disabler.php?id='+chkid;
        }   
      }
    }

  }

  function Subm(act,first,dosub,e){
    if (act=='delete'){
      if (!e) var e=window.event;
      e.cancelBubble=true;
    }
    if (act=='notbulkmail'){
      frm.action="/cgi-bin/notbulk";
    }else if (act=='report'){
      frm.action="/cgi-bin/kill";
      frm.ReportLevel.value="1";
    }
    //num=((first) ? slct1st(frm) : numChecked(frm));
    num=vChk(frmList);
  //  alert (num);
    if (num!=false){
    //if (num>0){
      //frm._HMaction.value=act;
      //if (dosub)
      frmList.submit();
    //}else{
      //Err("150995652");
    }
  }

  var ventana=0;
  function fventana(URLStr,width,height)
  {

   
  var left=(screen.width/2) - width/2;
  //var top=(screen.height/2) - height/2;
  var top=0;
    if(ventana)
    {
      if(!ventana.closed) ventana.close();
    }
    ventana = open(URLStr, 'ventana', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,copyhistory=yes,width='+width+',height='+height+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
  }

  function printview(url)
    {
      fventana(url,500,600);
    }

  function imprSelec(muestra)
  {var ficha=document.getElementById(muestra);
   var ventimp=window.open(' ','popimpr');
   ventimp.document.write(ficha.innerHTML);
   ventimp.document.close();
   ventimp.print();
   ventimp.close();
  }

  function addprod(c1) {
    // document.location.href='agreg_prod.php?id='+c1;
    var content = jQuery("#list_prod");
    content.fadeIn('slow').load("agreg_prod.php?id="+c1+"&sw=1");
  }

  function eliprod(c1) {
    // document.location.href='agreg_prod.php?id='+c1;
    var content = jQuery("#list_prod");
    content.fadeIn('slow').load("eli_prod.php?id="+c1+"&sw=1");
  }

  function form_child(url)
    {
      // fventana(url,700,500);
      var content = jQuery("#conte");
    content.fadeIn('slow').load(url);
    }

</script>
</head>


<!-- <body class="withvernav" onload="cargare('productos.php?msn=p1');"> -->

<?php 
$strcarga = "";
if ($_GET['msn']=='p1') { 
    // $strcarga = "cargare('productos.php?msn=p1')";
  echo "<script type='text/javascript'>alert('Su registro ha sido grabado con exito!!');window.close();</script>";
}
if ($_GET['msn']=='e1') { 
    $strcarga = "cargare('productos.php?msn=e1')";
}

if ($_GET['msn']=='d1') { 
    $strcarga = "cargare('productos.php?msn=d1')";
}

if ($_GET['sw']=='1'){
  $strcarga = "cargare('inc_prod.php?sw=1')";
}

?>

<body onload="<?=$strcarga?>">
  <div id="conte"></div>  
</body>

<!-- <body class="withvernav" onload="<?=$strcarga?>">

	<div class="bodywrapper">
		    
    <?php //include 'topheader.php'; ?>
    <?php //include 'header.php'; ?>
    <?php //include 'menu_izq.php'; ?>
        
    <div class="centercontent">
      <div id="conte">
        <div class="pageheader">
          <h1 class="pagetitle">Panel de Administrador</h1>  
          <span class="pagedesc">Este es el panel de administración del sistema</span>
               
          <div id="logo" style="margin: 0px auto; text-align:center;">
            <img src="images/logo2.png" alt="">
          </div>
          <br><br><br><br>
        </div>

      </div><br>
    </div>
	</div>

</body> -->
</html>