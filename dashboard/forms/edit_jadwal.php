<div class="row">
	<div class="col-md-12">
		<div class="box box-success box-solid">
			<div class="box-header">
				<i class="fa fa-sitemap"></i>
				<span class="box-title">Edit jadwal</span>
				<div class="box-tools">
					<a class='btn btn-box-tool' data-widget="collapse" title="hide" data-toggle="tooltip" data-placement="top"><i class="fa fa-minus"></i></a>
					<a class='btn btn-box-tool' data-widget="remove" title="remove" data-toggle="tooltip" data-placement="top"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="box-body">
				<form role="form" class="form-horizontal" enctype="multipart/form-data" method="POST">

						<input type="hidden" class="form-control" name="kelas" value="<?php echo $row['id_kelas'] ?>" readonly="readonly">


					<div class="form-group">
						<label class="col-md-3 control-label">Hari</label>
						<div class="col-sm-4">
						<select class="form-control" name="hari" id="hari" required>
							<option selected="selected"><?php echo $row['hari']; ?></option>
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
						<label class="col-md-3">jam</label>
						<div class="col-md-4">
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
						<label class="col-md-3">Guru</label>
						<div class="col-md-4">
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
					<div class="form-group">
						<div class="col-md-3"></div>
						<div class="col-md-4">
							<button class="btn btn-success" type="submit" name="jadwal-update" style="margin-right:5px;">Simpan</button>
							<a href="javascript:history.back()" class="btn btn-success">Kembali</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
