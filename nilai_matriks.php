<?php
include("konfig/koneksi.php");
$s = mysqli_query($k21, "select * from kriteria");
$h = mysqli_num_rows($s);


?>

<div class="box-header">
	<br><h3 class="box-title ">Nilai Matriks</h3> <br>
</div>
<font size="2px">
<<<<<<< HEAD
<div class="table table-bordered table-responsive">
	<table class="table table-bordered table-responsive">
		<thead>
			<tr style="font-size:18px">
				<th rowspan="2">
					<center>No</center>
				</th>
				<th rowspan="2">
					<center>Nama</center>
				</th>
				<th colspan="<?php echo $h; ?>">
					<center>Kriteria</center>
				</th>
			</tr>
			<tr style="font-size:18px">
				<?php
				for ($n = 1; $n <= $h; $n++) {
					echo "<th><center>C{$n}<center></th>";
				}
				?>
				</center>
			</tr>
		</thead>
		<tbody style="font-size:15px">
			<?php 
			$i = 0;
			$a = mysqli_query($k21, "select * from alternatif order by id_alternatif asc;");
=======
	<div class="table table-bordered table-responsive">
		<table class="table table-bordered table-responsive">
			<thead>
				<tr>
					<th rowspan="2">
						<center>No</center>
					</th>
					<th rowspan="2">
						<center>Nama</center>
					</th>
					<th colspan="<?php echo $h; ?>">
						<center>Kriteria</center>
					</th>
				</tr>
				<tr>
					<?php
					for ($n = 1; $n <= $h; $n++) {
						echo "<th><center>C{$n}<center></th>";
					}
					?>
					</center>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 0;
				$a = mysqli_query($k21, "select * from alternatif order by id_alternatif asc;");
>>>>>>> d04769b1bd5e0051213080a01f1b247144434664

				while ($da = mysqli_fetch_assoc($a)) {
					echo "<tr>
		<td>" . (++$i) . "</td>
		<td>" . $da['nm_alternatif'] . "</td>";
					$idalt = $da['id_alternatif'];
					//ambil nilai
					$n = mysqli_query($k21, "select * from nilai_matrik where id_alternatif='$idalt' order by id_matrik asc");

					while ($dn = mysqli_fetch_assoc($n)) {

						echo "<td align='center'>$dn[nilai]</td>";
					}
					echo "</tr>\n";
				}

				?>

			</tbody>
		</table>
	</div>
</font>