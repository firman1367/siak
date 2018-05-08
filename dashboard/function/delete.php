<?php
	//Admin Delete
	if (isset($_GET['admin-delete'])) {
		$id 	=	$_GET['admin-delete'];

		$delete 	=	mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=admin '/>";
		}
	}elseif (isset($_GET['mapel-delete'])) {
		$id	= $_GET['mapel-delete'];

		$delete = mysql_query("DELETE FROM mapel WHERE id_mapel = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?data=mapel'>";
		}
	}elseif (isset($_GET['jadwal-delete'])) {
		$id	= $_GET['jadwal-delete'];

		$delete = mysql_query("DELETE FROM jadwal WHERE id_jadwal = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;url=?lihat-jadwal'>";
		}
	}elseif (isset($_GET['siswa-delete'])) {
		$id	= $_GET['siswa-delete'];

		$delete = mysql_query("DELETE FROM siswa WHERE id_siswa = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		}
	}



	elseif (isset($_GET['materi-delete'])) {
		$id = $_GET['materi-delete'];

		$delete = mysql_query("DELETE FROM dt_materi WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL=?materi=download'>";
		}
	}elseif (isset($_GET['kelas-delete'])) {
		$id = $_GET['kelas-delete'];

		$delete = mysql_query("DELETE FROM kelas WHERE id_kelas = $id");
		if ($delete){
			echo "<meta http-equiv='refresh' content='0;URL=?bagian=kelas'>";
		}
	}elseif (isset($_GET['user-delete'])) {
		$id = $_GET['user-delete'];

		$delete = mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete){
			echo "<meta http-equiv='refresh' content='0;URL=?users=user'>";
		}
	}elseif (isset($_GET['guru-delete'])) {
		$id = $_GET['guru-delete'];

		$delete = mysql_query("DELETE FROM guru WHERE id_guru = $id");
		if ($delete){
			echo "<meta http-equiv='refresh' content='0;URL=?users=guru'>";
		}
	}
?>
