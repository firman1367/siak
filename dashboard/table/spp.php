

<div class="row">
<!-- isi -->
	<div class="col-md-12">
		<div class="box box-success box-solid no-border">
			<div class="box-header">
				<i class="fa fa-table"></i>
				<span class="box-title">SPP</span>
				<div class="box-tools">
					<a class="btn btn-box-tool" data-widget="collapse" title="hide" data-toggle="tooltip" data-placement="top"><i class="fa fa-minus"></i></a>
					<a class="btn btn-box-tool" data-widget="remove" title="remove" data-toggle="tooltip" data-placement="top"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="box-body">
				<form action="?spp-create" name="#" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label">Kelas</label>
						<?php
							if (isset($_GET['spp'])) {
								$id_kelas = $_GET['spp'];
								$query = mysql_query("SELECT id_kelas,nama_kelas FROM kelas WHERE id_kelas=".$id_kelas);
								$data_kelas = mysql_fetch_array($query);
							}
						?>
						<input class="form-control" type="hidden" name="kelas" value="<?php echo $data_kelas['id_kelas']; ?>" readonly="readonly">
						<input type="text" class="form-control" value="<?php echo $data_kelas['nama_kelas']; ?>" readonly="readonly">
					</div>
					<div class="table-responsive no-peading">
						<table id="example1" class="table table-bordered table-hover table-striped display" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th width="3%" align="center">#</th>
									<th class="text-center" width="20%">NIS</th>
									<th class="text-center" width="55%">Nama Siswa</th>
									<th class="text-center">Keterangan</th>
									
								</tr>
							</thead>
							<tbody>
								<?php
									if(isset($_GET['spp'])){
										$id = $_GET['spp'];
										$nomer = 1;
										$query = mysql_query("SELECT a.id_siswa, a.nis, a.nama_siswa, b.id_kelas
															  FROM siswa AS a
															  INNER JOIN kelas AS b USING(id_kelas)
															  WHERE id_kelas=".$id);
										while ($data=mysql_fetch_array($query)) {
								?>

								<tr>
									<td><center><?php echo $nomer ?></center></td>
									<td><?php echo $data['nis']; ?><input type="hidden" name="id_kelas[]" class="form-control" value="<?php echo $data_kelas['id_kelas']; ?>" readonly="readonly"></td>
									<td><?php echo $data['nama_siswa']; ?><input type="hidden" name="id_siswa[]" class="form-control" value="<?php echo $data['id_siswa'] ?>"></td>
									<td width="3%" align="center">
										<select class="form-control" type="text" name="keterangan[]" required>
											<option>...</option>
											<option>LUNAS</option>
											<option>BELUM LUNAS</option>
										</select>
									</td>

								</tr>
								<?php
									$nomer++;
								}}
								?>
							</tbody>
							<?php
								$query2 = mysql_query("SELECT a.id_siswa, b.id_kelas
													   FROM siswa AS a
													   INNER JOIN kelas AS b USING(id_kelas)
													   WHERE id_kelas=".$id_kelas);
								$cek = mysql_num_rows($query2);
							?>
							<!-- jumlah data tersedia -->
							<input type="hidden" name="jumlah_data" value="<?php echo $cek; ?>">
						</table>
					</div>
					<input class="btn btn-success btn-flat" type="submit" name="spp-create" value="Simpan" style="margin-top:15px;">
					<a class="btn btn-success btn-flat" href="?detail-spp=<?php echo $data_kelas['id_kelas']; ?>" style="margin-top:15px;">Detail spp</a>
				</form>
			</div>
		</div>
	</div>
</div>
