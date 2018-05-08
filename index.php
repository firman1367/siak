<?php
	session_start();
	include ('config/koneksi.php');
	if($_SESSION){
	header("Location: dashboard/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login System</title>

	<!-- Bootstrap 3.3.5 -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="bootstrap/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">

	<style>
		body {
			background-color:#9F9595;
		}
		.row {
			margin:170px auto;
			text-align:center;
		}
		.login {
			background-color:rgba(255, 255, 255, 0.15);
			padding:20px;
			border-radius: 5px;
		}
	</style>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="login">
					<div class="box box-primary box-solid no-border">
						<div class="box-header">
							<span class="box-title"><b style="font-size:25px;">Form Login</b></span>
						</div>
					</div>
					<form role="form" action="login_aksi.php" method="post">
						<div class="form-group">
							<input type="text" name="username" class="form-control" placeholder="Username" required x-moz-errormessage='Form harus diisi 4-20 Karakter !'  pattern=".{4,20}">
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="Password" required x-moz-errormessage='Form harus diisi 4-20 Karakter !'  pattern=".{4,20}">
						</div>
						<div class="form-group">
							<input type="submit" name="login" class="btn btn-default btn-block" value="login" />
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery 2.1.4 -->
	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<!-- Bootstrap 3.3.5 -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
</body>
</html>