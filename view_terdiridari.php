<?php
	require("config.php");
	if (!empty($_POST['nama'])){
		$orderid 	= $_POST['orderid'];
		$nama 	= $_POST['nama'];
		$query 	= "SELECT t.order_id, t.produk_id, p.nama, t.kuantitas ".
					" FROM terdiri_dari t, produk p ".
					" WHERE p.produk_id = t.produk_id and t.order_id = '$orderid' and p.nama = '$nama'";
		$result	= pg_query($db, $query);

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
				<h2 style='font-size: 40px; text-align: center; font-family: Tahoma'>DATA ORDER PRODUK</h2>
					<table border='1' align='center'>
		    			<tr>
		    				<th>Order ID</th>
		    				<th>Produk ID</th>
		    				<th>Nama Produk</th>
		    				<th>Kuantitas</th>
		    			</tr>";
				while($data = pg_fetch_assoc($result)){
					echo "  
        				<tr>
        					<td>".$data['order_id']."</td>
        					<td>".$data['produk_id']."</td>
        					<td>".$data['nama']."</td> 
        					<td>".$data['kuantitas']."</td>    
        				</tr>";
				}
				echo 
					'</table>
					<br>
					<form action="view_terdiridari.php" method="post">
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
				<h2 style="font-size: 40px; text-align: center; font-family: Tahoma">LIHAT ORDER PRODUK</h2>
        		<p><marquee>Lihat Data Order Produk!</marquee></p>

        		<form action="view_terdiridari.php" method="post">
        			<p>Nama:<br />
						<input type="text" name="nama" placeholder="Nama Produk" type="text" required />
					</p><br />

					<p>Order ID:<br />
						<input type="number" name="orderid" placeholder="Order ID" type="text" required pattern="[0-9]{2}" />
					</p><br />
					
					<input type="submit" value="Lihat" /><br />
        		</form>

        		<form action="viewall_terdiridari.php" method="post">
        			<input type="submit" value="Lihat Semua Data Melakukan Order" />
        		</form>

        		<form action="view.php" method="post">
					<input type="submit" value="Kembali" />
				</form>	
			</div>
		</body>
	<?php
	}
?>