<?php
	require("config.php");
	if (!empty($_POST['tempat'])){
		$tempat 	= $_POST['tempat'];
		$waktu	 	= $_POST['waktu'];
		$result		= pg_query($db, "SELECT * FROM orders WHERE tempat LIKE '%$tempat%' OR waktu = '$waktu'");

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
				<h2 style='font-size: 40px; text-align: center; font-family: Tahoma'>DATA ORDER</h2>
					<table border='1' align='center'>
		    			<tr>
		    				<th>ID</th>
		    				<th>Total Harga</th>
		    				<th>Tempat Pengambilan</th>
		    				<th>Tanggal</th>
		    				<th>Waktu</th>
		    			</tr>";
				while($data = pg_fetch_array($result)){
					echo "  
        				<tr>
        					<td>".$data['id']."</td>
        					<td>".$data['total']."</td>
        					<td>".$data['tempat']."</td>
        					<td>".$data['tanggal']."</td>  
        					<td>".$data['waktu']."</td>        
        				</tr>";
				}
				echo 
					'</table>
					<br>
					<form action="view_order.php" method="post">
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
			    input[type="submit"] { width: auto; padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer;}
			</style>	
		</head>
		<body>
			<div id="container">
				<h2 style="font-size: 40px; text-align: center; font-family: Tahoma">LIHAT ORDER</h2>
        		<p><marquee>Lihat Data Order!</marquee></p>

        		<form action="view_order.php" method="post">
        			<p>Tempat:<br />
						<input type="text" name="tempat" placeholder="Fakultas" required />
					</p><br />

					<p>Waktu:<br />
						<input type="text" name="waktu" placeholder="HH:MM:SS" required pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]" />
					</p><br />
					
					<input type="submit" value="Lihat" /><br />
        		</form>

        		<form action="viewall_order.php" method="post">
        			<input type="submit" value="Lihat Semua Data Order" />
        		</form>

        		<form action="view.php" method="post">
					<input type="submit" value="Kembali" />
				</form>	
			</div>
		</body>
	<?php
	}
?>