<!DOCTYPE html>
<html lang="en">

<head>
  <title>TOPSIS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">SISTEM PENDUKUNG KEPUTUSAN METODE TOPSIS</a>
      </div>

    </div>
  </nav>
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
  <div class="col-sm-2">
    <div class="list-group">
      <a href="?a=kriteria&k=kriteria" class="list-group-item">Kriteria</a>
      <a href="?a=alternatif&k=alternatif" class="list-group-item">Alternatif</a>
      <a href="?a=nilaimatrik" class="list-group-item">Nilai Matriks</a>
      <a href="?a=hasiltopsis&k=nilai_matriks" class="list-group-item">Hasil Topsis</a>
    </div>
  </div>

  <!-- <ul class="nav nav-pills nav-stacked">
    <li <?php echo $active1 ?>><a href="?a=kriteria&k=kriteria">Kriteria</a></li>
    <li <?php echo $active2 ?>><a href="?a=alternatif&k=alternatif">Alternatif</a></li>
    <li <?php echo $active3 ?>><a href="?a=nilaimatrik">Nilai Matriks</a></li>
    <li <?php echo $active4 ?>><a href="?a=hasiltopsis&k=nilai_matriks">Hasil Topsis</a></li>
  </ul> -->
  <!-- /TAB KIRI -->

  <div class="col-sm-10">
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
</body>

</html>