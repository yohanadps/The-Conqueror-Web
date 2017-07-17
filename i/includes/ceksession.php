<?php
	session_start();
	if(!isset($_SESSION['UID'])){
		?>
        MAAF ANDA HARUS <a href="login.php">LOGIN</a>
        <?php
		}
		die();
?>