
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLongTitle">INGRESE CON SU USUARIO PARA PODER COMPRAR</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="login_form" name="login_form" action="login.php" method="post">
        <div class="modal-body">

<!-- <legend>REGISTRESE</legend> -->

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="uscorreo" aria-describedby="emailHelp" placeholder="Enter email" required="">
      <small id="emailHelp" class="form-text text-muted">Nunca compartas tus datos de acceso.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="uspassword" placeholder="Password" required="">
    </div>

    <a href="#" data-toggle="modal" data-target="#registrarse" data-dismiss="modal">REGISTRESE</a>

            <!-- <a href="#" class="login_facebook">login with facebook</a> -->

        </div>
        <div class="modal-footer">
          <input type="submit" id="login" name="submit" value="ENTRAR" class="btn btn-info">
          <button type="button" class="btn btn-light" data-dismiss="modal">CERRAR</button>
        </div>
      </form>

    </div>
  </div>
</div>




<div class="modal fade" id="registrarse" tabindex="-1" role="dialog" aria-labelledby="registrarseTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="registrarseTitle">REGISTRO DE USUARIO</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


<!-- <input type="text" id="txtnombres" name="txtnombres" class="inputbox" placeholder="Nombres">
<input type="text" id="txtapellidos" name="txtapellidos" class="inputbox" placeholder="Apellidos">
<input type="text" id="txtemail" name="txtemail" class="inputbox" placeholder="Correo electrónico">
<input type="text" id="txtdni" name="txtdni" class="inputbox" placeholder="DNI" onkeypress="validasolonumeros()" maxlength="8">
<input type="text" id="txttelf" name="txttelf" class="inputbox" placeholder="Teléfono" onkeypress="validasolonumeros()" maxlength="12"> -->
<form id="register_form" name="register_form" method="post" action="registrar.php" onsubmit="return validaform();">

      <div class="modal-body">
        <div class="form-group">
          <label class="col-form-label" for="inputDefault">Nombres:</label>
          <input type="text" id="txtnombres" name="txtnombres" class="form-control" placeholder="Nombres" required="">
        </div>
        <div class="form-group">
          <label class="col-form-label" for="inputDefault">Apellidos:</label>
          <input type="text" id="txtapellidos" name="txtapellidos" class="form-control" placeholder="Apellidos" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Correo electrónico</label>
          <input type="email" id="txtemail" name="txtemail" class="form-control" aria-describedby="emailHelp" placeholder="Correo electrónico" required="">
        </div>
        <div class="form-group">
          <label class="col-form-label" for="inputDefault">Nº DNI:</label>
          <input type="text" id="txtdni" name="txtdni" class="form-control" placeholder="DNI" onkeypress="validasolonumeros()" maxlength="8" required="">
        </div>  
        <div class="form-group">
          <label class="col-form-label" for="inputDefault">Teléfono:</label>
          <input type="text" id="txttelf" name="txttelf" class="form-control" placeholder="Teléfono" onkeypress="validasolonumeros()" maxlength="12" required="">
        </div>  
      </div>

      
      <div class="modal-footer">
        <input type="submit" class="btn btn-info" id="signup" name="submit" value="Crear mi cuenta">
        <button type="button" class="btn btn-light" data-dismiss="modal">CERRAR</button>
      </div>

</form>
    

    </div>
  </div>
</div>