<?php

	require_once('config/koneksi.php');
	if (isset($_POST['login'])){
		$user 		= 	$_POST['username'];
		$pass 		= 	$_POST['password'];
		$hasil 		= 	mysql_query("SELECT * FROM users WHERE username='$user' AND password='$pass'");
		$data 		= 	mysql_fetch_array($hasil);
		$id 		= 	$data['id'];
		$username 	= 	$data['username'];
		$password 	= 	$data['password'];
		$name 		= 	$data['name'];
		$foto 		= 	$data['foto'];
		$access 	= 	$data['access'];
		$nomer_induk=	$data['nomer_induk'];
		$id_kelas	=	$data['id_kelas'];
		if($user==$username && $pass=$password){
			session_start();
			$_SESSION['id']			=	$id;
			$_SESSION['username']	=	$username;
			$_SESSION['name']		=	$name;
			$_SESSION['foto']  		=	$foto;
			$_SESSION['access']		=	$access;
			$_SESSION['nomer_induk']=	$nomer_induk;
			$_SESSION['id_kelas']	=	$id_kelas;

			header('Location: dashboard/index.php');
		}else {
			echo "<script language='javascript'>alert('Silahkan isi data dengan benar')</script>";
  			echo "<script language='javascript'>window.location = 'dashboard/index.php'</script>";
		}
	}

?>
