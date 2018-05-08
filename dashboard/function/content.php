<?php
	//BAGIAN FUNGSI CREATE USER
	if(isset($_GET['users'])){
		if ($_GET['users'] == 'admin') {
			include('table/admin.php');
		}elseif ($_GET['users'] == 'admin-create') {
			include('function/create.php');
			include('table/admin.php');
		}
		elseif ($_GET['users'] == 'guru') {
			include ('table/guru.php');
		}elseif ($_GET['users'] == 'guru-create') {
			include ('function/create.php');
			include ('table/guru.php');
		}
		elseif ($_GET['users']=='siswa') {
			include ('table/siswa.php');
		}elseif ($_GET['users']== 'siswa-create') {
			include ('function/create.php');
			include ('table/siswa.php');
		}elseif ($_GET['users']=='data-siswa') {
			include ('table/data_siswa.php');
		}

	}
	/* parsing data */
	elseif (isset($_GET['data'])) {
		if ($_GET['data'] == 'mapel') {
			include ('table/mapel.php');
		}elseif ($_GET['data'] == 'mapel-create') {
			include('function/create.php');
			include ('table/mapel.php');
			}
		}
	elseif ($_GET['data'] == 'jadwal') {
		include ('table/jadwal.php');
	}elseif ($_GET['data'] == 'jadwal-create') {
		include('function/create.php');
		include ('table/jadwal.php');
	}

	elseif (isset($_GET['bagian'])) {
		if ($_GET['bagian'] == 'kelas') {
			include('table/kelas.php');
		}elseif ($_GET['bagian'] == 'kelas-create') {
			include('function/create.php');
			include('table/kelas.php');
		}

	}elseif (isset($_GET['lihat-jadwal'])) {
			include('table/jadwal.php');
	}elseif (isset($_GET['lihat-siswa'])) {
			include('table/siswa.php');
	}elseif (isset($_GET['nilai'])) {
			include ('table/nilai.php');
	}elseif (isset($_GET['spp'])) {
			include ('table/spp.php');
	}elseif (isset($_GET['materi'])) {
		if ($_GET['materi']=='upload') {
			include ('function/create.php');
			include ('forms/upload_materi.php');
		}elseif ($_GET['materi']== 'download') {
			include ('function/create.php');
			include ('table/download.php');
		}
	}elseif (isset($_GET['request'])) {
		if ($_GET['request'] == 'create_request') {
			include ('function/create.php');
			include ('forms/create_request.php');
		}elseif ($_GET['request'] == 'view_request') {
			include ('table/request.php');
		}
	}


	//BAGIAN FUNGSI DETAIL
	elseif (isset($_GET['siswa-detail'])) {
		include ('table/detail_siswa.php');
	}elseif (isset($_GET['guru-detail'])) {
		include ('table/detail_guru.php');
	}elseif (isset($_GET['spp-create'])) {
		include ('function/create.php');
		//include ('index.php');
	}elseif (isset($_GET['detail-spp'])) {
		include ('table/detail_spp.php');
	}elseif (isset($_GET['nilai-create'])) {
		include ('function/create.php');
		//include ('index.php');
	}elseif (isset($_GET['detail-nilai'])) {
		include ('table/detail_nilai.php');
	}

	//BAGIAN FUNGSI EDIT
	elseif (isset($_GET['admin-edit'])) {
		include ('function/edit.php');
		include ('forms/edit_admin.php');
	}elseif (isset($_GET['siswa-edit'])) {
		include ('function/edit.php');
		include ('forms/edit_siswa.php');
	}elseif (isset($_GET['guru-edit'])) {
		include ('function/edit.php');
		include ('forms/edit_guru.php');
	}elseif (isset($_GET['edit-mapel'])) {
		include ('function/edit.php');
		include ('forms/edit_mapel.php');
	}elseif (isset($_GET['profile'])) {
		include('function/edit.php');
		include('table/profile.php');
	}elseif (isset($_GET['edit-kelas'])) {
		include('function/edit.php');
		include('forms/edit_kelas.php');
	}elseif (isset($_GET['edit-jadwal'])) {
		include('function/edit.php');
		include('forms/edit_jadwal.php');
	}
	//BAGIAN FUNGSI DELETE
	elseif (isset($_GET['admin-delete'])) {
		include ('function/delete.php');
	}elseif (isset($_GET['mapel-delete'])) {
		include ('function/delete.php');
	}elseif (isset($_GET['jadwal-delete'])) {
		include ('function/delete.php');
	}elseif (isset($_GET['materi-delete'])) {
		include ('function/delete.php');
	}elseif (isset($_GET['kelas-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['siswa-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['guru-delete'])) {
		include('function/delete.php');
	}
	else{
?>

<div class="row">
    <div class="col-md-12">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <i class="fa fa-text-width"></i>
                <h3 class="box-title">Description</h3>
                <div class='box-tools'>
                    <button class='btn btn-box-tool' data-toggle='tooltip' title='hide' data-widget='collapse'><i class='fa fa-minus'></i></button>
                    <button class='btn btn-box-tool' data-toggle='tooltip' title='remove' data-widget='remove'><i class='fa fa-times'></i></button>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
                <?php
                  $query=mysql_query("SELECT name FROM users WHERE username='$username'");
                  $data=mysql_fetch_array($query);
                ?>
              	<dl>
                    <p style="text-align: justify;padding:0px 5px 0px 5px;font-size:20px;">Hai <u><?php echo $data['name']?></u>, selamat datang pada halaman aplikasi Sistem Informasi Akademik SMK MIFTAAHUSH SHUDUUR ( SIAK SMK.MS).</p>
                </dl>
        	</div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- ./col -->
</div>

<?php
	}
?>
