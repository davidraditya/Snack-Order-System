<html>
<head>
	<title>RnD Snack and Catering</title>
	<style type="text/css">
		body { font-family:comic-sans; font-size:12px; background-image: url(back.jpg); background-size: cover;}
		#container { width:1400px; padding:20px 20px; margin:50px auto; border-style: double solid; border-width: 10px; border-color: blue; background-color: white; }
		input[type="submit"], input[type="reset"] {cursor:pointer;}
		.produk, .produk td{
			 border: 2px solid black;
		}
		.produk td {
			word-wrap: break-word;
           	max-width: 160px;
		}
	</style>

</head>
<body>
	<?php
	include 'cek.php';
	?>
	<div id="container">
		<h1 style="text-align: center; font-size: 30px;font-family: Tahoma">INSERT PAGE</h1>
		<p style="font-size: 20px">Silahkan isi data dibawah ini</p>

		<form action="insert_process.php" method="post">
			<table>
				<tr>
					<td>Nama </td>
					<td>: <input type="text" name="nama" placeholder="Nama" required /></td>
				</tr>
				<tr>
					<td>No HP </td>
					<td>: <input type="text" name="no_hp" placeholder="No_HP" required /></td>
				</tr>
				<tr>
					<td>Fakultas </td>
					<td>: <input type="text" name="fakultas" placeholder="Fakultas" required /></td>
				</tr>
				<tr>
					<td>Prodi </td>
					<td>: <input type="text" name="prodi" placeholder="Prodi" required /></td>
				</tr>
			</table>
			<p style="font-size: 20px">Produk yang dibeli</p>
			<table class="produk">
				<tr>
					<td>Spaghetti</td>
					<td>Sosis Gulung Mie</td>
					<td>Martabak Tahu</td>
					<td>Baso Gulung Telur</td>
					<td>Roti Bakar Coklat</td>
					<td>Tahu Bakso Crispy</td>
					<td>Tahu Sosis Crispy</td>
					<td>Martabak Telur</td>
					<td>Sandwich</td>
				</tr>
				<tr>
					<td><input type="number" name="p01" placeholder="Jumlah" min="0" required /></td>
					<td><input type="number" name="p02" placeholder="Jumlah" min="0" required /></td>
					<td><input type="number" name="p03" placeholder="Jumlah" min="0" required /></td>
					<td><input type="number" name="p04" placeholder="Jumlah" min="0" required /></td>
					<td><input type="number" name="p05" placeholder="Jumlah" min="0" required /></td>
					<td><input type="number" name="p06" placeholder="Jumlah" min="0" required /></td>
					<td><input type="number" name="p07" placeholder="Jumlah" min="0" required /></td>
					<td><input type="number" name="p08" placeholder="Jumlah" min="0" required /></td>
					<td><input type="number" name="p09" placeholder="Jumlah" min="0" required /></td>
				</tr>
			</table>
			<p style="font-size: 20px">Data Pengambilan</p>
			<table>
				<tr>
					<td>Tempat </td>
					<td>: <input type="text" name="tempat" placeholder="Tempat" required /></td>
				</tr>
				<tr>
					<td>Tanggal </td>
					<td>: <input type="date" name="tanggal" placeholder="YYYY/MM/DD" required pattern="[[0-9]{4}/(0[1-9]|1[012])/(0[1-9]|1[0-9]|2[0-9]|3[01])"/></td>
				</tr>
				<tr>
					<td>Waktu </td>
					<td>: <input type="text" name="waktu" placeholder="HH:MM:SS" required pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]" /></td>
				</tr>
				<tr>
					<td>Pengantar </td>
					<td>: <input type="text" name="pengantar" placeholder="Nama" required /></td>
				</tr>
			</table>
			<p><input type="submit" name="kirim" value="Kirim" /> <input type="reset" name="del" value="Hapus" /></p>
		</form>
		<form action="database.php" method="post">
			<input type="submit" name="kembali" value="Kembali" />
		</form>
	</div>
</body>
</html>