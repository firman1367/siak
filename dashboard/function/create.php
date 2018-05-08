<?php
	// Admin-Create = user
	if (isset($_POST['create-admin'])) {
		$name 			= 	mysql_real_escape_string($_POST['name']);
		$username 		= 	mysql_real_escape_string($_POST['username']);
		$password		=	mysql_real_escape_string($_POST['password']);
		$access			=	mysql_real_escape_string($_POST['access']);
		$folder 		= 	'foto';
        $tmp_name 		= 	$_FILES["foto"]["tmp_name"];
        $link 			= 	$folder."/".$_FILES["foto"]["name"];

        //Upload Foto ke Folder Foto
        move_uploaded_file($tmp_name, $link);

        $query = mysql_query("INSERT INTO users (`id`, `name`, `username`, `password`,`access`,`foto`)
							  VALUES (NULL, '$name', '$username', '$password','$access','$link')");

        if ($query) {
        	echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo 	"<meta http-equiv='refresh' content='2;URL=?users=admin'>";
        }else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}
	}
?>

<?php
	//create-siswa = siswa
	if (isset($_POST['create-siswa'])) {
		$nis			=	$_POST['nis'];
		$no_induk 		= 	$_POST['no_induk'];
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
		$folder 		= 	'foto';
        $tmp_name 		= 	$_FILES["foto"]["tmp_name"];
        $link 			= 	$folder."/".$_FILES["foto"]["name"];

        move_uploaded_file($tmp_name, $link);
        $query = mysql_query("INSERT INTO siswa (`id_siswa`, `nis`,`no_induk`,`no_peserta_un`,`nama_siswa`,`gender`,`ttl`, `id_kelas`,`alamat`,`nama_ayah`,`nama_ibu`,`ijazah`,`skhun`,`tlp`,`foto`)
							  VALUES (NULL,'$nis','$no_induk','$no_peserta_un', '$name','$gender','$ttl','$kelas','$alamat','$nama_ayah','$nama_ibu','$ijazah','$skhun','$tlp','$link')");

        if ($query) {
			echo 	"<meta http-equiv='refresh' content='0;URL=?lihat-siswa=$kelas'>";
        }else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";;
        }

	}
?>

<?php
	//create-guru = user
	if (isset($_POST['create-guru'])) {
		$nip			=	$_POST['nip'];
		$name 			= 	mysql_real_escape_string($_POST['name']);
		$no_ktp 		= 	mysql_real_escape_string($_POST['no_ktp']);
		$gender			= 	mysql_real_escape_string($_POST['gender']);
		$ttl 			= 	mysql_real_escape_string($_POST['ttl']);
		$alamat			=	mysql_real_escape_string($_POST['alamat']);
		$tlp			=	mysql_real_escape_string($_POST['tlp']);
		$status			=	mysql_real_escape_string($_POST['status']);
		$pendidikan		=	mysql_real_escape_string($_POST['pendidikan']);
		$mapel			=	mysql_real_escape_string($_POST['mapel']);
		$folder 		= 	'foto';
        $tmp_name 		= 	$_FILES["foto"]["tmp_name"];
        $link 			= 	$folder."/".$_FILES["foto"]["name"];

        move_uploaded_file($tmp_name, $link);
        $query = mysql_query("INSERT INTO guru (`id_guru`, `nip`, `nama_guru`,`no_ktp`, `gender`,`ttl`,`alamat`,`tlp`,`status`,`pendidikan` `id_mapel`,`foto`)
        	                  VALUES (NULL,'$nip', '$name','$no_ktp' '$gender','$ttl','$alamat','$tlp','$status','$pendidikan', '$mapel','$link')");

        if ($query) {
        	echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			//echo 	"<meta http-equiv='refresh' content='2;URL=?users=guru'>";
        }else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";;
        }

	}
?>
<?php
	//create - mapel
	if (isset($_POST['mapel-create'])) {
		$nama = mysql_real_escape_string($_POST['nama_mapel']);

		$query = mysql_query("INSERT INTO mapel(`id_mapel`,`nama_mapel`)
			                  VALUES(NULL,'$nama')");

		if ($query) {
			echo "<div class='alert alert-success alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Done!</strong> Data berhasil di tambah.
				  </div>";
			echo "<meta http-equiv='refresh' content='2;URL=?data=mapel'>";
		}else{
			echo "<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Ups!</strong> Data gagal di tambah.
				  </div>";
		}
	}
?>

<?php
	//create - nilai
	if (isset($_POST['nilai-create'])) {

		$id_kelas = $_POST['kelas'];
		$id_mapel = $_POST['id_mapel'];
		$id_siswa = $_POST['id_siswa'];
		$jenisnilai = $_POST['jenisnilai'];
		$nilai = $_POST['nilai'];
		$jumlah_data = count($nilai);

		for($x=0; $x<$jumlah_data; $x++){

		//mysql_query("TRUNCATE TABLE nilai");
		$query = mysql_query("INSERT INTO nilai VALUES(NULL,'$id_siswa[$x]','$id_kelas','$id_mapel','$jenisnilai','$nilai[$x]')");
		}

		if ($query) {
			echo "<div class='alert alert-success alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Done!</strong> Data berhasil di tambah.
				  </div>";
			echo "<meta http-equiv='refresh' content='2;URL=?nilai=$id_kelas'>";
		}else{
			echo "<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Ups!</strong> Data gagal di tambah.
				  </div>";
		}
	}
?>

<?php
	//create - spp
	if (isset($_POST['spp-create'])) {

		$jumlah_data = $_POST['jumlah_data'];
		//echo $jumlah_data;

		for($x=0; $x<$jumlah_data; $x++){
			$kelas = $_POST['kelas'];
			$id_kelas = $_POST['id_kelas'];
			$id_siswa = $_POST['id_siswa'];
			$keterangan = $_POST['keterangan'];

		//mysql_query("TRUNCATE TABLE spp");
		$query = mysql_query("INSERT INTO spp VALUES(NULL,'$id_siswa[$x]','$id_kelas[$x]','$keterangan[$x]')");
		}

		if ($query) {
			echo "<div class='alert alert-success alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Done!</strong> Data berhasil di tambah.
				  </div>";
			echo "<meta http-equiv='refresh' content='2;URL=?detail-spp=$kelas'>";
		}else{
			echo "<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Ups!</strong> Data gagal di tambah.
				  </div>";
		}
	}
?>

<?php
	//create - mapel
	if (isset($_POST['stmapel-create'])) {
		$nama = $_POST['mapel'];
		$kelas = $_POST['kelas'];
		$jumlah = count($kelas);

		for($x=0;$x<$jumlah;$x++){
		$query = mysql_query("INSERT INTO st_mapel VALUES(NULL,'$nama[$x]','$kelas[$x]')");
		}
		if ($query) {
			echo "<div class='alert alert-success alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Done!</strong> Data berhasil di tambah.
				  </div>";
			echo "<meta http-equiv='refresh' content='2;URL=?data=st_mapel'>";
		}else{
			echo "<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Ups!</strong> Data gagal di tambah.
				  </div>";
		}
	}
?>

<?php
	//create - kelas
	if (isset($_POST['kelas-create'])) {
		$nama = mysql_real_escape_string($_POST['nama_kelas']);
		$wali_kelas = mysql_real_escape_string($_POST['wali_kelas']);

		$query = mysql_query("INSERT INTO kelas(`id_kelas`,`nama_kelas`,`wali_kelas`)
			                  VALUES(NULL,'$nama','$wali_kelas')");

		if ($query) {
			echo "<div class='alert alert-success alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Done!</strong> Data berhasil di tambah.
				  </div>";
			echo "<meta http-equiv='refresh' content='2;URL=?bagian=kelas'>";
		}else{
			echo "<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Ups!</strong> Data gagal di tambah.
				  </div>";
		}
	}
?>
<?php
	// Jadwal-Create
	if (isset($_POST['jadwal-create'])) {
		$kelas			=   $_POST['kelas'];
		$name 			= 	mysql_real_escape_string($_POST['hari']);
		$mapel 			= 	$_POST['mapel'];
		$jam			=	"$_POST[jammulai]:$_POST[menitmulai] - $_POST[jamakhir]:$_POST[menitakhir] ";
		$guru			=	$_POST['guru'];

		$query = mysql_query("INSERT INTO jadwal VALUES(NULL,'$kelas','$name','$mapel','$jam','$guru')");

        if ($query) {
        	echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo 	"<meta http-equiv='refresh' content='0;URL=?lihat-jadwal=$kelas'>";
        }else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}
	}
?>

<?php
	//create - request
	if (isset($_POST['create-request'])) {
		$name = mysql_real_escape_string($_POST['name']);
		$name_change = mysql_real_escape_string($_POST['name_change']);
		$tgl_ganti = mysql_real_escape_string($_POST['tgl_ganti']);
		$sc_from = mysql_real_escape_string($_POST['sc_from']);
		$sc_to = mysql_real_escape_string($_POST['sc_to']);
		$approval = mysql_real_escape_string($_POST['approval']);

		$query = mysql_query ("INSERT INTO dt_request(`id_request`,`name`,`change_with`,`date`,`sc_from`,`sc_to`,`approval`)
							   VALUES(NULL,'$name','$name_change','$tgl_ganti','$sc_from','$sc_to','$approval')");
		if ($query) {
			echo "<div class='alert alert-success alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Done!</strong> Data berhasil di tambah.
				  </div>";
			echo "<meta http-equiv='refresh' content='2;URL=?request=create_request'>";
		}else{
			echo "<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Ups!</strong> Data gagal di tambah.
				  </div>";
		}
	}
?>

<?php
	//upload-materi
	if (isset($_POST['upload-materi'])) {
		$allowed_ext    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
        $file_name      = $_FILES['file']['name'];
        $file_ext       = strtolower(end(explode('.', $file_name)));
        $file_size      = $_FILES['file']['size'];
        $file_tmp       = $_FILES['file']['tmp_name'];

        $nama           = mysql_real_escape_string($_POST['nama_file']);
        $tgl            = date("Y-m-d");

        if(in_array($file_ext, $allowed_ext) == true){
            if($file_size < 20440700){
                $lokasi = '../dashboard/files/'.$nama.'.'.$file_ext;
                move_uploaded_file($file_tmp, $lokasi);
                $query = mysql_query("INSERT INTO dt_materi VALUES(NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')");
				if ($query) {
					echo "<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Upload File Sukses</strong>
						  </div>";
					echo "<meta http-equiv='refresh' content='2;URL=?materi=download'>";
				}else{
					echo "<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							ERROR: Gagal Upload File
						  </div>";
				}
			}else{
				echo "<div class='alert alert-danger alert-dismissable'>
						 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						 ERROR: Maksimal Ukuran File 20MB
					  </div>";
			}
		}else{
			echo "<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					ERROR: Ekstensi File Tidak Tersedia
				  </div>";
		}
	}
?>
