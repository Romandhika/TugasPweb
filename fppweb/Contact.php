<?php
  session_start();

  if(isset($_SESSION['admin'])){
    echo '<script language="javascript">document.location="admin/AdminContact.php";</script>';
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Radar Pekerjaan</title>
	<link rel="stylesheet" href="Contact.css">
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
	<a href="Service.php">List Lowongan Pekerjaan</a><p>|</p>
	<a class="active" href="Contact.php">Contact</a><p>|</p>
	<a href="About.php">About</a>
</div>

<div class="contact">
    <h1>CONTACT US</h1>
    <hr align="center" size="5px" width="5%" style="background-color: #053EFF;">
    <h4>Jika Anda memiliki pertanyaan, Silakan menghubungi kamu atau ikuti social media kami untuk mendapatkan info terkini</h4>
    <div class="block" >
      <a href="https://wa.me/+6281230331647"><img src="icon/WhatsApp.png"></a>
      <a href="https://www.instagram.com/romandhika/"><img src="icon/Instagram.png"></a>
      <a href="https://www.facebook.com/romandhika.rijal"><img src="icon/Facebook.png"></a>
      <a href="https://plus.google.com/u/0/?tab=wX"><img src="icon/Google+.png"></a>
      <a href="https://www.youtube.com/watch?v=6qcHwW662sU"><img src="icon/YouTube.png"></a>
      <a href="https://twitter.com/romandhikaa"><img src="icon/Twitter.png"></a>
    </div>
</div>

<div id="map" style="width:100%;height:400px;"></div>

<div class="contact">
    <h1>OUTLET</h1>
    <hr align="center" size="5px" width="5%" style="background-color: #053EFF;">
    <h4>Jl. Prof. Soedarto, Tembalang,<br>
        Kota Semarang, Jawa Tengah 50275<br>
        Fakultas Sains dan Matematika</h4>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDONhhmDNZgCB2bx_PChau-_9hNV4SyGZU&callback=myMap"></script>
</body>
</html>