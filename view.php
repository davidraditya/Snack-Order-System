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
        <h2 style="font-size: 40px; text-align: center; font-family: Tahoma">LIST TABEL</h2>
        <p><marquee>Silakan Memilih Tabel Yang Ingin Dilihat!</marquee></p>

        <center>
            <form action="view_pembeli.php" method="post">
                <input type="submit" value="Data Pembeli" />
            </form>

            <form action="view_order.php" method="post">
                <input type="submit" value="Data Order" />
            </form>

            <form action="view_produk.php" method="post">
                <input type="submit" value="Data Produk" />
            </form>

            <form action="view_pengantar.php" method="post">
                <input type="submit" value="Data Pengantar" />
            </form>

            <form action="view_melakukan.php" method="post">
                <input type="submit" value="Data Melakukan Order" />
            </form>

            <form action="view_terdiridari.php" method="post">
                <input type="submit" value="Data Order Produk" />
            </form>

            <form action="view_diantar.php" method="post">
                <input type="submit" value="Data Pengantar Order" />
            </form>

            <form action="database.php" method="post">
                <input type="submit" name="kembali" value="Kembali" />
            </form>
        </center>
    </div>
    
</body>

