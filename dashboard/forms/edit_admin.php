<div class="row">
	<div class="col-md-12">
		<div class="box box-success box-solid no-border">
			<div class="box-header">
				<i class="fa fa-table"></i>
				<span class="box-title">Form Edit Admin</span>
				<div class="box-tools">
					<a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="hide" data-placement="top"><i class="fa fa-minus"></i></a>
					<a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="remove" data-placement="top"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="box-body">
				<form role="form" class="form-horizontal" enctype="multipart/form-data" method="post" >
					<div class="form-group">
						<label class="col-md-3 control-label">Nama</label>
						<div class="col-md-5">
							<input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Username</label>
						<div class="col-md-5">
							<input class="form-control" type="text" name="username" value="<?php echo $row['username']; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Password</label>
						<div class="col-md-5">
							<input class="form-control" type="text" name="password" value="<?php echo $row['password']; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Akses</label>
						<div class="col-md-5">
							<select class="form-control" name="access" required>
								<option>admin</option>
								<option>guru</option>
								<option>siswa</option>
							</select>
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
						<div class="col-md-4">
							<button type="submit" class="btn btn-success" name="admin-update">Simpan</button>
							<a class="btn btn-success" href="?users=admin">Kembali</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
