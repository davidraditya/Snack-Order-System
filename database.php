<html>
<head>
	<title>RnD Snack and Catering</title>
	<style type="text/css">
		body { font-family:comic-sans; font-size:12px; background-image: url(back.jpg); background-size: cover;}
		#container { width:400px; padding:20px 20px; margin:50px auto; border-style: double solid; border-width: 10px; border-color: blue; background-color: white; }
		input[type="submit"], input[type="reset"] { width: 100px; padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer;}
	</style>
</head>
<body>
	<div id="container">
	<?php
		include 'cek.php';
		echo '
			<h1 style="text-align: center; font-size: 30px;font-family: Tahoma">DATABASE MENU</h1>';
		echo '
			<center><form action="insert.php" method="post">
				<input type="submit" name="insert" value="Insert" />
			</form></center>
			<center><form action="delete.php" method="post">
				<input type="submit" name="delete" value="Delete" />
			</form></center>
			<center><form action="view.php" method="post">
				<input type="submit" name="view" value="View" />
			</form></center>
			<center><form action="home.php" method="post">
				<input type="submit" name="kembali" value="Kembali" />
			</form></center>';	
	?>
	</div>
</body>
</html>