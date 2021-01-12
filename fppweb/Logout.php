<?php
session_start();
session_destroy();
 
echo '<script language="javascript">alert("You have successfully logged out!"); document.location="Home.php";</script>';
?>