<?php 
	session_start();
	if (!isset($_SESSION['isUser'])) {
		echo "Harus Login Terlebih Dahulu";
		echo "<a href='login.php'>login</a>";
		exit();
	}

 ?>