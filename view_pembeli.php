<?php
	require("config.php");
	if (!empty($_POST['nama'])){
		$nama 	= $_POST['nama'];
		$nohp 	= $_POST['nohp'];
		$result	= pg_query($db, "SELECT * FROM pembeli WHERE nama LIKE '%$nama%' AND no_hp = '$nohp'");

		echo 
		"
		<head>
			<title>RnD Snack and Catering</title>
			<style type='text/css'>
		        body { font-family:comic-sans; font-size:12px; background-image: url(back.jpg);}
		        table,th,td {
		            border: 2px solid black;
		        }
		        th {
		            background-color: #4CAF50;
		            color: white;
		        }
		        td {
		            word-wrap: break-word;
		            max-width: 300px;
		            font-size: 14px;
		        }
		        #container{width:1000px; padding:20px 40px; margin:50px auto; border-style: double solid; border-width: 10px; border-color: blue; background-color: white; }
		    </style>
		</head>
		<body>
			<div id='container'>
				<h2 style='font-size: 40px; text-align: center; font-family: Tahoma'>DATA PEMBELI</h2>
					<table border='1' align='center'>
		    			<tr>
		    				<th>No HP</th>
		    				<th>Nama</th>
		    				<th>Fakultas</th>
		    				<th>Prodi</th>
		    			</tr>";
				while($data = pg_fetch_assoc($result)){
					echo "  
        				<tr>
        					<td>".$data['no_hp']."</td>
        					<td>".$data['nama']."</td>
        					<td>".$data['fakultas']."</td>
        					<td>".$data['prodi']."</td>        
        				</tr>";
				}
				echo 
					'</table>
					<br>
					<form action="view_pembeli.php" method="post">
						<input type="submit" value="Kembali"/>
					</form>
			</div>
		</body>';		
	}else{
		?>
		<head>
			<title>RnD Snack and Catering</title>
			<style type="text/css">
			    body { font-family:comic-sans; font-size:12px; background-image: url(back.jpg); background-size: cover;}
			        #container { width:400px; padding:20px 20px; margin:50px auto; border-style: double solid; border-width: 10px; border-color: blue; background-color: white;}
			    input[type="submit"], input[type="reset"] { width: auto; padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer;}
			</style>	
		</head>
		<body>
			<div id="container">
				<h2 style="font-size: 40px; text-align: center; font-family: Tahoma">LIHAT PEMBELI</h2>
        		<p><marquee>Lihat Data Pembeli!</marquee></p>

        		<form action="view_pembeli.php" method="post">
        			<p>Nama:<br />
						<input type="text" name="nama" placeholder="Nama" type="text" required />
					</p><br />

					<p>No HP:<br />
						<input type="text" name="nohp" placeholder="08xxxxxx" type="text" required />
					</p><br />
					
					<input type="submit" value="Lihat" /><br />
        		</form>

        		<form action="viewall_pembeli.php" method="post">
        			<input type="submit" value="Lihat Semua Data Pembeli" />
        		</form>

        		<form action="view.php" method="post">
					<input type="submit" value="Kembali" />
				</form>	
			</div>
		</body>
	<?php
	}
?>