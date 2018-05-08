<?php
	date_default_timezone_set("Asia/Jakarta");   
	$hari = array ("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
	$waktu[0]=$hari[date("w",time())];
	$waktu[1]=date("d",time());
	$hariini="$waktu[0]";
	echo("$hariini");
?>