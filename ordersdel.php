<?php
	include "config.php";
	$id 	= $_POST['id'];
	$query = pg_query($db, "select * from orders where order_id = '$id' ");
	if (pg_num_rows($query)>0){
		$result	= pg_query($db, "delete from orders where order_id= '$id'");
		if ($result){
			header("refresh:0;url=ordersdel_success.php");
		} else header("refresh:0;url=ordersdel_error.php");
	} else header("refresh:0;url=ordersdel_error.php");
?>