<div class="row">
	<div class="col-md-12">
		<div class="box box-success box-solid no-border">
			<div class="box-header">
				<i class="fa fa-table"></i>
				<span class="box-title">Form Edit Siswa</span>
				<div class="box-tools">
					<a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="hide" data-placement="top"><i class="fa fa-minus"></i></a>
					<a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="remove" data-placement="top"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="box-body">
				<form role="form" class="form-horizontal" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label class="col-sm-3 control-label">NIS</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="nis" value="<?php echo $row['nis']; ?>">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-3 control-label">No Induk</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="no_induk" value="<?php echo $row['no_induk']; ?>">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-3 control-label">No Peserta UN</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="no_peserta_un" value="<?php echo $row['no_peserta_un']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Nama</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="name" value="<?php echo $row['nama_siswa']; ?>">
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
						<label class="col-sm-3 control-label">Kelas</label>
						<div class="col-md-4">
							<select class="form-control" name="kelas" required>
								<?php
								$kelas 	=	mysql_query("SELECT * FROM kelas");

								while ($data=mysql_fetch_array($kelas)) {
									?>
									<option value="<?php echo $data['id_kelas']; ?>"><?php echo $data['nama_kelas']; ?></option>
									<?php
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Alamat</label>
						<div class="col-md-4">
							<textarea class="form-control" name="alamat"><?php echo $row['alamat']; ?></textarea>
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-3 control-label">Nama Ayah</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="nama_ayah" value="<?php echo $row['nama_ayah']; ?>">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-3 control-label">Nama Ibu</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="nama_ibu"value="<?php echo $row['nama_ibu']; ?>">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-3 control-label">No Ijazah</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="ijazah" value="<?php echo $row['ijazah']; ?>">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-3 control-label">No SKHUN</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="skhun"value="<?php echo $row['skhun']; ?>">
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-3 control-label">Telepon</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="tlp" value="<?php echo $row['tlp']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Foto</label>
						<div class="col-md-5">
							<a class="fancybox" href="<?php echo $row['foto']; ?>"><img src="<?php echo $row['foto'] ?>" width="150" height="150"></a>
							<input type="file" name="foto">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-3"></div>
						<div class="col-md-5">
							<button type="submit" class="btn btn-success" name="siswa-update">Simpan</button>
							<a href="javascript:history.back()" class="btn btn-success">Kembali</a>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
