<?php
session_start();
include('Connect.php');
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
 
	$sql = mysqli_query($conn, "SELECT * FROM perusahaan WHERE email='$username' AND password='$password'") or die(mysql_error());
	if(mysqli_num_rows($sql) == 0){
		echo '<script language="javascript">alert("User not found."); document.location="Index.php";</script>';
	}else{
		$row = mysqli_fetch_assoc($sql);
			$_SESSION['admin']=$username;
                        $_SESSION['namaperusahaan']=$row['nama'];
                        $_SESSION['idperusahaan']=$row['idperusahaan'];
			echo '<script language="javascript">alert("Welcome To Radar Pekerjaan"); document.location="AdminHome.php";</script>';
                }
	}
?>