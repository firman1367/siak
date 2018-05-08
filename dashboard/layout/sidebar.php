<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">

            <div class="pull-left image">

                <?php
                $query = mysql_query("SELECT * FROM users WHERE username = '$username'");
                $data  = mysql_fetch_array($query);
                ?>
                <img src="<?php echo $data['foto']; ?>" class="img-circle" alt="User">

            </div>

            <div class="pull-left info">
                <?php
                $query=mysql_query("SELECT name FROM users WHERE username = '$username'");
                $data=mysql_fetch_array($query);
                ?>
                <p><?php echo $data['name']; ?></p>
                <a href="?profile=<?php echo $_SESSION['id']; ?>"><i class="fa fa-circle text-green"></i>
                    <?php
                    if (isset($_SESSION['access'])) {
                        if ($_SESSION['access'] == 'admin'){
                            echo "Administrator [ON]";
                        }elseif (isset($_SESSION['access'])) {
                            if ($_SESSION['access'] == 'siswa') {
                                echo "siswa [ON]";
                        }elseif (isset($_SESSION['access'])) {
                            if ($_SESSION['access'] == 'guru') {
                                echo "guru [ON]";
                        }

                            ?>
                            <?php
                        }}}
                        ?>

                    </a>
                </div>

            </div>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" style="margin-top:10px;">

                <!-- Optionally, you can add icons to the links -->
                <li class="active">

                    <a href="../index.php"><i class="fa fa-home"></i><span>Home</span></a>

                </li>



                <li class="treeview">

                    <a href="#"><i class="fa fa-user"></i><span>Data</span><i class="fa fa-angle-left pull-right"></i></a>

                    <ul class="treeview-menu">

                        <?php
                          if(isset($_SESSION['access'])){
                            if($_SESSION['access'] == 'admin'){
                        ?>
                        <li>

                            <?php
                            $users = mysql_query("SELECT COUNT(name) AS total FROM users WHERE access = 'admin'");
                            $data = mysql_fetch_array($users);
                            ?>
                            <a href="?users=admin"><i class="fa fa-tag"></i>Data Admin<span class="label pull-right bg-red"><?php echo $data['total'] ?></span></a>

                        </li>
                        <?php }} ?>

                        <li>
                            <?php
                            $users = mysql_query("SELECT COUNT(id_siswa) AS total FROM siswa");
                            $data = mysql_fetch_array($users);
                            ?>
                            <a href="?users=siswa"><i class="fa fa-tag"></i>Data Siswa<span class="label pull-right bg-red"><?php echo $data['total'] ?></span></a>
                            <ul class="treeview-menu">
                                <?php
                                    $query = mysql_query("SELECT * FROM kelas");
                                    while($data = mysql_fetch_array($query)){
                                ?>
                                <li><a href="?lihat-siswa=<?php echo $data['id_kelas']; ?>"><i class="fa fa-arrow-circle-right"></i> <?php echo $data['nama_kelas'] ?></a></li>
                                <?php
                                    }
                                ?>
                            </ul>

                        </li>
                        <li>
                            <?php
                            $users = mysql_query("SELECT COUNT(id_guru) AS total FROM guru");
                            $data = mysql_fetch_array($users);
                            ?>
                            <a href="?users=guru"><i class="fa fa-tag"></i>Data Guru<span class="label pull-right bg-red"><?php echo $data['total'] ?></span></a>
                        </li>



                    </ul>

                </li>

                <li>
                    <a href="#"><i class="fa fa-file-text"></i><span>Akademik</span><i class="fa fa-angle-left pull-right"></i></a>

                    <ul class="treeview-menu">

                        <li>
                            <a href="?bagian=kelas"><i class="fa fa-upload"></i>Data Kelas</a>
                        </li>
                        <li>
                            <a href="?data=mapel"><i class="fa fa-upload"></i>Mata Pelajaran</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-upload"></i>Jadwal Pelajaran<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <?php
                                    $query = mysql_query("SELECT * FROM kelas");
                                    while($data = mysql_fetch_array($query)){
                                ?>
                                <li><a href="?lihat-jadwal=<?php echo $data['id_kelas']; ?>"><i class="fa fa-arrow-circle-right"></i> <?php echo $data['nama_kelas'] ?></a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-upload"></i>Nilai Siswa<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <?php
                                    $query = mysql_query("SELECT * FROM kelas");
                                    while($data = mysql_fetch_array($query)){
                                ?>
                                <li><a href="?nilai=<?php echo $data['id_kelas']; ?>"><i class="fa fa-arrow-circle-right"></i> <?php echo $data['nama_kelas'] ?></a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </li>
                    </ul>

                </li>

                <li>
                    <a href="#"><i class="fa fa-book"></i><span>Materi</span><i class="fa fa-angle-left pull-right"></i></a>

                    <ul class="treeview-menu">

                        <li>

                            <a href="?materi=upload"><i class="fa fa-upload"></i>Upload</a>

                        </li>

                        <li>
                            <?php
                            $query = mysql_query("SELECT COUNT(nama_file) AS total FROM dt_materi");
                            $data = mysql_fetch_array($query);
                            ?>
                            <a href="?materi=download"><i class="fa fa-download"></i>Download<span class="label pull-right bg-red"><?php echo $data['total'] ?></span></a>

                        </li>

                    </ul>

                </li>
                <li>
                    <a href="#"><i class="fa fa-money"></i><span>SPP</span><i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <?php
                            $query = mysql_query("SELECT * FROM kelas");
                            while($data = mysql_fetch_array($query)){
                        ?>
                        <li><a href="?spp=<?php echo $data['id_kelas']; ?>"><i class="fa fa-arrow-circle-right"></i> <?php echo $data['nama_kelas'] ?></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </li>



            </ul><!-- /.sidebar-menu -->

        </section>
        <!-- /.sidebar -->
    </aside>
