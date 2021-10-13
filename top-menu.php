
<body class="skin-blue fixed">
 <div class="wrapper">
  <header class="main-header">
   <!-- Logo -->
   <a href="?module=beranda" class="logo">
    <img style="margin-top:-15px;margin-right:5px" src="assets/img/logo-blue.png" alt="Logo"> 
    <span style="font-size:20px">MEDISYS</span>
   </a>

   <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
     <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
     <ul class="nav navbar-nav">
      <li class="dropdown user user-menu">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown">

        <img src="images/user/user-default.png" class="user-image" alt="User Image"/>

        <span class="hidden-xs"><?php # echo $foto; ?> <i style="margin-left:5px" class="fa fa-angle-down"></i></span>
       </a>
       <ul class="dropdown-menu">

        <li class="user-header">

         <img src="images/user/user-default.png" class="img-circle" alt="User Image"/>

         <p>
          <?php # echo $variable['campo nombre']; ?>
          <small><?php # echo $variable['campo rol']; ?></small>
         </p>
        </li>

        <!-- Menu Footer-->
        <li class="user-footer">
         <div class="pull-left">
          <a style="width:80px" href="perfil.php" class="btn btn-default btn-flat">Perfil</a>
         </div>

         <div class="pull-right">
          <a style="width:80px" data-toggle="modal" href="#logout" class="btn btn-default btn-flat">Salir</a>
         </div>
        </li>
       </ul>
      </li>
     </ul>
    </div>
   </nav>
  </header>