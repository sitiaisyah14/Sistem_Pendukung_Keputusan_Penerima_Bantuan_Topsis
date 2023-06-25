<h1 style="font-size: 40px; text-align:center">Kriteria</h1><br>
<font size="4px">
<ul class="nav nav-tabs">
	<?php
	if ($_GET['k'] == 'kriteria') {
		$act1 = 'class="active"';
		$act2 = '';
	} else if ($_GET['k'] == 'tambah') {
		$act1 = '';
		$act2 = 'class="active"';
	} else {
		$act1 = '';
		$act2 = '';
	}
	?>
	<li <?php echo $act1; ?>><a href="index.php?a=kriteria&k=kriteria">Data Kriteria</a></li>
	<li <?php echo $act2; ?>><a href="index.php?a=kriteria&k=tambah">Tambah Kriteria</a></li>

</ul>
</font>

<?php

if (@$_GET['a'] == 'kriteria' and @$_GET['k'] == 'kriteria') {
	include("datakriteria.php");
} else if (@$_GET['k'] == 'tambah') {
	include("tambahkriteria.php");
} else if (@$_GET['k'] == 'ubahk') {
	include("ubahkriteria.php");
}
?>