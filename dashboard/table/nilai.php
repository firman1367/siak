

<div class="row">
<!-- isi -->
	<div class="col-md-12">
		<div class="box box-success box-solid no-border">
			<div class="box-header">
				<i class="fa fa-table"></i>
				<span class="box-title">Nilai Pelajaran</span>
				<div class="box-tools">
					<a class="btn btn-box-tool" data-widget="collapse" title="hide" data-toggle="tooltip" data-placement="top"><i class="fa fa-minus"></i></a>
					<a class="btn btn-box-tool" data-widget="remove" title="remove" data-toggle="tooltip" data-placement="top"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="box-body">
				<form action="?nilai-create" name="#" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label">Kelas</label>
						<?php
							if (isset($_GET['nilai'])) {
								$id_kelas = $_GET['nilai'];
								$query = mysql_query("SELECT id_kelas,nama_kelas FROM kelas WHERE id_kelas=".$id_kelas);
								$data_kelas = mysql_fetch_array($query);
							}
						?>
						<input class="form-control" type="hidden" name="kelas" value="<?php echo $data_kelas['id_kelas']; ?>" readonly="readonly">
						<input type="text" class="form-control" value="<?php echo $data_kelas['nama_kelas']; ?>" readonly="readonly">
					</div>
					<div class="form-group">
						<label class="control-label">Mata Pelajaran</label>
							<select class="form-control" name="id_mapel">
								<?php
									$query = mysql_query("SELECT id_mapel,nama_mapel FROM mapel");
									while($data = mysql_fetch_array($query)){
								?>
								<option value="<?php echo $data['id_mapel'] ?>"><?php echo $data['nama_mapel'] ?></option>
								<?php } ?>
							</select>
					</div>
					<div class="form-group">
						<label class="control-label">Pilih Nilai</label>
						<select class="form-control" name="jenisnilai">
							<option>UH</option>
							<option>UTS</option>
							<option>UAS</option>
						</select>
					</div>
					<div class="table-responsive no-peading">
						<table id="example1" class="table table-bordered table-hover table-striped display" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th width="3%" align="center">#</th>
									<th class="text-center" width="20%">NIS</th>
									<th class="text-center" width="55%">Nama Siswa</th>
									<th class="text-center">Nilai</th>
								</tr>
							</thead>
							<tbody>
								<?php
									if(isset($_GET['nilai'])){
										$id = $_GET['nilai'];
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
									<td class="text-center"><input type="text" name="nilai[]" class="form-control" placeholder="input nilai"></td>

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
					<input class="btn btn-success btn-flat" type="submit" name="nilai-create" value="Simpan" style="margin-top:15px;">
					<a class="btn btn-success btn-flat" href="?detail-nilai=<?php echo $data_kelas['id_kelas']; ?>" style="margin-top:15px;">Detail Nilai</a>
				</form>
			</div>
		</div>
	</div>
</div>
