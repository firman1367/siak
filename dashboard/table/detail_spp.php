<div class="row">
    <div class="col-md-12">
        <div class="box box-success box-solid no-border">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-table"></i> Detail spp</h3>
                <div class="box-tools">
                    <button class="btn btn-box-tool" data-toggle="tooltip" data-widget="collapse" title="hide"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-toggle="tooltip" data-widget="collapse" title="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <?php
                    if (isset($_GET['detail-spp'])) {
                        $id_kelas = $_GET['detail-spp'];
                        $query = mysql_query("SELECT id_kelas,nama_kelas FROM kelas WHERE id_kelas=".$id_kelas);
                        $data_kelas = mysql_fetch_array($query);
                    }
                ?>
                <p><b>Nama Kelas : <?php echo $data_kelas['nama_kelas']; ?></b></p>
                <div class="table-responsive no-peading">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr class="bg-green">
                                <th class="text-center" width="6%" style="color:white;">No.</th>
                                <th class="text-center" width="50%" style="color:white;">Nama Siswa</th>
                                <th class="text-center"  style="color:white;">Keterangan</th>
                                <th class="text-center"  style="color:white;">Action</th>
                            <tr>
                        </thead>
                        <tbody>
                            <?php
                                $nomer = 1;
                                $query2 = mysql_query("SELECT a.id_kelas, b.nama_siswa, b.id_siswa, c.id_spp, c.keterangan FROM spp AS c
                                                       INNER JOIN kelas AS a USING(id_kelas)
                                                       INNER JOIN siswa AS b USING(id_siswa)
                                                       WHERE a.id_kelas = $data_kelas[0]
                                                       GROUP BY b.id_siswa");
                                while($data2 = mysql_fetch_array($query2)){
                            ?>

                            <tr>
                                <td class="text-center"><?php echo $nomer++; ?></td>
                                <td><?php echo $data2['nama_siswa']; ?></td>
                                <td><?php echo $data2['keterangan']; ?></td>
                                <td>
									<center>
										<a href="?edit-spp=<?php echo $data[0]; ?>" class="btn btn-warning"><span class="fa fa-edit fa-fw"></span>Edit</a>
										<a href="?spp-delete=<?php echo $data[0]; ?>" class="btn btn-danger" onclick="return confirm('are you sure to delete it?')"><span class="fa fa-trash-o fa-fw"></span>Delete</a>
									</center>
								</td>
                            </tr>

                            <?php } ?>

                        </tbody>
                    </table>
                    <a class="btn btn-default btn-flat" href="javascript:history.back()">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
