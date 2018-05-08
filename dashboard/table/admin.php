<div class="row">
<!-- isi -->
	<div class="col-md-12">
		<div class="box box-success box-solid no-border">
			<div class="box-header">
				<i class="fa fa-table"></i>
				<span class="box-title">Users</span>
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
								<th>Nama</th>
								<th>Username</th>
								<th>Password</th>
								<th>Akses</th>
								<th>Foto</th>
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
								$nomer = 1;
								$query = mysql_query("SELECT * FROM users");
								while ($data=mysql_fetch_array($query)) {
							?>
							<tr>
								<td><center><?php echo $nomer ?></center></td>
								<td><?php echo $data['name'] ?></td>
								<td><?php echo $data['username'] ?></td>
								<td><?php echo $data['password'] ?></td>
								<td><?php echo $data['access'] ?></td>
								<td><a class="fancybox" href="<?php echo $data['foto']; ?>"><img src="<?php echo $data['foto'] ?>" class="img-circle" width="50" height="50"></a></td>
								<?php
								  if(isset($_SESSION['access'])){
									if($_SESSION['access'] == 'admin'){
								?>
								<td>
									<center>
										<a href="?admin-edit=<?php echo $data['id']; ?>" class="btn btn-warning"><span class="fa fa-edit fa-fw"></span>Edit</a>
										<a href="?admin-delete=<?php echo $data['id']; ?>" class="btn btn-danger" onclick="return confirm('are you sure to delete it?')"><span class="fa fa-trash-o fa-fw"></span>Delete</a>
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
				<a class="btn btn-success" data-keyboard="false" data-backdrop="static" data-toggle="modal" data-target="#create_admin" style="margin-top:8px;">Create</a>
				<!-- Modal -->
				<div class="modal fade" id="create_admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background-color:#00a65a;color:white;">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
								<h4 class="modal-title" id="myModalLabel"> Tambah Admin </h4>
							</div>
							<div class="modal-body">
								<form role="form" action="?users=admin-create" class="form-horizontal" enctype="multipart/form-data" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label">Nama</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="name" placeholder="Enter Nama" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Username</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="username" placeholder="Enter Username" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Password</label>
										<div class="col-md-8">
											<input type="password" class="form-control" name="password" placeholder="Enter Password" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Akses</label>
										<div class="col-md-8">
											<select class="form-control" name="access" required>
												<option>admin</option>
												<option>guru</option>
												<option>siswa</option>
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
										<button type="submit" class="btn btn-success" name="create-admin" style="margin-right:5px;">Submit</button>
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
