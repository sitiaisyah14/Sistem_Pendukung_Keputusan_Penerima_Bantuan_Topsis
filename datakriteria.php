<!-- <div class="box-header">
    <h3 class="box-title">Data Kriteria</h3>
</div> -->
<div class="table-responsive">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <font size="3px">
            <div class="panel-heading">DATA KRITERIA</div>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>
                            <center>Id Kriteria</center>
                        </th>
                        <th>
                            <center>Nama Kriteria</center>
                        </th>
                        <th>
                            <center>Bobot</center>
                        </th>
                        <th>
                            <center>Poin 1</center>
                        </th>
                        <th>
                            <center>Poin 2</center>
                        </th>
                        <th>
                            <center>Poin 3</center>
                        </th>
                        <th>
                            <center>Poin 4</center>
                        </th>
                        <th>
                            <center>Sifat Kriteria</center>
                        </th>
                        <th>
                            <center>Pilihan</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("konfig/koneksi.php");

                    $s = mysqli_query($k21, "select * from kriteria order by id_kriteria ASC");
                    while ($d = mysqli_fetch_assoc($s)) {
                    ?>
                        <tr>
                            <td>
                                <center><?php echo $d['id_kriteria']; ?></center>
                            </td>
                            <td><?php echo $d['nama_kriteria']; ?></td>
                            <td>
                                <center><?php echo $d['bobot']; ?></center>
                            </td>
                            <td>
                                <center><?php echo $d['poin1']; ?></center>
                            </td>
                            <td>
                                <center><?php echo $d['poin2']; ?></center>
                            </td>
                            <td>
                                <center><?php echo $d['poin3']; ?></center>
                            </td>
                            <td>
                                <center><?php echo $d['poin4']; ?></center>
                            </td>

                            <td>
                                <center><?php echo $d['sifat']; ?></center>
                            </td>
                            <td>
                                <a style="font-size: 15px;" href="?a=kriteria&k=ubahk&id=<?php echo $d['id_kriteria']; ?>" class="btn btn-warning">Ubah</a>
                                <a style="font-size: 15px;" href="hapus.php?id=<?php echo $d['id_kriteria']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </font>
    </div>
</div>
</div>