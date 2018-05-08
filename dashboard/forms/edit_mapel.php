<div class="row">
	<div class="col-md-12">
		<div class="box box-success box-solid">
			<div class="box-header">
				<i class="fa fa-sitemap"></i>
				<span class="box-title">Edit Mata Pelajaran</span>
				<div class="box-tools">
					<a class='btn btn-box-tool' data-widget="collapse" title="hide" data-toggle="tooltip" data-placement="top"><i class="fa fa-minus"></i></a>
					<a class='btn btn-box-tool' data-widget="remove" title="remove" data-toggle="tooltip" data-placement="top"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="box-body">
				<form role="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
					<div class="form-group">
						<label class="col-md-3">Mata Pelajaran</label>
						<div class="col-md-4">
							<input class="form-control" type="text" name="nama_mapel" value="<?php echo $row[1]; ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-3"></div>
						<div class="col-md-4">
							<button class="btn btn-success" type="submit" name="mapel-update" style="margin-right:5px;">Simpan</button>
							<a href="?data=mapel" class="btn btn-success">Kembali</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
