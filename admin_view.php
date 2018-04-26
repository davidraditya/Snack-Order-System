<head>
    <style type="text/css">
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
<div id="container">
<h1 style="font-size: 40px; text-align: center; font-family: Tahoma">LIST USER</h1>
    <form action="admin_view.php" method="post">
            <input type="text" name="cari" placeholder="Search">
            <input type="submit" name="Search" value="Search" />
    </form>
    <form action="admin.php" method="post">
            <input type="submit" name="back" value="Kembali" />
    </form>

<?php
    $urut   = 0;
    if(isset($_GET['urut'])){
        $urut   = $_GET['urut'];
    }
?>
<table align="center" >
    <tr>
    	<th><a href="?urut=<?php if ($urut==2){echo'1';} else echo'2'; ?>">Username</a></th>
        <th>Password</th>
    </tr>

    <?php
    include("config.php");
    $query  = sprintf("SELECT * from login");

    if(isset($_POST['Search'])){
        $cari   = $_POST['cari'];
        $query  = $query . " where username like '%$cari%'";

    }

    if($urut==2){
        $query = $query . " order by username";
    } else $query = $query . " order by username desc";


    $user = pg_query($db, $query);

	while ($data = pg_fetch_array ($user)){
		echo "    
        <tr>
        <td>".$data['username']."</td>
        <td>".$data['password']."</td>
        </tr> 
        ";
        }
    ?>
</table>
</div>
</body>
