<?php 

include "cabeza.php";
include "top-menu.php";
include "sidebar-menu.php" ;

 ?>

<div class="content-wrapper">  
<section class="content-header">  
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar datos de Usuario
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio.php"><i class="fa fa-home"></i> Inicio</a></li>
      <li><a href="perfil.php"> Usuario </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
            <div class="box-body">
              <input type="hidden" name="id_user" value="">
              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre de Usuario</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="username" autocomplete="off" value="" required>
                </div>
              </div>             
              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="name_user" autocomplete="off" value="" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-5">
                  <input type="email" class="form-control" name="email" autocomplete="off" value="">
                </div>
              </div>
          
              <div class="form-group">
                <label class="col-sm-2 control-label">Telefono</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="telefono" autocomplete="off" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)" value="">
                </div>
              </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Foto</label>
                <div class="col-sm-5">
                  <input type="file" name="foto">
                  <br/>
             
                  <img style="border:1px solid #eaeaea;border-radius:5px;" src="" width="128">

                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Permisos de acceso</label>
                <div class="col-sm-5">
                  <select class="form-control" name="permisos_acceso" required>
                    <option value=""><?php # echo ; ?></option>
                    <option value="Super Admin">Super Admin</option>
                    <option value="Gerente">Gerente</option>
                    <option value="Almacen">Almacén</option>
                  </select>
                </div>
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=user" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>  
  </section>

  <?php include "pie2.php"; ?>