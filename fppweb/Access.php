<?php
session_start();

if(!isset($_SESSION['admin'])){
	echo '<script language="javascript">alert("You Must Login First!"); document.location="index.php";</script>';
}
?>