<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIAK SMK MIFTAAHUSH SHUDUUR - <?php include('../dashboard/function/title_top.php') ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bootstrap/css/ionicons.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../plugins/iCheck/all.css">
    <!-- datepicker -->
    <link rel="stylesheet" href="../dist/css/datepicker.css" >
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- icon -->
    <link rel="icon" href="../dist/img/dss.png">
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <!-- skin -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">
    <!-- fancy box -->
    <link rel="stylesheet" href="../dist/fancybox/jquery.fancybox.css" type="text/css" media="screen" />

  </head>

  <body class="hold-transition skin-green sidebar-mini">

    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">

          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SIAK</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SIAK</b> SMK.MS</span>

        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->

                    <?php
                      $query = mysql_query("SELECT * FROM users WHERE username = '$username'");
                      $data  = mysql_fetch_array($query);
                    ?>
                    <img src="<?php echo $data['foto']; ?>" class="user-image" alt="User Image">

                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php echo $data['name'];?></span>
                </a>

                <ul class="dropdown-menu">

                  <!-- The user image in the menu -->
                  <li class="user-header">

                      <?php
                        $query = mysql_query("SELECT * FROM users WHERE username = '$username'");
                        $data  = mysql_fetch_array($query);
                      ?>
                      <img src="<?php echo $data['foto']; ?>" class="img-circle" alt="User Image">

                    <p>
                      <?php echo $data['name'];?>
                    </p>
                    <p>
                    <?php
                      $query=mysql_query("SELECT name FROM users WHERE username='$username'");
                      $data=mysql_fetch_array($query);
                    ?>
                      <?php
                      if (isset($_SESSION['access'])) {
                        if ($_SESSION['access'] == 'admin'){
                          echo "<small><b>Administrator</b></small>";
                        }elseif (isset($_SESSION['access'])) {
                          if ($_SESSION['access'] == 'user') {
                            echo "<small><b>user</b></small>";
                        }elseif (isset($_SESSION['access'])) {
                          if ($_SESSION['access'] == 'user') {
                            echo "<small><b>user</b></small>";
                        }
                          ?>
                      <?php
                            }
                          }
                        }
                      ?>
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">

                      <div class="pull-left">
                        <a href="?profile=<?php echo $_SESSION['id']; ?>" class="btn btn-primary btn-flat">Profile</a>
                      </div>

                      <div class="pull-right">
                        <a href="../logout.php" class="btn btn-danger btn-flat">Sign out</a>
                      </div>
                  </li>

                </ul>

              </li>

              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>

            </ul>

          </div>

        </nav>

      </header>
