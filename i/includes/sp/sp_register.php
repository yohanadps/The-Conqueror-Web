<?php
	include("../conn.php");
	$p_userid = $_POST['in_userid'];
	$p_email = $_POST['in_email'];
	$p_nama_asli = $_POST['in_nama_asli'];
	$p_nama_begal = $_POST['in_nama_begal'];
	$p_password = $_POST['in_password'];

	$sql = "CALL sp_usr_register('$p_userid','$p_email', '$p_nama_asli', '$p_nama_begal', '$p_password')";
	
	$result=mysqli_query($conn, $sql);	
//	$result=mysqli_store_result($conn);
	$row=mysqli_fetch_array($result);
	if ($row) {
		$respon_code = $row[0];
		$respon_text = $row[1];		
	}
	mysqli_close($conn);
	echo $respon_text;
	if ($respon_code=="0") {
		echo "<script>setTimeout('top.location.replace(\"login.php\")', 3000);</script>";	
	}
?>
