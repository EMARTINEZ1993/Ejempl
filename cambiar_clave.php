<?php 

include "cabeza.php";
include "top-menu.php";
include "sidebar-menu.php" ;

 ?>
<div class="content-wrapper">   
<section class="content-header">
  <h1>
    <i class="fa fa-lock icon-title"></i> Modificar Contraseña
  </h1>
  <ol class="breadcrumb">
    <li><a href="inicio.php"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="active">Contraseña</li>
    <li class="active">Modificar</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

          <div class="box box-primary">
        <!-- form start -->
        <form role="form" class="form-horizontal" method="POST" action="modules/password/proses.php">
          <div class="box-body">

            <div class="form-group">
              <label class="col-sm-2 control-label">Contraseña Antigua</label>
              <div class="col-sm-5">
                <input type="password" class="form-control" name="old_pass" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Contraseña Nueva</label>
              <div class="col-sm-5">
                <input type="password" class="form-control" name="new_pass" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Repetir contraseña nueva</label>
              <div class="col-sm-5">
                <input type="password" class="form-control" name="retype_pass" autocomplete="off" required>
              </div>
            </div>
          </div><!-- /.box-body -->
          
          <div class="box-footer bg-btn-action">
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

</div>
 <?php include "pie2.php"; ?>