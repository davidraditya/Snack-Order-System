<?php
	include "config.php";
	$username 	= $_POST['username'];
	$query = pg_query($db, "select * from login where username='$username'");
	if (pg_num_rows($query)>0){
		$result	= pg_query($db, "delete from login where username= '$username'");
		if ($result){
			header("refresh:0;url=userdel_success.php");
		} else header("refresh:0;url=userdel_error.php");
	} else header("refresh:0;url=userdel_error.php");
?>