<?php
	session_start();

	if(isset($_SESSION['admin'])){
		echo '<script language="javascript">document.location="AdminHome.php";</script>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Radar Pekerjaan</title>
	<link rel="stylesheet" href="Home.css">
</head>
<body>

<div id="centerMode" class="header">
	<div class="logo">Radar Pekerjaan.</div>
</div>

<!-- NAVBAR -->
<div class="navbar">
        <a href="Index.php">Login</a><p>|</p>
        <a href="Daftar.php">Daftar</a><p>|</p>
	<a class="active" href="Home.php">Home</a><p>|</p>
	<a href="Service.php">List Lowongan Pekerjaan</a><p>|</p>
	<a href="Contact.php">Contact</a><p>|</p>
	<a href="About.php">About</a>
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
    <a href="Index.php">Login</a>
    <a href="Home.php">Home</a>
    <a href="About.php">Penjelasan</a>
	</div>
	
</div>

<script src="Radar.js"></script>
</body>
</html>