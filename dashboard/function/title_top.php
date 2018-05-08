<?php
    if (isset($_GET['data'])) {
        if ($_GET['data'] == 'mapel') {
            echo "mapel";
        }
    }
    if (isset($_GET['data'])) {
        if ($_GET['data'] == 'jadwal') {
            echo "jadwal";
        }
    }
    else if (isset($_GET['bagian'])) {
        if ($_GET['bagian'] == 'kelas'){
            echo "kelas";
        }
    }
    else if(isset($_GET['laporan'])){
        if($_GET['laporan'] == 'upload'){
            echo "Upload";
        }else if($_GET['laporan'] == 'download'){
            echo "Download";
        }
    }
    else if(isset($_GET['users'])){
        if ($_GET['users'] == 'admin') {
            echo "Administrator";
        }else if ($_GET['users'] == 'user') {
            echo "user";
        }else if ($_GET['users'] == 'guru') {
            echo "guru";
        }
    }
    else{
        echo "Halaman Utama";
    }

?>
