<html>
<head>
	<title>RnD Snack and Catering</title>
	<style type="text/css">
		body { font-family:comic-sans; font-size:12px; background-image: url(back.jpg); background-size: cover;}
		#container { width:400px; padding:20px 20px; margin:50px auto; border-style: double solid; border-width: 10px; border-color: blue; background-color: white; }
		input[type="submit"], input[type="reset"] {cursor:pointer;}
	</style>
</head>
<body>
	<?php
	include 'cek.php';
	include 'cek_admin.php';
	?>
	<div id="container">

		<h1 style="text-align: center; font-size: 30px;font-family: Tahoma">DELETE PAGE</h1>
		<p style="font-size: 20px">Hapus berdasarkan username</p>

		<form action="userdel.php" method="post">
			<table>
				<tr>
					<td>Username :</td>
					<td><input type="text" name="username" placeholder="Username" required /></td>
				</tr>
			</table>
			<p><input type="submit" name="delete" value="Delete" />
		</form>
		<form action="admin.php" method="post">
			<input type="submit" name="kembali" value="Kembali" />
		</form>
	</div>
</body>
</html>