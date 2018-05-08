<?php
    if (isset($_GET['data'])) {
        if ($_GET['data'] == 'mapel') {
            echo "<i class='fa fa-clipboard'> Form Mata Pelajaran</i>";
        }
    }
    else if (isset($_GET['bagian'])) {
        if ($_GET['bagian'] == 'kelas'){
            echo "<i class='fa fa-sitemap'> Form Kelas</i>";
        }
    }
    else if(isset($_GET['laporan'])){
        if($_GET['laporan'] == 'upload'){
            echo "<i class='fa fa-upload'> Form Upload</i>";
        }else if($_GET['laporan'] == 'download'){
            echo "<i class='fa fa-download'> Form Download</i>";
        }
    }
    else if(isset($_GET['users'])){
        if ($_GET['users'] == 'admin') {
            echo "<i class='fa fa-tag'> Form Administrator</i>";
        }else if ($_GET['users'] == 'user') {
            echo "<i class='fa fa-tag'> Form user</i>";
        }else if ($_GET['users'] == 'guru') {
            echo "<i class='fa fa-tag'> Form guru</i>";
        }
    }else if ($_GET['profile']) {
        echo "<i class='fa fa-gear '> Profile Setting</i>";
    }
    else{
        echo "<i class='fa fa-home'> Halaman Utama</i>";
    }

?>
