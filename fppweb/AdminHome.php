<?php
	include('Access.php');
        require_once ('Connect.php');
        $db= mysqli_connect($db_host,$db_username,$db_password,$db_database);
        if (mysqli_connect_errno()){
            die("Could not connect to database : ".myslqi_connect_error());
        }
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Radar Pekerjaan</title>
        <link rel="stylesheet" href="AdminHome.css">
</head>
<body>

<div id="centerMode" class="header">
	<div class="logo">Radar Pekerjaan.</div>
        <div class="logo2">Welcome to Radar Pekerjaan</div>
        <?php include 'Connect.php';
              $query = " SELECT * from perusahaan"
        ?>

</div>

<!-- NAVBAR -->
<div class="navbar">
        <a class="active" href="AdminHome.php">Home</a><p>|</p>
        <a href="AdminList.php">List Lowongan Pekerjaan</a><p>|</p>
        <a href="AdminInsert.php">Insert</a><p>|</p>
  	<a href="AdminContact.php">Contact</a><p>|</p>
  	<a href="AdminAbout.php">About</a><p>|</p>
  	<a href="logout.php">Logout</a>
</div>

<!-- Slideshow container -->
<div class="slideshow-container">

	<!-- Full-width images with number and caption text -->
	<div class="mySlides fade">
            <img src="image/Gambar1.png" style="width:100%">
		<div class="text">Daftar Lowongan Pekerjaan Terbaik</div>
	</div>

	<div class="mySlides fade">
            <img src="image/Gambar2.png" style="width:100%">
		<div class="text">Dapat mendaftarkan Lowongan kerja anda</div>
	</div>

	<!-- Next and previous buttons -->
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span> 
	<span class="dot" onclick="currentSlide(2)"></span> 
	<!--<span class="dot" onclick="currentSlide(3)"></span>--> 
</div>

<div class="homeContent">
		<h1>WHAT ARE WE?</h1>
		<hr align="center" size="5px" width="5%" style="background-color: #053EFF;">
		<h6>SEKILAS TENTANG KAMI</h6>
                <p>Radar Pekerjaan merupakan suatu badan usaha berbasis online dimana kami menyediakan lowongan pekerjaan dimana
                setiap perusahaan dapat mencantumkan lowngan kerja yang sedang perusahaan itu cari dan setiap masyarakat dapat mencari
                pekerjaan sesuai dengan keinginannya</p>
</div>

<!-- FOOTER -->
<div id="centerMode" class="footer">  
    <div class="footerLeft">
        <a href="AdminHome.php">Home</a>
        <a href="AdminAbout.php">Penjelasan</a>
    </div>
    <div class="footerRight">
        <a href="AdminAbout.php">Edit Profil</a>
  </div>
</div>

<script src="Radar.js"></script>
</body>
</html>