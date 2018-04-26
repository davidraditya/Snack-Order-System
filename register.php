<?php
	include "config.php";
	if (isset($_POST['register'])){	  
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$username = $_POST['username'];
		$query = pg_query($db, "select * from login where username='$username'");
		if(pg_num_rows($query)>0){
			header("refresh:0;url=register_error.php");
		} else {
			$query = pg_query_params($db, "insert into login values ($1, $2)", array("$username", "$password"));
			if ($query){
				header("refresh:0;url=register_success.php");
			} else header("refresh:0;url=register_error.php");
		}
	}
?>