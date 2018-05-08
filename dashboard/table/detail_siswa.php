<div class="row">
<!-- isi -->
	<div class="col-md-12">
		<div class="box box-success box-solid no-border">
			<div class="box-header">
				<i class="fa fa-table"></i>
				<span class="box-title">SIswa</span>
				<div class="box-tools">
					<a class="btn btn-box-tool" data-widget="collapse" title="hide" data-toggle="tooltip" data-placement="top"><i class="fa fa-minus"></i></a>
					<a class="btn btn-box-tool" data-widget="remove" title="remove" data-toggle="tooltip" data-placement="top"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="box-body">
				<?php
				if(isset($_GET['siswa-detail'])){
					$id = $_GET['siswa-detail'];
					$nomer = 1;
					$query = mysql_query("SELECT a.nis, a.no_induk, a.no_peserta_un, a.nama_siswa, a.gender, a.ttl, a.alamat, a.nama_ayah, a.nama_ibu,
										  a.ijazah, a.skhun, a.tlp, a.foto, b.nama_kelas
										  FROM siswa AS a
										  JOIN kelas AS b USING(id_kelas)
										  WHERE id_siswa=".$id);
					$data=mysql_fetch_array($query);
					}
				?>
				<form role="form" action="?users=siswa-create" class="form-horizontal" enctype="multipart/form-data" method="post">
					<div class="form-group">
					<label class="col-sm-2 control-label">NIS</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="nis" value="<?php echo $data['nis'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">No Induk</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="no_induk" value="<?php echo $data['no_induk'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">No Peserta UN</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="no_peserta_un" value="<?php echo $data['no_peserta_un'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">Nama</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="name" value="<?php echo $data['nama_siswa'] ?>" readonly="readonly">
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
					<label class="col-sm-2 control-label">Nama Ayah</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="nama_ayah" value="<?php echo $data['nama_ayah'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">Nama Ibu</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="nama_ibu" value="<?php echo $data['nama_ibu'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">No Ijazah</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="ijazah" value="<?php echo $data['ijazah'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">No SKHUN</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="skhun" value="<?php echo $data['skhun'] ?>" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">No Telepon</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="tlp" value="<?php echo $data['tlp'] ?>" readonly="readonly">
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
