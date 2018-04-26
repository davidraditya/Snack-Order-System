<?php
	include "config.php";

	$nama 		= $_POST['nama'];
	$no_hp	 	= $_POST['no_hp'];
	$fakultas 	= $_POST['fakultas'];
	$prodi 		= $_POST['prodi'];
	$p01 		= $_POST['p01'];
	$p02 		= $_POST['p02'];
	$p03 		= $_POST['p03'];
	$p04 		= $_POST['p04'];
	$p05 		= $_POST['p05'];
	$p06 		= $_POST['p06'];
	$p07 		= $_POST['p07'];
	$p08 		= $_POST['p08'];
	$p09 		= $_POST['p09'];
	$tempat 	= $_POST['tempat'];
	$tanggal	= $_POST['tanggal'];
	$waktu	 	= $_POST['waktu'];
	$pengantar 	= $_POST['pengantar'];	


	$masuk 	= 0;
	$cekquery	= pg_query ($db, "select * from pembeli where no_hp= '$no_hp'");

	if (pg_num_rows($cekquery)==0){
		//insert ke pembeli
		$query	= pg_prepare($db, "sql1", 'insert into  pembeli values ($1, $2, $3, $4)');
		$result	= pg_execute($db, "sql1", array("$no_hp","$nama","$fakultas","$prodi"));
		if ($result){
			echo 'sukses pembeli<br>';
			$masuk++;
		}
	}

	//insert ke orders
	$total	= 0;
	$query	= pg_prepare($db, "sql2", 'insert into  orders (total,tempat,tanggal,waktu) values ($1, $2, $3, $4)');
	$result	= pg_execute($db, "sql2", array("$total","$tempat","$tanggal","$waktu"));
	if ($result){
		echo 'sukses orders<br>';
		$masuk++;
	}

	//mengambil nilai id pada orders
	$query	= pg_query($db, "select max(order_id) as id from orders");
	while ($data = pg_fetch_array ($query)){
		$order_id=$data['id'];
	}

	//insert ke melakukan
	$query	= pg_prepare($db, "sql3", 'insert into melakukan values ($1, $2)');
	$result	= pg_execute($db, "sql3", array("$no_hp","$order_id"));
	if ($result){
		echo 'sukses melakukan<br>';
		$masuk++;
	}

	//mengambil nilai no_hp pengantar
	$query	= pg_query($db, "select no_hp from pengantar where nama='$pengantar'");
	while ($data = pg_fetch_array ($query)){
		$pengantar_no_hp=$data['no_hp'];
	}

	//insert ke diantar
	$query	= pg_prepare($db, "sql4", 'insert into diantar values ($1, $2)');
	$result	= pg_execute($db, "sql4", array("$pengantar_no_hp","$order_id"));
	if ($result){
		echo 'sukses diantar<br>';
		$masuk++;
	}	

	//memasukkan rincian pembelian ke terdiri_dari
	$query	= pg_prepare($db, "sql5", 'insert into terdiri_dari values ($1, $2, $3)');
	if ($p01>0){
		$harga	= $p01*8000;
		$total	= $total+$harga;
		$result	= pg_execute($db, "sql5", array("$order_id","1","$p01"));
	}
	if ($p02>0){
		$harga	= $p02*1500;
		$total	= $total+$harga;
		$result	= pg_execute($db, "sql5", array("$order_id","2","$p02"));
	}
	if ($p03>0){
		$harga	= $p03*1500;
		$total	= $total+$harga;
		$result	= pg_execute($db, "sql5", array("$order_id","3","$p03"));
	}
	if ($p04>0){
		$harga	= $p04*1800;
		$total	= $total+$harga;
		$result	= pg_execute($db, "sql5", array("$order_id","4","$p04"));
	}
	if ($p05>0){
		$harga	= $p05*1800;
		$total	= $total+$harga;
		$result	= pg_execute($db, "sql5", array("$order_id","5","$p05"));
	}
	if ($p06>0){
		$harga	= $p06*1800;
		$total	= $total+$harga;
		$result	= pg_execute($db, "sql5", array("$order_id","6","$p06"));
	}
	if ($p07>0){
		$harga	= $p07*2000;
		$total	= $total+$harga;
		$result	= pg_execute($db, "sql5", array("$order_id","7","$p07"));
	}
	if ($p08>0){
		$harga	= $p08*2000;
		$total	= $total+$harga;
		$result	= pg_execute($db, "sql5", array("$order_id","8","$p08"));
	}
	if ($p09>0){
		$harga	= $p09*2500;
		$total	= $total+$harga;
		$result	= pg_execute($db, "sql5", array("$order_id","9","$p09"));
	}

	echo $total.'<br>';
	//insert total pada order
	$query	= pg_prepare($db, "sql6", 'update orders set total=$1 where order_id=$2');
	$result	= pg_execute($db, "sql6", array("$total","$order_id"));
	if ($result){
		echo 'sukses masukkan total<br>';
		$masuk++;
	}	
	echo $masuk;
	if ($masuk>=4){
		header("refresh:0;url=insert_success.php");
	} else {
		header("refresh:0;url=insert_error.php");
	}
?>