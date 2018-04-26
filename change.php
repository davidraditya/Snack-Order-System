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
	<div id="container">
		<h1 style="text-align: center; font-size: 30px;font-family: Tahoma">LOGIN PAGE</h1>
		<p style="font-size: 20px">Silahkan login dibawah ini</p>

		<form action="change_process.php" method="post">
			<table>
				<tr>
					<td>Old Password :</td>
					<td><input type="password" name="opassword" placeholder="Password" required /></p></td>
				</tr>
				<tr>
					<td>New Password :</td>
					<td><input type="password" name="npassword" placeholder="Password" required /></p></td>
				</tr>
				<tr>
					<td>Confirmation Password :</td>
					<td><input type="password" name="cpassword" placeholder="Password" required /></p></td>
				</tr>
			</table>
			<p><input type="submit" name="change" value="Change" /> <input type="reset" name="del" value="Hapus" /></p>
		</form>
		<form action="home.php" method="post">
			<input type="submit" name="kembali" value="Kembali" />
		</form>

	</div>
</body>
</html>