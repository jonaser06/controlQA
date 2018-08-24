<div class="login-box">
  <div class="login-logo">
    
    <a href="#">
    <img src="view/img/users/logo.png" class="img-circle" alt="User Image">
    <b>América </b>QA</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Inicie sesión para empezar</p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" name="inUser" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="inPass" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
      </div>
      <?php
        $login = new ControllerUsers();
        $login -> CtrlLogin();
      ?>
    </form>
  </div>
</div>
<!-- /.login-box -->