<?php 

include "cabeza.php";
include "top-menu.php";
include "sidebar-menu.php" ;

 ?>
<div class="content-wrapper">    
<section class="content-header">
  <h1>
    <i class="fa fa-user icon-title"></i> Perfil de Usuario
  </h1>
  <ol class="breadcrumb">
    <li><a href="inicio.php"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="active"> Perfil de Usuario</li>
  </ol>
</section>


<section class="content">
  <div class="row">
    <div class="col-md-12">  
      <div class="box box-primary">
        <!-- form start -->
        <form role="form" class="form-horizontal" method="POST" action="actualizar_perfil.php" enctype="multipart/form-data">
          <div class="box-body">

            <input type="hidden" name="id_user" value="1">
            
            <div class="form-group">
              <label class="col-sm-2 control-label">
                              <img style="border:1px solid #eaeaea;border-radius:50px;" src="images/user/user-default.png" width="75">
                            </label>
              <label style="font-size:25px;margin-top:10px;" class="col-sm-8">Sistemas Webs</label>
            </div>
            <hr>
            <div class="form-group">
              <label class="col-sm-2 control-label">Nombre de Usuario</label>
              <label style="text-align:left" class="col-sm-8 control-label">: admin</label>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
              <label style="text-align:left" class="col-sm-8 control-label">: info@sist.com</label>
            </div>
          
            <div class="form-group">
              <label class="col-sm-2 control-label">Telefono</label>
              <label style="text-align:left" class="col-sm-8 control-label">: 7025</label>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Permisos de acceso</label>
              <label style="text-align:left" class="col-sm-8 control-label">: Super Admin</label>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Status</label>
              <label style="text-align:left" class="col-sm-8 control-label">: activo</label>
            </div>
          </div><!-- /.box body -->

          <div class="box-footer">
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary btn-submit" name="Modificar" value="Modificar">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

 <?php include "pie2.php"; ?>