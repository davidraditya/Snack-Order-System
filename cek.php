<?php
	session_start();
	if (empty($_SESSION['user'])||empty($_SESSION['pass'])){
		header("refresh:0;url=error.php");
	}
?>