<?php
	session_start();
	include("../conn.php");
	$p_pass_lama = $_POST['in_password_lama'];
	$p_pass_baru = $_POST['in_password_baru'];

	$sql = "CALL sp_gantipass({$_SESSION['UID']},'$p_pass_baru', '$p_pass_lama')";
	
	$result=mysqli_query($conn, $sql);	
	$row=mysqli_fetch_array($result);
	if ($row) {
		$respon_code = $row[0];
		$respon_text = $row[1];
	}
	mysqli_close($conn);
?>