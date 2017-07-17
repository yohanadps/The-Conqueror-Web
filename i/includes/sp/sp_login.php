<?php
	session_start();
	include("../conn.php");
	$p_userid = $_POST['in_userid'];
	$p_password = $_POST['in_password'];

	$sql = "CALL sp_login('$p_userid', '$p_password')";
	
	$result=mysqli_query($conn, $sql);	
	$row=mysqli_fetch_array($result);
	if ($row) {
		$respon_code = $row[0];
		$respon_text = $row[1];
	}
	mysqli_close($conn);
	echo $respon_text;
	if ($respon_code=="0") {
		$p_userid=$row[2];
		$_SESSION['UID']=$p_userid;
		echo "<script>setTimeout('top.location.replace(\"main.php\")', 3000);</script>";	
	}
?>
