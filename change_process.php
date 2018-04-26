<?php
	include 'config.php';
	$opassword	= $_POST['opassword'];
	$npassword	= $_POST['npassword'];
	$cpassword	= $_POST['cpassword'];
	session_start();
	$username = $_SESSION['user'];
	$query = pg_query($db, "select * from login where username='$username'");
	if ($query){
		while($row = pg_fetch_assoc($query)){
			$password=$row['password'];
		}
	}
	if (password_verify($opassword, $password)){
		if (!password_verify($npassword, $password)){
			if ($npassword==$cpassword){
				$password = password_hash($npassword, PASSWORD_DEFAULT);
				$query	= pg_query ($db, "update login set password='$password' where username='$username'");
				if ($query){
					header("refresh:0;url=change_success.php");
				}
			} else header("refresh:0;url=change_error.php");
		} else header("refresh:0;url=change_error.php");
	} else header("refresh:0;url=change_error.php");
?>