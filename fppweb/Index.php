<!DOCTYPE HTML>  
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Radar Pekerjaan</title>
  <link rel="stylesheet" href="Index.css">
</head>
<body>  


<div class="centered">
<form  action="Login.php" method="post" style="border:1px solid #ccc;">
  <div class="container">
    <div id="centerMode" class="header">
      <div class="logo">Radar Pekerjaan.</div>
    </div>

    <h1>Login</h1>
    <hr align="left" size="5px" width="5%">
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Email" name="username">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password">

    <div class="trigger">
      <input type="submit" name="login" value="Login" />
   </div>
    <!-- FOOTER -->
<div id="centerMode" class="footer">  
	<div class="footerLeft">
            <a href="Home.php">Back</a>
            <a href="Daftar.php">Daftar</a>
	</div>
</div>
</div>
</form>
</body>
</html>