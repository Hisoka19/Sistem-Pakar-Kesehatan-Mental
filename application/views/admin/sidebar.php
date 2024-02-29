<body class="hold-transition sidebar-mini">
<div class="wrapper">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-X8d3IvhA9tVjeAmi0vZ8EwPck+4cv5+fbOPW+Ff10q4U2X4ps8ajH7ad2xFExv1VgLVFX5ekXbZA7ANePcnGQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('assets/template/') ?>dist/logospk.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Mezon Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/template/') ?>dist/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="<?= base_url('dashboard') ?>" class="nav-link <?php if($this->uri->segment(1) == 'dashboard') echo 'active' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('Cuser') ?>" class="nav-link <?php if($this->uri->segment(1) == 'admin') echo 'active' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>User</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('Cgejala') ?>" class="nav-link <?php if($this->uri->segment(1) == 'pengguna') echo 'active' ?>">
                <i class="nav-icon fas fa-clipboard"></i>
                <p>Gejala</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('Cpenyakit') ?>" class="nav-link <?php if($this->uri->segment(1) == 'artikel') echo 'active' ?>">
                <i class="nav-icon fas fa-hospital"></i>
                <p>Penyakit</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('Cnilaikepastian') ?>" class="nav-link <?php if($this->uri->segment(1) == 'informasi') echo 'active' ?>">
                <i class="nav-icon fas fa-percent"></i>
                <p>Nilai Kepastian</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('Cnilaiinterpretasicf') ?>" class="nav-link <?php if($this->uri->segment(1) == 'kategorisampah') echo 'active' ?>">
                <i class="nav-icon fas fa-chart-bar"></i>
                <p>Nilai Interpretasi CF</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('Crule') ?>" class="nav-link <?php if($this->uri->segment(1) == 'kategorisampah') echo 'active' ?>">
                <i class="nav-icon fas fa-book"></i>
                <p>Rule</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('Cnilaipakar') ?>" class="nav-link <?php if($this->uri->segment(1) == 'kategorisampah') echo 'active' ?>">
                <i class="nav-icon fas fa-user-md"></i>
                <p>Nilai Kepastian Pakar</p>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

