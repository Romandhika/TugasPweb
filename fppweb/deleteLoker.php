

<?php
include ('Connect.php');
$id = $_GET['id'];
$query = "DELETE FROM loker WHERE idloker=".$id."";
$result = mysqli_query($conn, $query);
header("location:AdminList.php");
?>

