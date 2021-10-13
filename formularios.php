<?php
$title ="Tickets | ";
include "head.php";
include "sidebar.php";
?>


<div class="right_col" role="main"><!-- page content -->
 <button type="button" class="btn btn-primary position-relative">
  Listado
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    <span class="visually-hidden"></span>
  </span>
</button>

 <div class="">
  <div class="page-title">
   <div class="clearfix"></div>
   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
      <h2>Registro de </h2>
      <ul class="nav navbar-right panel_toolbox">
       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
       </li>
       <li><a class="close-link"><i class="fa fa-close"></i></a>
       </li>
      </ul>
      <div class="clearfix"></div>
     </div>
     <div class="x_content">

      <!-- form search -->
      <form class="form-horizontal" role="form">
       <h3 class="text-center text-info">Registro de ....</h3>
       <input type="hidden" name="view" value="reports">
       <div class="form-group">
        <div class="col-lg-6">
         <div class="input-group">
          <span class="input-group-addon">Documento:</span>
           <input type="" name="" class="form-control">
         </div>
        </div>
        <div class="col-lg-6">
         <div class="input-group">
          <span class="input-group-addon">Nombre:</span>
           <input type="" name="" class="form-control">

         </div>
        </div>
        <div class="col-lg-12">
         <div class="input-group">
          <span class="input-group-addon">Campo largo:</span>
          <input type="text" name="start_at" value="" class="form-control" placeholder="Palabra clave">
         </div>
        </div>
       </div>
       <div class="form-group">
        <div class="col-lg-6">
         <div class="input-group">
          <span class="input-group-addon">Lista desplegable</span>
          <select name="status_id" class="form-control">
           <option></option>
          </select>
         </div>
        </div>
        <div class="col-lg-6">
         <div class="input-group">
          <span class="input-group-addon">Lista desplegable</span>
          <select name="kind_id" class="form-control">

          </select>
         </div>
        </div>
        <div class="col-lg-6">
         <button class="btn btn-info btn-block" type="submit">Procesar</button>
        </div>
                <div class="col-lg-6">
         <button class="btn btn-secondary btn-block" type="reset">Cancelar</button>

        </div>
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
 <?php include "footer.php"; ?>