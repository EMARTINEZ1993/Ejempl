<?php 

include "cabeza.php";
 ?>
<body class="skin-blue fixed">
<div class="content-wrapper">
<section class="content-header">
  <h1>
    <i class="fa fa-list icon-title"></i> Listado de ...

    <a class="btn btn-primary btn-social pull-right" href="?module=form_medicines&form=add" title="agregar" data-toggle="tooltip">
      <i class="fa fa-plus"></i> Agregar
    </a>
  </h1>

</section>


<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
          <p>Total registros: <b class="text-info">#</b></p>
          <table id="dataTables1" class="table table-bordered table-striped table-hover">

            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Codigo</th>
                <th class="center">Nombre</th>
                <th class="center">Precio de compra</th>
                <th class="center">Precio de venta</th>
                <th class="center">Stock</th>
                <th class="center">Unidad</th>
                <th></th>
              </tr>
            </thead>
            <tbody>


             <tr>
              <td width='30' class='center'></td>
              <td width='80' class='center'></td>
              <td width='180'></td>
              <td width='100' align='right'></td>
              <td width='100' align='right'></td>
              <td width='80' align='right'></td>
              <td width='80' class='center'></td>
              <td class='center' width='80'>
                <div>
                 <a data-toggle='tooltip' data-placement='top' title='modificar' style='margin-right:5px' class='btn btn-primary btn-sm' href=''>
                    <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                  </a>

                <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="" onclick="return confirm('estas seguro de eliminar; ?> ?');">
                  <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                </a>
              </div>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>
</div>  
</section>

<?php include "../pie2.php" ?>