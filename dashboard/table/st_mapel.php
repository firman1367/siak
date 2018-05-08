<div class="row">
	<div class="col-md-12">
		<div class="box box-success box-solid no-border">
			<div class="box-header">
				<i class="fa fa-sitemap"></i>
				<span class="box-title">Data Struktur Mata Pelajaran</span>
				<div class="box-tools">
					<button class="btn btn-box-tool" data-widget="collapse" title="hide" data-toggle="tooltip" data-placement="top"><i class="fa fa-minus"></i></button>
					<button class="btn btn-box-tool" data-widget="remove" title="remove" data-toggle="tooltip" data-placement="top"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="table-responsive no-peading">
					<table id="example1" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th width="3%">#</th>
								<th>Mata Pelajaran</th>
								<th>Kelas</th>
								<?php
									if (isset($_SESSION['access'])) {
										if ($_SESSION['access'] == 'admin') {
								?>
								<th><center>Action</center></th>
								<?php
										}
									}
								?>
							</tr>
						</thead>
						<tbody>
							<?php
								$nomer = 1;
								$query = mysql_query("SELECT * FROM smapel");
								while($data = mysql_fetch_row($query)){
							?>
							<tr>
								<td><?php echo $nomer; ?></td>
								<td><?php echo $data[1]; ?></td>
								<td><?php echo $data[2]; ?></td>
								<?php
									if(isset($_SESSION['access'])){
										if($_SESSION['access'] == 'admin'){
								?>
								<td>
									<center>
										<a href="?edit-st_mapel=<?php echo $data[0]; ?>" class="btn btn-warning"><span class="fa fa-edit fa-fw"></span>Edit</a>
										<a href="?st_mapel-delete=<?php echo $data[0]; ?>" class="btn btn-danger" onclick="return confirm('are you sure to delete it?')"><span class="fa fa-trash-o fa-fw"></span>Delete</a>
									</center>
								</td>
								<?php
										}
									}
								?>
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
				<a class="btn btn-success" data-keyboard="false" data-backdrop="static" data-toggle="modal" data-target="#create_st_mapel" style="margin-top:8px;">Create</a>
				<!-- Modal -->
				<div class="modal fade" id="create_st_mapel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background-color:#00a65a;color:white;">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
								<h4 class="modal-title" id="myModalLabel"> Tambah Struktur Mapel </h4>
							</div>
							<div class="modal-body">
								<form role="form" action="?data=st_mapel-create" class="form-horizontal" enctype="multipart/form-data" method="post">
									<div class="form-group">
										<?php
											$query = mysql_query("SELECT id_mapel,nama_mapel FROM mapel");
											while ($data=mysql_fetch_array($query)){
										?>
										<label class="col-md-7 control-label"><?php echo $data[1]; ?></label>
										<input type="hidden" name="mapel[]" value="<?php echo $data[0]; ?>">
										<div class="col-md-5">
											<input class="minimal" type="checkbox" name="kelas[]" value="Kelas1">Kelas 1
											<input class="minimal" type="checkbox" name="kelas[]" value="Kelas2">Kelas 2
											<input class="minimal" type="checkbox" name="kelas[]" value="Kelas3">Kelas 3
										</div>
										<?php
											}
										?>
									</div>
									<div class="modal-footer" style="text-align:left">
										<button type="submit" class="btn btn-success" name="stmapel-create" style="margin-right:5px;">Submit</button>
										<button type="reset" class="btn btn-success" style="margin-right:5px;">Reset</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- end modal -->
				<?php
						}
					}
				?>
			</div>
		</div>
	</div>
</div>
