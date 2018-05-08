<div class="row">
    <div class="col-md-12">
        <div class="box box-success box-solid no-border">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-table"></i> Detail Nilai</h3>
                <div class="box-tools">
                    <button class="btn btn-box-tool" data-toggle="tooltip" data-widget="collapse" title="hide"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-toggle="tooltip" data-widget="collapse" title="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Kelas</label>
                        <?php
                            $idkelas = $_POST['id_kelas'];
                            $query = mysql_query("SELECT * FROM kelas WHERE id_kelas = '$idkelas'");
                            $data = mysql_fetch_array($query);
                        ?>
                        <label class="col-md-2 control-label">: <?php echo $data['nama_kelas']; ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Nama Siswa</label>
                        <?php
                            $siswa = $_POST['siswa'];
                            $query = mysql_query("SELECT * FROM siswa WHERE id_siswa = '$siswa'");
                            $data = mysql_fetch_array($query);
                        ?>
                        <label class="col-md-2 control-label">: <?php echo $data['nama_siswa']; ?></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Mata Pelajaran</label>
                        <?php
                            $mapel = $_POST['mapel'];
                            $query = mysql_query("SELECT * FROM mapel WHERE id_mapel = '$mapel'");
                            $data = mysql_fetch_array($query);
                        ?>
                        <label class="col-md-2 control-label">: <?php echo $data['nama_mapel']; ?></label>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr class="bg-green">
                                <th class="text-center" width="5%">No.</th>
                                <th class="text-center">Ulangan Harian</th>
                                <th class="text-center">Ulangan Tengah Semester</th>
                                <th class="text-center">Ulangan Akhir Semester</th>
                                <th class="text-center">Nilai Akhir</th>
                                <th class="text-center" width="20%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <?php
                                    $query = mysql_query("SELECT * FROM nilai WHERE id_siswa = '$siswa' AND jenisnilai = 'UH' AND id_mapel = '$mapel'");
                                    $data_uh = mysql_fetch_array($query);
                                ?>
                                <td class="text-center"><?php echo $data_uh['nilai'] ?></td>
                                <?php
                                    $query = mysql_query("SELECT * FROM nilai WHERE id_siswa = '$siswa' AND jenisnilai = 'UTS' AND id_mapel = '$mapel'");
                                    $data_uts = mysql_fetch_array($query);
                                ?>
                                <td class="text-center"><?php echo $data_uts['nilai'] ?></td>
                                <?php
                                    $query = mysql_query("SELECT * FROM nilai WHERE id_siswa = '$siswa' AND jenisnilai = 'UAS' AND id_mapel = '$mapel'");
                                    $data_uas = mysql_fetch_array($query);
                                ?>
                                <td class="text-center"><?php echo $data_uas['nilai'] ?></td>
                                <?php
                                    $sum = mysql_fetch_array(mysql_query("SELECT SUM(nilai) AS jumlah FROM nilai WHERE id_siswa = '$siswa' AND id_mapel = '$mapel'"));
                                    $count =mysql_fetch_array(mysql_query("SELECT COUNT(nilai) AS total FROM nilai WHERE id_siswa = '$siswa' AND id_mapel = '$mapel'"));
                                    $nilai = $sum['jumlah'] / $count['total'];
                                    $nilai_akhir = round($nilai,4);
                                ?>
                                <td class="text-center"><?php echo $nilai_akhir ?></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-primary btn-flat"><i class="fa fa-edit"></i> edit</a>
                                    <a href="#" class="btn btn-danger btn-flat" onclick="return confirm('yakin akan menghapus ini?')"><i class="fa fa-times"></i> delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <a href="javascript:history.back()" class="btn btn-default btn-flat"><i class="fa fa-arrow-circle-left"></i> kembali</a>

            </div>
        </div>
    </div>
</div>
