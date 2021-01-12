<?php
  session_start();

  if(isset($_SESSION['admin'])){
    echo '<script language="javascript">document.location="admin/AdminService.php";</script>';
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Radar Pekerjaan</title>
        <link rel="stylesheet" href="AdminList.css">
</head>
<body>

<div id="centerMode" class="header">
  <div class="logo">Radar Pekerjaan.</div>
</div>

<!-- NAVBAR -->
<div class="navbar">
        <a href="Index.php">Login</a><p>|</p>
        <a href="Daftar.php">Daftar</a><p>|</p>
	<a href="Home.php">Home</a><p>|</p>
	<a class="active" href="Service.php">List Lowongan Pekerjaan</a><p>|</p>
	<a href="Contact.php">Contact</a><p>|</p>
	<a href="About.php">About</a>
       
</div>

<div class="centered">
    <h1 align="center" style="font-family:Rockwell; ">Tampil Data Lowongan</h1>
    <hr align="center" size="5px" width="10%" style="background-color: #053EFF;">
            <?php
            // connect database
            require_once('Connect.php');
            $db = new mysqli($db_host, $db_username, $db_password, $db_database);
            if ($db->connect_errno) {
                die("Could not connect to the database: <br />" . $db->connect_error);
            }
            //Asign a query
            $query = " SELECT * FROM loker ORDER BY idperusahaan";
               // Execute the query
            $result = $db->query($query);
            if (!$result) {
                die("Could not query the database: <br />" . $db->error);
            }
            
            // Fetch and display the results
            $i = 1;
            while ($row = $result->fetch_object()) {
                echo '<tr>';
                echo 'no : ' . $i . '<br/>';
                echo ''.$row->deskripsi_loker.'</br>';
                echo '</br>';
                echo 'nama : ' . $row->nama . '<br/>';
                echo 'tipe : ' . $row->tipe . '<br/>';
                echo 'usia min : ' . $row->usia_min . ' tahun </br>';
                echo 'usia max : ' . $row->usia_max .' tahun <br/>';
                echo 'gaji min : ' . $row->gaji_min . ' Rupiah <br/>';
                echo 'gaji max : ' . $row->gaji_max . ' Rupiah <br/>';
                echo 'nama_cp : ' . $row->nama_cp . '<br/>';
                echo 'no telp cp : '.$row->no_telp_cp. '<br/>';
                echo 'email cp :'.$row->email_cp.'</br>';
                echo '<br/>';
                echo '<br/>';
                echo '<br/>';                 
                echo '</tr>';
                $i++;
            }
            echo '</table>';
            echo '<br />';
            
            $result->free();
            $db->close();
            
        ?>
</div>
    


<!-- FOOTER -->
<div id="centerMode" class="footer">  
  <div class="footerLeft">
    <a href="Index.php">Login</a>
    <a href="Home.php">Home</a>
    <a href="About.php">Penjelasan</a>
  </div>
</div>

<script src="Radar.js"></script>
</body>
</html>