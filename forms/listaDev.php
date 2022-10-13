<?php
header ('Content-Type: text/html; charset=utf-8');
include '../connect.php';
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $burden=$_POST['burden'];
    $age=$_POST['age'];
    $pass=$_POST['pass'];

    $i ="insert into developer (name, email, burden, age, pass) values ( '$name','$email','$burden','$age','$pass') ";
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
  <link rel="stylesheet" href="../AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../cadastrarDev.php" class="nav-link">Lista de Desenvolvedores</a>
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
    <a href="../../index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Genius Lab</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Fabiano</a>
        </div>
      </div>

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
            <a href="cadastrarDev.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Cadastrar Desenvolvedor
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="listaDev.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              <strong>Lista de Desenvolvedores</strong>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="deletarDev.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Remover
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="editarDev.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Editar
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
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item">Lista de Desenvolvedores</li>
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
                <h3 class="card-title">Lista de Desenvolvedores</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST"> 
                <div class="card-body">
              </form>
              <table    border='1';>
                <tr>
                    <th>
                        id
                    </th>
                    <th>
                        name
                    </th>
                    <th>
                        email
                    </th>
                    <th>
                        burden
                    </th>
                    <th>
                        age
                    </th>
                    <th>
                        pass
                    </th>
              <?php
                $sq="select * from developer";
                $qu=mysqli_query($con,$sq);
                while($f=  mysqli_fetch_assoc($qu)){
                    ?>
                    <div class="card-header">
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <table class="table table-striped projects">
                          <tbody>
                              <tr>
                                  <td>
                                    <?php echo $f['id']?>
                                  </td>
                                  <td>
                                      <a>
                                        <?php echo $f['name']?>
                                      <br>
                                        <?php echo $f['email']?>
                                      </br>
                                      <br>
                                        <?php echo $f['burden']?>
                                      </br>
                                      </a>
                                      <br/>
                                  </td>
                                  <td>
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <img alt="Avatar" class="table-avatar" src="../AdminLTE-3.2.0/dist/img/avatar.png">
                                          </li>
                                      </ul>
                                  </td>
                                  <td class="project-actions text-right">
                                      <a class="btn btn-primary btn-sm" href="#">
                                          <i class="fas fa-folder">
                                          </i>
                                          View
                                      </a>
                                      <a class="btn btn-info btn-sm" href="#">
                                          <i class="fas fa-pencil-alt">
                                          </i>
                                          Edit
                                      </a>
                                      <a class="btn btn-danger btn-sm" href="#">
                                          <i class="fas fa-trash">
                                          </i>
                                          Delete
                                      </a>
                                  </td>
                              </tr>
                  <?php
                }
              ?>
              
              </table>
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
<script src="../AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../AdminLTE-3.2.0/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../AdminLTE-3.2.0/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
