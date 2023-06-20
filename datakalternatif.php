<div class="table-responsive">
    <div class="panel panel-default">
        <font size="2px">
        <!-- Default panel contents -->
        <div class="panel-heading">DATA ALTERNATIF</div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th><center>Id Alternatif</center></th>
                        <th><center>Nama Alternatif</center></th>
                        <th><center>Pilihan</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("konfig/koneksi.php");

                    $s = mysqli_query($k21, "select * from alternatif order by id_alternatif ASC");
                    while ($d = mysqli_fetch_assoc($s)) {
                    ?>
                        <tr>
                            <td><center><?php echo $d['id_alternatif']; ?></center></td>
                            <td><center><?php echo $d['nm_alternatif']; ?></center></td>
                            <td><center>
                                <a href="?a=alternatif&k=ubaha&id=<?php echo $d['id_alternatif']; ?>" class="btn btn-warning">Ubah</a>
                                <a href="hapusalternatif.php?id=<?php echo $d['id_alternatif']; ?>" class="btn btn-danger">Hapus</a>
                                </center></td>
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