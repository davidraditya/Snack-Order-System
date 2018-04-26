<?php
	include 'config.php';
	if (isset($_POST['login'])){	  
		$username=$_POST['username'];
		$query = pg_query($db, "select * from login where username='$username'");
		if ($query){
			while($row = pg_fetch_assoc($query)){
				$password=$row['password'];
			}
			session_start();
			$_SESSION['pass']=$_POST['password'];
			if (password_verify($_SESSION['pass'], $password)){
				$_SESSION['user']=$username;
				header("refresh:0;url=home.php");
			} else header("refresh:0;url=error_login.php");
		} else header("refresh:0;url=error_login.php");	
	}
?>