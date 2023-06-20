<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SISTEM PENDUKUNG KEPUTUSAN METODE TOPSIS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <link rel="icon" href="dist/img/rumah.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-green navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white" size="4px">
							<b>SPK PENERIMA BANTUAN PERBAIKAN RUMAH - TOPSIS</b>
						</font>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

  <?php
  if (@$_GET['a'] == 'kriteria') {
    $active1 = 'class="active"';
    $active2 = '';
    $active3 = '';
    $active4 = '';
  } else if (@$_GET['a'] == 'alternatif') {
    $active1 = '';
    $active2 = 'class="active"';
    $active3 = '';
    $active4 = '';
  } else if (@$_GET['a'] == 'nilaimatrik') {
    $active1 = '';
    $active2 = '';
    $active3 = 'class="active"';
    $active4 = '';
  } else if (@$_GET['a'] == 'hasiltopsis') {
    $active1 = '';
    $active2 = '';
    $active3 = '';
    $active4 = 'class="active"';
  } else {
    $active1 = '';
    $active2 = '';
    $active3 = '';
    $active4 = '';
  }

  ?>

  <!-- TAB KIRI -->
  <!-- <div class="col-sm-2">
    <div class="list-group">
      <a href="?a=kriteria&k=kriteria" class="list-group-item">Kriteria</a>
      <a href="?a=alternatif&k=alternatif" class="list-group-item">Alternatif</a>
      <a href="?a=nilaimatrik" class="list-group-item">Nilai Matriks</a>
      <a href="?a=hasiltopsis&k=nilai_matriks" class="list-group-item">Hasil Topsis</a>
    </div>
  </div> -->

  <!-- SIDEBAR -->
  <aside class="main-sidebar sidebar-dark-primary elevation-5">
			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<img src="dist/img/rumah.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .9">
				<font size="3px">
          <span class="brand-text">BANPERUM</span>
        </font>
			</a>

      <!-- Sidebar -->
			<div class="sidebar">
        <!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Data Kriteria dan Alternatif -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <font size="2px">
                  <p>
                    Kelola Data
                    <i class="fas fa-angle-left right"></i>
                  </p>
                  </font>
                </a>
                <!-- Data Kriteria -->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="?a=kriteria&k=kriteria" class="nav-link">
                      <i class="nav-icon far fa-circle text-warning"></i>
                      <font size="2px">
                        <p>Data Kriteria</p>
                      </font>
                    </a>
                  </li>
                </ul>
                <!-- Data Alternatif -->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="?a=alternatif&k=alternatif" class="nav-link">
                      <i class="nav-icon far fa-circle text-warning"></i>
                      <font size="2px">
                        <p>Data Alternatif</p>
                      </font>
                    </a>
                  </li>
                </ul>
            </li>
            <!-- Perhitungan Topsis -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <font size="2px">
                  <p>
                    Hasil Perhitungan
                    <i class="fas fa-angle-left right"></i>
                  </p>
                  </font>
                </a>
                <!-- Nilai Matriks -->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="?a=nilaimatrik" class="nav-link">
                      <i class="nav-icon far fa-circle text-warning"></i>
                      <font size="2px">
                        <p>Nilai Matriks</p>
                      </font>
                    </a>
                  </li>
                </ul>
                <!-- Hasil Ranking -->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="?a=hasiltopsis&k=nilai_matriks" class="nav-link">
                      <i class="nav-icon far fa-circle text-warning"></i>
                      <font size="2px">
                        <p>Hasil Ranking</p>
                      </font>
                    </a>
                  </li>
                </ul>
            </li>
        </nav>
      </div>
  
	<!-- /.sidebar -->
  </aside>

  <!-- <ul class="nav nav-pills nav-stacked">
    <li <?php echo $active1 ?>><a href="?a=kriteria&k=kriteria">Kriteria</a></li>
    <li <?php echo $active2 ?>><a href="?a=alternatif&k=alternatif">Alternatif</a></li>
    <li <?php echo $active3 ?>><a href="?a=nilaimatrik">Nilai Matriks</a></li>
    <li <?php echo $active4 ?>><a href="?a=hasiltopsis&k=nilai_matriks">Hasil Topsis</a></li>
  </ul> -->
  <!-- /TAB KIRI -->

  <div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
          <?php

          if (@$_GET['a'] == 'kriteria') {
            include("kriteria.php");
          } else if (@$_GET['a'] == 'alternatif') {
            include("alternatif.php");
          } else if (@$_GET['a'] == 'nilaimatrik') {
            include("nilaimatrik.php");
          } else if (@$_GET['a'] == 'hasiltopsis') {
            include("hasiltopsis.php");
          }
          ?>
        </div>
			</section>
			<!-- /.content -->
  </div>

  <footer class="main-footer">
    <font size="2px">
			<b>SPK TI-3E ILS - 2023</b>
    </font>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
        

</body>

</html>