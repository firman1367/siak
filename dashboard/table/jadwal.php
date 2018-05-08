<div class="row">
<!-- isi -->
	<div class="col-md-12">
		<div class="box box-success box-solid no-border">
			<div class="box-header">
				<i class="fa fa-table"></i>
				<span class="box-title">Jadwal Pelajaran</span>
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
								<th>Kelas</th>
								<th>Hari</th>
								<th>Mata Pelajaran</th>
								<th>Jam Pelajaran</th>
								<th>Guru Pengajar</th>
								<?php
								  if(isset($_SESSION['access'])){
									if($_SESSION['access'] == 'admin'){
								?>
								<th width="20%"><center>Action</center></th>
								<?php }} ?>
							</tr>
						</thead>
						<tbody>
							<?php
								if(isset($_GET['lihat-jadwal'])){
									$id = $_GET['lihat-jadwal'];
								$nomer = 1;
								//$query = mysql_query("SELECT a.id_kelas, b.nama_kelas, a.wali_kelas FROM jadwal AS a INNER JOIN kelas AS b USING(id_kelas)");
								$query = mysql_query("SELECT a.id_jadwal,c.nama_kelas, a.hari, b.nama_mapel, a.jam, d.nama_guru
												      FROM jadwal AS a
													  INNER JOIN mapel AS b USING(id_mapel)
													  INNER JOIN guru AS d USING(id_guru)
													  INNER JOIN kelas AS c USING(id_kelas)
												  	  WHERE id_kelas = $id");
								while ($data=mysql_fetch_array($query)) {
							?>

							<tr>
								<td><center><?php echo $nomer ?></center></td>
								<td><?php echo $data['nama_kelas']; ?></td>
								<td><?php echo $data['hari']; ?></td>
								<td><?php echo $data['nama_mapel']; ?></td>
								<td><?php echo $data['jam']; ?></td>
								<td><?php echo $data['nama_guru']; ?></td>
								<?php
								  if(isset($_SESSION['access'])){
									if($_SESSION['access'] == 'admin'){
								?>
								<td>
									<center>
										<a href="?edit-jadwal=<?php echo $data['id_jadwal']; ?>" class="btn btn-warning"><span class="fa fa-edit fa-fw"></span>Edit</a>
										<a href="?jadwal-delete=<?php echo $data['id_jadwal']; ?>" class="btn btn-danger" onclick="return confirm('are you sure to delete it?')"><span class="fa fa-trash-o fa-fw"></span>Delete</a>
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
				<a class="btn btn-success" data-keyboard="false" data-backdrop="static" data-toggle="modal" data-target="#create_jadwal" style="margin-top:8px;">Create </a>
				<!-- Modal -->
				<div class="modal fade" id="create_jadwal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background-color:#00a65a;color:white;">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
								<h4 class="modal-title" id="myModalLabel"> Tambah Jadwal Pelajaran </h4>
							</div>
							<div class="modal-body">
								<form role="form" action="?data=jadwal-create" class="form-horizontal" enctype="multipart/form-data" method="post">
									<?php
										if(isset($_GET['lihat-jadwal'])){
											$id = $_GET['lihat-jadwal'];

										$query = mysql_query("SELECT * FROM kelas
														  	  WHERE id_kelas = $id");
										$data=mysql_fetch_array($query);
										}
									?>
									<input type="hidden" class="form-control" name="kelas" placeholder="Input Nama Guru" value="<?php echo $data[0]; ?>">
									<div class="form-group">
										<label class="col-sm-3 control-label">Hari</label>
										<div class="col-md-8">
											<select class="form-control" name="hari" required>
												<option>Senin</option>
												<option>Selasa</option>
												<option>Rabu</option>
												<option>Kamis</option>
												<option>Jumat</option>
												<option>Sabtu</option>
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
										<label class="col-sm-3 control-label">Jam Pelajaran</label>
										<div class="col-md-8">
											<td><select name="jammulai" id="jammulai">
												<?php for($i=7;$i<=17;$i++){
													if($i<=9){$i="0$i";}
													echo "<option>$i</option>";
												}?>
											</select>
											<select name="menitmulai" id="menitmulai">
												<?php for($i=0;$i<=59;$i++){
													if($i<=9){
														$i="0$i";
													}
													echo "<option>$i</option>";
												}?>
											</select>
											&nbsp;s/d&nbsp;
											<select name="jamakhir" id="jamakhir">
												<?php for($i=7;$i<=17;$i++){
													if($i<=9){$i="0$i";}
													echo "<option>$i</option>";
												}?>
											</select>
											<select name="menitakhir" id="menitakhir">
												<?php for($i=0;$i<=59;$i++){
													if($i<=9){
														$i="0$i";
													}
													echo "<option>$i</option>";
												}?>
											</select>
										</td>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Guru</label>
										<div class="col-md-8">
											<select class="form-control" name="guru" required>
												<?php
												$guru 	=	mysql_query("SELECT * FROM guru");

												while ($data=mysql_fetch_array($guru)) {
													?>
													<option value="<?php echo $data['id_guru']; ?>"><?php echo $data['nama_guru']; ?></option>
													<?php
												}
												?>
											</select>
										</div>
									</div>
									<div class="modal-footer" style="text-align:left">
										<button type="submit" class="btn btn-success" name="jadwal-create" style="margin-right:5px;">Submit</button>
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
