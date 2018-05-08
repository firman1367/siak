<div class="row">
<!-- isi -->
	<div class="col-md-12">
		<div class="box box-success box-solid no-border">
			<div class="box-header">
				<i class="fa fa-table"></i>
				<span class="box-title">Guru</span>
				<div class="box-tools">
					<a class="btn btn-box-tool" data-widget="collapse" title="hide" data-toggle="tooltip" data-placement="top"><i class="fa fa-minus"></i></a>
					<a class="btn btn-box-tool" data-widget="remove" title="remove" data-toggle="tooltip" data-placement="top"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="box-body">
				<?php
				if(isset($_GET['guru-detail'])){
					$id = $_GET['guru-detail'];
					$nomer = 1;
					$query = mysql_query("SELECT a.nik, a.nama_guru, a.no_ktp, a.gender, a.ttl, a.alamat, a.tlp, a.status, a.pendidikan, a.foto, b.nama_mapel
										  FROM guru AS a
										  JOIN mapel AS b USING(id_mapel)
										  WHERE id_guru =".$id);
					$data=mysql_fetch_array($query);
					}
				?>
				<form role="form" action="?users=siswa-create" class="form-horizontal" enctype="multipart/form-data" method="post">
					<div class="form-group">
					<label class="col-sm-2 control-label">NIK</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="nik" value="<?php echo $data['nik'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">Nama</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="name" value="<?php echo $data['nama_guru'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">No KTP</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="no_ktp" value="<?php echo $data['no_ktp'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">Gender</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="gender" value="<?php echo $data['gender'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">Tempat Tanggal Lahir</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="ttl" value="<?php echo $data['ttl'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">Alamat</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">No Telepon</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="tlp" value="<?php echo $data['tlp'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">Status</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="status" value="<?php echo $data['status'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">Pendidikan terakhir</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="pendidikan" value="<?php echo $data['pendidikan'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">Foto</label>
						<div class="col-md-8">
							<a class="fancybox" href="<?php echo $data['foto']; ?>"><img src="<?php echo $data['foto'] ?>" width="150" height="150"></a>
						</div>
					</div>

				</form>
				<a class="btn btn-default btn-flat" href="javascript:history.back()">Kembali</a>
			</div>
		</div>
	</div>
</div>
