<div class="row">
	<div class="col-md-12">
		<div class="box box-success box-solid no-border">
			<div class="box-header">
				<i class="fa fa-download"></i>
				<span class="box-title">Form Download</span>
				<div class="box-tools">
					<button class="btn btn-box-tool" data-widget="collapse" title="hide" data-toggle="tooltip" dataplacement="top"><i class="fa fa-minus"></i></button>
					<button class="btn btn-box-tool" data-widget="remove" title="close" data-toggle="tooltip" dataplacement="top"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="table-responsive no-peading">
					<table id="example1" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th width="3%" align="center">#</th>
								<th>Nama File</th>
								<th>Tanggal Upload</th>
								<th>Tipe File</th>
								<th>Ukuran File</th>
								<th width="25%"><center>Action</center></th>
							</tr>
						</thead>
						<tbody>
							<?php
								$nomer = 1;
								$query = mysql_query("SELECT * FROM dt_materi");
								while($data = mysql_fetch_row($query)){
							?>
							<tr>
								<td><?php echo $nomer; ?></td>
								<td><?php echo $data[2]; ?></td>
								<td><?php echo $data[1]; ?></td>
								<td><?php echo $data[3]; ?></td>
								<td><?php echo $data[4]; ?> kb</td>
								<td>
									<?php
										if(isset($_SESSION['access'])){
											if($_SESSION['access'] == 'admin'){
									?>
									<center>
										<a href="<?php echo $data[5]; ?>" class="btn btn-success"><span class="fa fa-download fa-fw"></span>Download</a>
										<a href="?materi-delete=<?php echo $data[0]; ?>" class="btn btn-danger" onClick="return confirm('are you sure to delete it?')"><span class="fa fa-trash-o fa-fw"></span>Delete</a>
									</center>
									<?php
										}else if($_SESSION['access'] == 'user'){
									?>
										<center>
											<a href="<?php echo $data[5]; ?>" class="btn btn-success"><span class="fa fa-download fa-fw"></span>Download</a>
										</center>
									<?php
											}
										}
									?>
								</td>
							</tr>
							<?php
								$nomer++;
								}
							?>
						</tbody>
					</table>
				</div>
				<?php
					if(isset($_SESSION['access'])){
						if($_SESSION['access'] == 'admin'){
				?>
				<a class="btn btn-success" data-keyboard="false" data-backdrop="static" data-toggle="modal" data-target="#upload_materi" style="margin-top:8px;"><span class="fa fa-upload"></span> Upload</a>
				<div class="modal fade" id="upload_materi" tabindex="-1" role="dialog" area-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background-color:#00a65a;color:white;">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
								<h4 class="modal-title" id="myModalLabel"> Upload Materi </h4>
							</div>
							<div class="modal-body">
								<form role="form" action="" class="form-horizontal" enctype="multipart/form-data" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label">Nama File</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="nama_file" placeholder="input nama file" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Upload File</label>
										<div class="col-md-8">
											<input type="file" name="file" required>
										</div>
										<div class="col-md-8">
											<span><strong>(<i>ext : doc, docx, xls, xlsx, ppt, pptx, pdf, rar, zip</i>)</strong></span><br>
											<span><strong>(<i>maks : 20MB</i>)</strong></span>
										</div>
									</div>
									<div class="modal-footer" style="text-align:left">
										<button type="submit" class="btn btn-success" name="upload-materi" style="margin-right:5px;">Simpan</button>
										<button type="reset" class="btn btn-success">Reset</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php
						}
					}
				?>
			</div>
		</div>
	</div>
</div>
