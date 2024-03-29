<?php
header ('Content-Type: text/html; charset=utf-8');
include '../../connect.php';
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $progress=$_POST['progress'];
    $status=$_POST['status'];
    $git=$_POST['git'];
    $name_client=$_POST['name_client'];
    $date_start=$_POST['date_start'];
    $type=$_POST['type'];

    $i ="insert into project (name, pass, progress, status, git, name_client, date_start, type) values ( '$name','$pass', '$progress', '$status', '$git', '$name_client', '$date_start', '$type') ";
    //$i="insert into reg(name,username,password,city,image,gender)value('$t','$u','$p','$c','$img','$g')";
    mysqli_query($con, $i);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Genius Lab</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../AreaCliente/images/logoTCC.png" alt="AdminLTELogo" height="150" width="150">
</div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="cadastrarProject.php" class="nav-link">Cadastrar Projetos</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="homeindex.php" class="brand-link">
      <span class="brand-text font-weight-light">Genius Lab</span>
    </a>

    <?php
      $sq="select * from reg where id='$_SESSION[id]'";
      $qu=mysqli_query($con,$sq);
      while($f=  mysqli_fetch_assoc($qu)){
    ?>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <img src="../AreaCliente/images/Profile.png" alt="img*">
        <div class="info">
          <a href="profile.php" class="d-block"><?php echo $f['name']?></a>
        </div>
      </div>
      <?php
        }
      ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="homeindex.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Home
              </p>
            </a>
          </li>
               <li class="nav-item">
            <a href="cadastrarProject.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              <strong>Cadastrar Projetos</strong>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="listaprojetos.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Lista de Projetos
              </p>
            </a>
          </li>
      </nav>

      <br> </br>
      <br> </br>
      <br> </br>
      <br> </br>
      <br> </br>
      <br> </br>
      <br> </br>
      <br> </br>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="../loginLTE.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Sair
              </p>
            </a>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastro</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item">Cadastrar Projetos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cadastrar um Novo Projeto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nome do Projeto</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name Project" name="name"> 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Progresso</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter progress Project" name="progress"> 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter status Project" name="status"> 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">GitHub</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter git Project" name="git"> 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nome do Cliente</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name client Project" name="name_client"> 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Data de inicio</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter date Project" name="date_start"> 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tipo</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter type Project" name="type"> 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Senha de acesso ao Projeto</label>
                    <input type="int" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass"> 
                    <br>
                    <button type="submit" class="btn btn-primary" name="sub">Submit</button>
                  </div>
                <!-- /.card-body -->
              </form>
            </div>
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../AdminLTE-3.2.0/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../AdminLTE-3.2.0/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
