<div class="table-responsive">
    <div class="panel panel-default">
<<<<<<< HEAD
        <font size="3px">
        <!-- Default panel contents -->
        <div class="panel-heading">DATA ALTERNATIF</div>
=======
        <font size="2px">
            <!-- Default panel contents -->
            <div class="panel-heading">DATA ALTERNATIF</div>
>>>>>>> d04769b1bd5e0051213080a01f1b247144434664

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
<<<<<<< HEAD
                            <td><center><?php echo $d['id_alternatif']; ?></center></td>
                            <td><center><?php echo $d['nm_alternatif']; ?></center></td>
                            <td><center>
                                <a style="font-size: 15px;" href="?a=alternatif&k=ubaha&id=<?php echo $d['id_alternatif']; ?>" class="btn btn-warning">Ubah</a>
                                <a style="font-size: 15px;" href="hapusalternatif.php?id=<?php echo $d['id_alternatif']; ?>" class="btn btn-danger">Hapus</a>
                                </center></td>
=======
                            <th>
                                <center>Id Alternatif</center>
                            </th>
                            <th>
                                <center>Nama Alternatif</center>
                            </th>
                            <th>
                                <center>Pilihan</center>
                            </th>
>>>>>>> d04769b1bd5e0051213080a01f1b247144434664
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("konfig/koneksi.php");

                        $s = mysqli_query($k21, "select * from alternatif order by id_alternatif ASC");
                        while ($d = mysqli_fetch_assoc($s)) {
                        ?>
                            <tr>
                                <td>
                                    <center><?php echo $d['id_alternatif']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $d['nm_alternatif']; ?></center>
                                </td>
                                <td>
                                    <center>
                                        <a href="?a=alternatif&k=ubaha&id=<?php echo $d['id_alternatif']; ?>" class="btn btn-warning">Ubah</a>
                                        <a href="hapusalternatif.php?id=<?php echo $d['id_alternatif']; ?>" class="btn btn-danger">Hapus</a>
                                    </center>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </font>
    </div>
</div>