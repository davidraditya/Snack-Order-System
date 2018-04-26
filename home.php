<html>
<head>
	<title>RnD Snack and Catering</title>
	<style type="text/css">
		body { font-family:comic-sans; font-size:12px; background-image: url(back.jpg); background-size: cover;}
		#container { width:400px; padding:20px 20px; margin:50px auto; border-style: double solid; border-width: 10px; border-color: blue; background-color: white;}
		input[type="submit"], input[type="reset"] { width: 170px; padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer;}
	</style>
</head>
<body>
	<div id="container">
	<?php
		include 'cek.php';
		echo '
			<h1 style="text-align: center; font-size: 30px;font-family: Tahoma">MAIN MENU</h1>
			<p style="font-size: 20px">Welcome '.$_SESSION['user'];
		echo '
			<center></p><form action="database.php" method="post">
				<input type="submit" name="database" value="Database" />
			</form></center>
			<center></p><form action="change.php" method="post">
				<input type="submit" name="change" value="Change Password" />
			</form></center>';
		if ($_SESSION['user']=='lutfi'){
			echo '
				<center></p><form action="admin.php" method="post">
					<input type="submit" name="admin" value="Admin" />
				</form></center>';
		}	
		echo'
			<center><form action="logout.php" method="post">
				<input type="submit" name="logout" value="Logout" />
			</form></center>';	
	?>
	</div>
</body>
</html>