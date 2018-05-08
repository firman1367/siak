<?php
	//Edit-Admin
	if(isset($_GET['admin-edit'])){
		$id = $_GET['admin-edit'];

		if (isset($_POST['admin-update'])) {
			$name		= $_POST['name'];
			$username 	= $_POST['username'];
			$password	= $_POST['password'];
			$access		= $_POST['access'];
			$row		= mysql_fetch_array(mysql_query("SELECT * FROM users WHERE id='$id'"));
			$folder		= 'foto';
			$tmp_name 	= $_FILES["foto"]["tmp_name"];
        	$edit 		= $folder."/".$_FILES["foto"]["name"];

	        //Upload Foto ke Folder Foto
	        if (!empty($tmp_name)) {
	 		move_uploaded_file($tmp_name, $edit);

			$query 		= mysql_query("UPDATE users set `name` = '$name',`username` = '$username',`password` = '$password',`access` = '$access',`foto` = '$edit' where id='$id'");

	    		if ($query) {
		        	echo
		        		"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
					echo 	"<meta http-equiv='refresh' content='2;URL=?users=admin'>";
				}else{
					echo
						"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				}

	    	}else{

				$query 		= mysql_query("UPDATE users set `name` = '$name',`username` = '$username',`password` = '$password',`access` = '$access',`foto` = '$row[foto]' where id='$id'");

				if ($query) {
		        	echo
		        		"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
					echo 	"<meta http-equiv='refresh' content='2;URL=?users=admin'>";

				}else{
					echo
						"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				}
			}

		}

		$data 	 		= 	mysql_query("SELECT * FROM users WHERE id = $id");
		$row 			= 	mysql_fetch_array($data);
	}
?>

<?php
	if (isset($_GET['siswa-edit'])) {
		$id = $_GET['siswa-edit'];

		if (isset($_POST['siswa-update'])) {
			$nis			=	$_POST['nis'];
			$no_induk 		= 	mysql_real_escape_string($_POST['no_induk']);
			$no_peserta_un	= 	mysql_real_escape_string($_POST['no_peserta_un']);
			$name 			= 	mysql_real_escape_string($_POST['name']);
			$gender			= 	mysql_real_escape_string($_POST['gender']);
			$ttl			= 	mysql_real_escape_string($_POST['ttl']);
			$kelas 			=	$_POST['kelas'];
			$alamat			=	mysql_real_escape_string($_POST['alamat']);
			$nama_ayah		= 	mysql_real_escape_string($_POST['nama_ayah']);
			$nama_ibu		= 	mysql_real_escape_string($_POST['nama_ibu']);
			$ijazah			= 	mysql_real_escape_string($_POST['ijazah']);
			$skhun			= 	mysql_real_escape_string($_POST['skhun']);
			$tlp			= 	mysql_real_escape_string($_POST['tlp']);
			$row			=  	mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE id_siswa ='$id'"));
			$folder 		= 	'foto';
	        $tmp_name 		= 	$_FILES["foto"]["tmp_name"];
	        $edit 			= 	$folder."/".$_FILES["foto"]["name"];

		//Upload Foto ke Folder Foto
	        if (!empty($tmp_name)) {
	 		move_uploaded_file($tmp_name, $edit);

			$query 		= mysql_query("UPDATE siswa set `nis` = '$nis',`no_induk` = '$no_induk',`no_peserta_un` = '$no_peserta_un',`nama_siswa` = '$name',`gender` = '$gender',`ttl` = '$ttl',`id_kelas` = '$kelas',`alamat` = '$alamat', `nama_ayah` = '$nama_ayah',`nama_ibu` = '$nama_ibu',`ijazah` = '$ijazah',`skhun` = '$skhun',`tlp` = '$tlp', `foto` = '$edit' where id_siswa='$id'");

	    		if ($query) {
		        	echo
		        		"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
					//echo 	"<meta http-equiv='refresh' content='2;URL=?users=siswa'>";
				}else{
					echo
						"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				}

	    	}else{

			$query 		= mysql_query("UPDATE siswa set `nis` = '$nis',`no_induk` = '$no_induk',`no_peserta_un` = '$no_peserta_un',`nama_siswa` = '$name',`gender` = '$gender',`ttl` = '$ttl',`id_kelas` = '$kelas',`alamat` = '$alamat', `nama_ayah` = '$nama_ayah',`nama_ibu` = '$nama_ibu',`ijazah` = '$ijazah',`skhun` = '$skhun',`tlp` = '$tlp',`foto` = '$row[foto]' where id_siswa='$id'");

				if ($query) {
		        	echo
		        		"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
					//echo 	"<meta http-equiv='refresh' content='2;URL=?users=siswa'>";

				}else{
					echo
						"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				}
			}

		}

		$data 	 		= 	mysql_query("SELECT * FROM siswa WHERE id_siswa = $id");
		$row 			= 	mysql_fetch_array($data);
	}
?>
<?php
	if (isset($_GET['guru-edit'])) {
		$id = $_GET['guru-edit'];
		if (isset($_POST['guru-update'])) {
			$nik			=	$_POST['nik'];
			$name 			= 	$_POST['name'];
			$no_ktp 		= 	$_POST['no_ktp'];
			$gender 		= 	$_POST['gender'];
			$ttl 			= 	$_POST['ttl'];
			$alamat			= 	$_POST['alamat'];
			$tlp			= 	$_POST['tlp'];
			$status			=	$_POST['status'];
			$pendidikan		=	$_POST['pendidikan'];
			$mapel			=	$_POST['mapel'];
			$row			=  	mysql_fetch_array(mysql_query("SELECT * FROM guru WHERE id_guru='$id'"));
			$folder 		= 	'foto';
	        $tmp_name 		= 	$_FILES["foto"]["tmp_name"];
	        $edit 			= 	$folder."/".$_FILES["foto"]["name"];

		//Upload Foto ke Folder Foto
	        if (!empty($tmp_name)) {
	 		move_uploaded_file($tmp_name, $edit);

			$query 		= mysql_query("UPDATE guru set `nik` = '$nik',`nama_guru` = '$name',`no_ktp` = '$no_ktp',`gender` = '$gender',`ttl` = '$ttl',`alamat` = '$alamat',`tlp` = '$tlp',`status`='status',`pendidikan`='pendidikan',`id_mapel` = '$mapel',`foto` = '$edit' where id_guru ='$id'");

	    		if ($query) {
		        	echo
		        		"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
					echo 	"<meta http-equiv='refresh' content='2;URL=?users=guru'>";
				}else{
					echo
						"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				}

	    	}else{

			$query 		= mysql_query("UPDATE guru set `nik` = '$nik',`nama_guru` = '$name',`no_ktp` = '$no_ktp',`gender` = '$gender',`ttl` = '$ttl',`alamat` = '$alamat',`tlp` = '$tlp',`status`='status',`pendidikan`='pendidikan',`id_mapel` = '$mapel',`foto` = '$row[foto]' where id_guru ='$id'");

				if ($query) {
		        	echo
		        		"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
					echo 	"<meta http-equiv='refresh' content='2;URL=?users=guru'>";

				}else{
					echo
						"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				}
			}

		}

		$data 	 		= 	mysql_query("SELECT * FROM guru WHERE id_guru = $id");
		$row 			= 	mysql_fetch_array($data);
	}
?>

<?php
	//mapel edit
	if (isset($_GET['edit-mapel'])) {
		$id = $_GET['edit-mapel'];

		if (isset($_POST['mapel-update'])) {
			$nama = mysql_real_escape_string($_POST['nama_mapel']);

			$query = mysql_query("UPDATE mapel SET `nama_mapel`='$nama' WHERE id_mapel='$id'");

			if ($query) {
				echo "<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>!Done</strong> Data berhasil di update
				      </div>";
				echo "<meta http-equiv='refresh' content='2;URL=?data=mapel'>";
			}else{
				echo "<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>!Done</strong> Data gagal di update
				      </div>";
			}
		}

		$datausers 		= 	mysql_query("SELECT * FROM mapel WHERE id_mapel = $id");
		$row 			= 	mysql_fetch_array($datausers);
	}
?>



<?php
	//kelas edit
	if (isset($_GET['edit-kelas'])) {
		$id = $_GET['edit-kelas'];

		if (isset($_POST['kelas-update'])) {
			$nama = mysql_real_escape_string($_POST['nama_kelas']);
			$wali_kelas = mysql_real_escape_string($_POST['wali_kelas']);

			$query = mysql_query("UPDATE kelas SET `nama_kelas`='$nama', `wali_kelas`='$wali_kelas' WHERE id_kelas='$id'");

			if ($query) {
				echo "<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>!Done</strong> Data berhasil di update
				      </div>";
				echo "<meta http-equiv='refresh' content='2;URL=?bagian=kelas'>";
			}else{
				echo "<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>!Done</strong> Data gagal di update
				      </div>";
			}
		}

		$datausers 		= 	mysql_query("SELECT * FROM kelas WHERE id_kelas = $id");
		$row 			= 	mysql_fetch_array($datausers);
	}
?>

<?php
	//jadwal edit
	if (isset($_GET['edit-jadwal'])) {
		$id = $_GET['edit-jadwal'];

		if (isset($_POST['jadwal-update'])) {
			$kelas 			= 	$_POST['kelas'];
			$name 			= 	mysql_real_escape_string($_POST['hari']);
			$mapel 			= 	$_POST['mapel'];
			$jam			=	"$_POST[jammulai]:$_POST[menitmulai] - $_POST[jamakhir]:$_POST[menitakhir] ";
			$guru			=	mysql_real_escape_string($_POST['guru']);

			$query = mysql_query("UPDATE jadwal SET `id_kelas`='$kelas',`hari`='$name', `id_mapel`='$mapel',`jam`='$jam', `id_guru`='$guru' WHERE id_jadwal='$id'");

			if ($query) {
				echo "<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>!Done</strong> Data berhasil di update
				      </div>";
				echo "<meta http-equiv='refresh' content='2;URL=?lihat-jadwal=$kelas'>";
			}else{
				echo "<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>!Done</strong> Data gagal di update
				      </div>";
			}
		}

		$datausers 		= 	mysql_query("SELECT a.id_jadwal,c.nama_kelas, a.hari, b.nama_mapel, a.jam, d.id_guru, c.id_kelas
							  FROM jadwal AS a
							  INNER JOIN mapel AS b USING(id_mapel)
							  INNER JOIN guru AS d USING(id_guru)
							  INNER JOIN kelas AS c USING(id_kelas)
							  WHERE id_jadwal = $id");
		$row 			= 	mysql_fetch_array($datausers);
	}
?>

<?php
	//Password Edit
	if (isset($_GET['profile'])) {
		$id 	=	$_GET['profile'];

		if (isset($_POST['pass-update'])) {
			$password	=	$_POST['password_lama'];
			$password1	=	$_POST['password_baru'];
			$row		= 	mysql_fetch_array(mysql_query("SELECT * FROM users WHERE id='$id'"));
			$folder		= 	'foto';
			$tmp_name 	= 	$_FILES["foto"]["tmp_name"];
        	$edit 		= 	$folder."/".$_FILES["foto"]["name"];


        	if (!empty($tmp_name)) {

	 		move_uploaded_file($tmp_name, $edit);
        			$users 		=	mysql_query("UPDATE users SET `password` = '$password1', `foto` = '$edit' WHERE id = '$id'");
			}
			else{
				$users 		=	mysql_query("UPDATE users SET `password` = '$password1', `foto` = '$row[foto]' WHERE id = '$id'");
			}if ($users) {
					echo 	"<div class='alert alert-success alert-dismissable'>
								<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
								<strong>Done!</strong> Data berhasil di update.
							</div>";
					echo 	"<meta http-equiv='refresh' content='2;URL=index.php'>";
				}else{
					echo 	"<div class='alert alert-danger alert-dismissable'>
								<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
								<strong>Ups!</strong> Data gagal di update.
							</div>";
			}
		}

		$datausers 		= 	mysql_query("SELECT * FROM users WHERE id = $id");
		$row 			= 	mysql_fetch_array($datausers);
	}
?>
