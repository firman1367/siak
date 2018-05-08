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
				<div class="table-responsive no-peading">
					<table id="example1" class="table table-bordered table-hover table-striped display" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th width="3%" align="center">#</th>
								<th class="text-center">NIS</th>
								<th class="text-center">Nama</th>
								<th class="text-center">Foto</th>
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
							if(isset($_GET['lihat-siswa'])){
								$id = $_GET['lihat-siswa'];
								$nomer = 1;
								$query = mysql_query("SELECT a.id_siswa, a.nis, a.nama_siswa, a.foto, b.id_kelas
													  FROM siswa AS a
													  INNER JOIN kelas AS b USING(id_kelas)
													  WHERE id_kelas=".$id);
								while ($data=mysql_fetch_array($query)) {
							?>
							<tr>
								<td><center><?php echo $nomer ?></center></td>
								<td><?php echo $data['nis'] ?></td>
								<td><?php echo $data['nama_siswa'] ?></td>
								<td class="text-center"><a class="fancybox" href="<?php echo $data['foto']; ?>"><img src="<?php echo $data['foto'] ?>" class="img-circle" width="50" height="50"></a></td>
								<?php
								  if(isset($_SESSION['access'])){
									if($_SESSION['access'] == 'admin'){
								?>
								<td>
									<center>
										<a href="?siswa-detail=<?php echo $data['id_siswa']; ?>" class="btn btn-success"><span class="fa fa-edit fa-fw"></span>Detail</a>
										<a href="?siswa-edit=<?php echo $data['id_siswa']; ?>" class="btn btn-warning"><span class="fa fa-edit fa-fw"></span>Edit</a>
										<a href="?siswa-delete=<?php echo $data['id_siswa']; ?>" class="btn btn-danger" onclick="return confirm('are you sure to delete it?')"><span class="fa fa-trash-o fa-fw"></span>Delete</a>
									</center>
								</td>
								<?php }} ?>
							</tr>
							<?php
								$nomer++;
							}}
							?>
						</tbody>
					</table>
				</div>
				<?php
				  if(isset($_SESSION['access'])){
					if($_SESSION['access'] == 'admin'){
				?>
				<a class="btn btn-success" data-keyboard="false" data-backdrop="static" data-toggle="modal" data-target="#create_siswa" style="margin-top:8px;">Create</a>
				<!-- Modal -->
				<div class="modal fade" id="create_siswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background-color:#00a65a;color:white;">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
								<h4 class="modal-title" id="myModalLabel"> Tambah Data Siswa </h4>
							</div>
							<div class="modal-body">
								<form role="form" action="?users=siswa-create" class="form-horizontal" enctype="multipart/form-data" method="post">
									<div class="form-group">
									<label class="col-sm-3 control-label">NISN</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="nis" placeholder="Input NISN" required>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">No Induk</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="no_induk" placeholder="Input Nomer Induk Siswa" required>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">No Peserta UN</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="no_peserta_un" placeholder="Input Nomer Peserta UN" required>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">Nama</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="name" placeholder="Enter Nama" required>
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
											<input type="text" class="form-control" name="ttl" placeholder="Input Tempat Tanggal Lahir" required>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">Kelas</label>
										<div class="col-md-8">
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
										<div class="col-md-8">
											<textarea class="form-control" name="alamat" required></textarea>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">Nama Ayah</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="nama_ayah" placeholder="Input Nama Ayah" required>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">Nama Ibu</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="nama_ibu" placeholder="Input Nama Ibu" required>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">No Ijazah</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="ijazah" placeholder="Input No Ijazah" required>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">No SKHUN</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="skhun" placeholder="Input No SKHUN" required>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">Telepon</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="tlp" placeholder="Input Nomer Telepon" required>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">Pilih Foto</label>
										<div class="col-md-8">
											<input type="file" name="foto" required>
										</div>
									</div>
									<div class="modal-footer" style="text-align:left">
										<button type="submit" class="btn btn-success" name="create-siswa" style="margin-right:5px;">Submit</button>
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
