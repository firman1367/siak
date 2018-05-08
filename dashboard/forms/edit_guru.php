<div class="row">
	<div class="col-md-12">
		<div class="box box-success box-solid no-border">
			<div class="box-header">
				<i class="fa fa-table"></i>
				<span class="box-title">Form Edit Guru</span>
				<div class="box-tools">
					<a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="hide" data-placement="top"><i class="fa fa-minus"></i></a>
					<a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="remove" data-placement="top"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="box-body">
				<form role="form" class="form-horizontal" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label class="col-sm-3 control-label">NIK</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="nik" value="<?php echo $row['nik']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Nama</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="name" value="<?php echo $row['nama_guru']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">No KTP</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="no_ktp" value="<?php echo $row['no_ktp']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Gender</label>
						<div class="col-md-4">
							<select class="form-control" name="gender" value="<?php echo $row['gender']; ?>">
								<option>Pria</option>
								<option>Wanita</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
						<div class="col-md-4">
						<input type="text" class="form-control" name="ttl" value="<?php echo $row['ttl']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Alamat</label>
						<div class="col-md-4">
						<textarea class="form-control" name="alamat"><?php echo $row['alamat']; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Telepon</label>
						<div class="col-md-4">
						<input type="text" class="form-control" name="tlp" value="<?php echo $row['tlp']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Status</label>
						<div class="col-md-4">
						<select class="form-control" name="status" required>
							<option>Mahasiswa</option>
							<option>Menikah</option>
							<option>Belum menikah</option>
						</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Pendidikan</label>
						<div class="col-md-4">
						<select class="form-control" name="pendidikan" required>
							<option>SMP</option>
							<option>SMA</option>
							<option>SMK</option>
							<option>S1</option>
							<option>S2</option>
						</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Mata Pelajaran</label>
						<div class="col-md-4">
							<select class="form-control" name="mapel" required>
								<?php
								$mapel 	=	mysql_query("SELECT * FROM mapel");

								while ($data=mysql_fetch_array($mapel)) {
									?>
									<option value="<?php echo $data['id_mapel']; ?>"><?php echo $data['nama_mapel']; ?></option>
									<?php
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Foto</label>
						<div class="col-md-5">
							<a class="fancybox" href="<?php echo $row['foto']; ?>"><img src="<?php echo $row['foto'] ?>" width="150" height="150"></a>
							<input type="file" name="foto">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-3"></div>
						<div class="col-md-5">
							<button type="submit" class="btn btn-success" name="guru-update">Simpan</button>
							<a class="btn btn-success" href="?users=guru">Kembali</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
