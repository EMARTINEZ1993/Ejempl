<?php 

include "cabeza.php";

 ?>
 <div class="content-wrapper">
<section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar Usuario
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=user"> Usuario </a></li>
      <li class="active"> agregar </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre de usuario</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="username" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Contraseña</label>
                <div class="col-sm-5">
                  <input type="password" class="form-control" name="password" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="name_user" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Permisos de acceso</label>
                <div class="col-sm-5">
                  <select class="form-control" name="permisos_acceso" required>
                    <option value=""></option>
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
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->


  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar Medicamentos
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio.php"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href=""> Medicamentos </a></li>
      <li class="active"> Más </li>
    </ol>
  </section>

  <!-- formulario 2-->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="" method="POST">
            <div class="box-body">
     
              <div class="form-group">
                <label class="col-sm-2 control-label">Codigo</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo" value="" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nombre" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Precio de Compra</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <span class="input-group-addon">$.</span>
                    <input type="text" class="form-control" id="precio_compra" name="pcompra" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Precio de Venta</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <span class="input-group-addon">$.</span>
                    <input type="text" class="form-control" id="precio_venta" name="pventa" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Unidad</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="unidad" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                    <option value=""></option>
                    <option value="botellas">Botella</option>
                    <option value="cajas">Cajas</option>
                    <option value="caja">Caja</option>
                    <option value="raya">Raya</option>
                    <option value="tubo">Tubo</option>
                  </select>
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=medicines" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
</div>
<?php 
  include "../pie2.php";

 ?>
