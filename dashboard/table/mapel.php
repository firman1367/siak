<div class="row">
	<div class="col-md-12">
		<div class="box box-success box-solid no-border">
			<div class="box-header">
				<i class="fa fa-sitemap"></i>
				<span class="box-title">Mata Pelajaran</span>
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
								<th><center>Mata Pelajaran</center></th>
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
								$query = mysql_query("SELECT * FROM mapel");
								while($data = mysql_fetch_row($query)){
							?>
							<tr>
								<td><?php echo $nomer; ?></td>
								<td><center><?php echo $data[1]; ?></center></td>
								<?php
									if(isset($_SESSION['access'])){
										if($_SESSION['access'] == 'admin'){
								?>
								<td>
									<center>
										<a href="?edit-mapel=<?php echo $data[0]; ?>" class="btn btn-warning"><span class="fa fa-edit fa-fw"></span>Edit</a>
										<a href="?mapel-delete=<?php echo $data[0]; ?>" class="btn btn-danger" onclick="return confirm('are you sure to delete it?')"><span class="fa fa-trash-o fa-fw"></span>Delete</a>
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
				<a class="btn btn-success" data-keyboard="false" data-backdrop="static" data-toggle="modal" data-target="#create_mapel" style="margin-top:8px;">Create</a>
				<!-- Modal -->
				<div class="modal fade" id="create_mapel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background-color:#00a65a;color:white;">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
								<h4 class="modal-title" id="myModalLabel"> Tambah Mata Pelajaran </h4>
							</div>
							<div class="modal-body">
								<form role="form" action="?data=mapel-create" class="form-horizontal" enctype="multipart/form-data" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label">Mata Pelajaran</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="nama_mapel" placeholder="Input Mata Pelajaran" required>
										</div>
									</div>
									<div class="modal-footer" style="text-align:left">
										<button type="submit" class="btn btn-success" name="mapel-create" style="margin-right:5px;">Submit</button>
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
