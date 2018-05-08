<?php

    session_start();
    if (!isset($_SESSION['username'])){
      header('location:../index.php');
    }elseif (isset($_SESSION['access'])) {
      if ($_SESSION['access'] == 'admin' or 'user' or 'guru') {

      $url = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"]."?")."/";
      $username   = $_SESSION['username'];
      require_once('../config/koneksi.php');
      require_once('layout/header.php');
      require_once('layout/sidebar.php');
?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

          <h1>
            <?php error_reporting(0); include('../dashboard/function/title.php') ?>
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                  <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                      <div class="small-box bg-red">

                          <div class="inner">

                            <h3><span class="value"></span><?php include ('date/day.php') ?></h3>
                            <p><?php include ('date/date.php') ?></p>

                          </div>

                          <div class="icon">
                            <i class="ion ion-calendar"></i>
                          </div>
                          <a class="small-box-footer">Date</a>

                      </div>

                  </div><!-- ./col -->

                  <?php
                    if(isset($_SESSION['access'])){
                      if($_SESSION['access'] == 'admin'){
                  ?>
                  <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                      <div class="small-box bg-aqua">

                          <div class="inner">

                            <?php
                              $users = mysql_query("SELECT COUNT(name) AS total FROM users WHERE access ='admin'");
                              $data = mysql_fetch_array($users);
                            ?>
                            <h3><span class="value"><?php echo $data['total'] ?></span></h3>
                            <p>DATA ADMIN</p>

                          </div>

                          <div class="icon">
                            <i class="ion ion-person"></i>
                          </div>

                          <a href="?users=admin" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>

                      </div>

                  </div>
                  <?php }} ?>
                  <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                      <div class="small-box bg-orange">

                          <div class="inner">

                            <?php
                              $users = mysql_query("SELECT COUNT(nama_guru) AS total FROM guru");
                              $data = mysql_fetch_array($users);
                            ?>
                            <h3><span class="value"><?php echo $data['total'] ?></span></h3>
                            <p>DATA GURU</p>

                          </div>

                          <div class="icon">
                            <i class="ion ion-person"></i>
                          </div>
                          <a href="?users=guru" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>

                      </div>

                  </div><!-- ./col -->

                  <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                      <div class="small-box bg-purple">

                          <div class="inner">

                            <?php
                              $users = mysql_query("SELECT COUNT(nama_mapel) AS total FROM mapel ");
                              $data = mysql_fetch_array($users);
                            ?>
                            <h3><span class="value"><?php echo $data['total'] ?></span></h3>
                            <p>Data Mata Pelajaran</p>

                          </div>

                          <div class="icon">
                            <i class="ion ion-person"></i>
                          </div>
                          <a href="?data=mapel" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>

                      </div>

                  </div>

                </div>

            <!-- Content -->
            <?php include('function/content.php'); ?>
            <!-- end of content -->

      </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

      <?php
      require_once('layout/footer.php');
    }
  }
?>
