<?php
	$host="localhost";
	$uid="kuliahga_2015";
	$pwd="mbd2015";
	$db="kuliahga_t_cq";

	$conn = new mysqli($host, $uid, $pwd, $db);	
	if (!$conn) {
		die ("Koneksi db error !");	
	}
?>