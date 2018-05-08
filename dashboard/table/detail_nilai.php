<?php
	if (isset($_POST['cari-nilai'])) {
		include('table/detail_nilai_2.php');
	}else{
?>
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
                <?php
                    if (isset($_GET['detail-nilai'])) {
                        $id_kelas = $_GET['detail-nilai'];
                        $query = mysql_query("SELECT id_kelas,nama_kelas FROM kelas WHERE id_kelas= '$id_kelas'");
                        $data_kelas = mysql_fetch_array($query);
                    }
                ?>
                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Kelas</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="nama_kelas" value="<?php echo $data_kelas['nama_kelas']; ?>" readonly="readonly">
                            <input class="form-control" type="hidden" name="id_kelas" value="<?php echo $data_kelas['id_kelas']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Siswa</label>
                        <div class="col-md-6">
                            <select class="form-control" name="siswa">
                                <?php
                                    $query = mysql_query("SELECT id_siswa,nama_siswa FROM siswa WHERE id_kelas = '$id_kelas'");
                                    while($data = mysql_fetch_array($query)){
                                ?>
                                <option value="<?php echo $data[0] ?>"><?php echo $data[1] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Mate Pelajaran</label>
                        <div class="col-md-6">
                            <select class="form-control" name="mapel">
                                <?php
                                    $query = mysql_query("SELECT id_mapel,nama_mapel FROM mapel");
                                    while ($data = mysql_fetch_array($query)){
                                ?>
                                <option value="<?php echo $data[0] ?>"><?php echo $data[1] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button type="submit" name="cari-nilai" class="btn btn-primary btn-flat"><i class="fa fa-search"></i> Lihat Nilai</button>
                            <a href="javascript:history.back()" class="btn btn-default btn-flat"><i class="fa fa-arrow-circle-left"></i> kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
	}
?>
