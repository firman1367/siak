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
				<div class="table-responsive no-peading">
					<table id="example1" class="table table-bordered table-hover table-striped display" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th width="3%" align="center">#</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Foto</th>
								<?php
								  if(isset($_SESSION['access'])){
									if($_SESSION['access'] == 'admin'){
								?>
								<th width="30%"><center>Action</center></th>
								<?php }} ?>
							</tr>
						</thead>
						<tbody>
							<?php
								$nomer = 1;
								$query = mysql_query("SELECT a.id_guru, a.nik, a.nama_guru, a.gender, b.nama_mapel, a.tlp, a.alamat, a.foto
													  FROM guru AS a
													  INNER JOIN mapel AS b USING(id_mapel)");
								while ($data=mysql_fetch_array($query)) {
							?>
							<tr>
								<td><center><?php echo $nomer ?></center></td>
								<td><?php echo $data['nik'] ?></td>
								<td><?php echo $data['nama_guru'] ?></td>
								<td><a class="fancybox" href="<?php echo $data['foto']; ?>"><img src="<?php echo $data['foto'] ?>" class="img-circle" width="50" height="50"></a></td>
								<?php
								  if(isset($_SESSION['access'])){
									if($_SESSION['access'] == 'admin'){
								?>
								<td>
									<center>
										<a href="?guru-detail=<?php echo $data['id_guru']; ?>" class="btn btn-success"><span class="fa fa-edit fa-fw"></span>Detail</a>
										<a href="?guru-edit=<?php echo $data['id_guru']; ?>" class="btn btn-warning"><span class="fa fa-edit fa-fw"></span>Edit</a>
										<a href="?guru-delete=<?php echo $data['id_guru']; ?>" class="btn btn-danger" onclick="return confirm('are you sure to delete it?')"><span class="fa fa-trash-o fa-fw"></span>Delete</a>
									</center>
								</td>
								<?php }} ?>
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
				<a class="btn btn-success" data-keyboard="false" data-backdrop="static" data-toggle="modal" data-target="#create_guru" style="margin-top:8px;">Create</a>
				<!-- Modal -->
				<div class="modal fade" id="create_guru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background-color:#00a65a;color:white;">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
								<h4 class="modal-title" id="myModalLabel"> Tambah Data Guru </h4>
							</div>
							<div class="modal-body">
								<form role="form" action="?users=guru-create" class="form-horizontal" enctype="multipart/form-data" method="post">
									<div class="form-group">
									<label class="col-sm-3 control-label">NIK</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="nik" placeholder="Input Nomer Induk Kepegawaian" required>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">Nama</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="name" placeholder="Enter Nama Guru" required>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">No KTP</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="no_ktp" placeholder="Enter No KTP" required>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">Gender</label>
										<div class="col-md-8">
											<select class="form-control" name="gender" required>
												<option>Pria</option>
												<option>Wanita</option>
											</select>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="ttl" placeholder="Enter Tempat Tangal Lahir" required>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">Alamat</label>
										<div class="col-md-8">
											<textarea class="form-control" name="alamat" required></textarea>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">Telepon</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="tlp" placeholder="Input Nomor Telepon" required>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">Status</label>
									<select class="form-control" name="status" required>
										<option>Mahasiswa</option>
										<option>Menikah</option>
										<option>Belum menikah</option>
									</select>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">Pendidikan Terakhir</label>
									<div class="col-md-8">
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
										<div class="col-md-8">
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
									<label class="col-sm-3 control-label">Pilih Foto</label>
										<div class="col-md-8">
											<input type="file" name="foto" required>
										</div>
									</div>
									<div class="modal-footer" style="text-align:left">
										<button type="submit" class="btn btn-success" name="create-guru" style="margin-right:5px;">Submit</button>
										<button type="reset" class="btn btn-success" style="margin-right:5px;">Reset</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php }} ?>
			</div>
		</div>
	</div>
</div>
