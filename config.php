<?php
    $host = "localhost";
	$port = "5432";
	$dbname = "proyekakhir_kelompok4";
	$user = "lutfi";
	$password = "sql";
	$db = pg_connect( "host=$host port=$port dbname=$dbname user=$user password=$password" );
    
    if (!$db) {
    	echo "Koneksi Gagal";
    }
?>