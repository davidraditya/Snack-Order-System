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
		input[type="submit"] { width: 170px; padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer;}
		input[type="number"] { width: 170px; padding: 5px 5px; margin:0px 0px; font-size:12px;  cursor:pointer;}
	</style>
</head>
<body>
	<div id='container'>
		<h2 style='font-size: 40px; text-align: center; font-family: Tahoma'>DATA ORDER PRODUK</h2>
		<form action="viewall_terdiridari.php" method="post">
            <input placeholder="Limit Data (max: 20)" type="number" min="0" max="20" name="limit" required>
            <input type="submit" name="Limit" value="Limit" />
    	</form>

    	<form action="view_terdiridari.php" method="post">
            <input type="submit" name="back" value="Kembali" />
    	</form>

		<table border='1' align='center'>
		    <tr>
		    	<th>Order ID</th>
		    	<th>Produk ID</th>
		    	<th>Nama Produk</th>
		    	<th>Kuantitas</th>
		    </tr>

		<?php
			require("config.php");
			$query 		= sprintf("SELECT t.order_id, t.produk_id, p.nama, t.kuantitas ".
					" FROM terdiri_dari t, produk p ".
					" WHERE p.produk_id = t.produk_id");
		 
			if(isset($_POST['Limit'])){
				$limit 	= $_POST['limit'];
				$query 	= $query . " limit '$limit'";
			}

			$result		= pg_query($db, $query);

			while($data = pg_fetch_assoc($result)){
				echo "  
		        	<tr>
		        		<td>".$data['order_id']."</td>
        				<td>".$data['produk_id']."</td>
        				<td>".$data['nama']."</td> 
        				<td>".$data['kuantitas']."</td>        
		        	</tr>";
			}
		?>
		</table>
	</div>
</body>';		

