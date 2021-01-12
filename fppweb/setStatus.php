<?php
if(isset($_POST['submit'])){
    $statusbaru = $_POST['newstatus'];
    include ('Connect.php');
    $id = $_GET['id'];
//    $queryPencaker = mysqli_query($conn, "SELECT * FROM apply_loker WHERE idpencaker=$id");
//    $getPencaker = mysqli_fetch_assoc($queryPencaker);
//        if ($getPencaker['idpencaker'] == $id2) {
            $queryStatus = mysqli_query($conn, "UPDATE apply_loker SET status='".$statusbaru."' WHERE idapply='$id'");
            if (!$queryStatus) {
                die("Gagal mengubah status : " . mysqli_error($conn));
            } else {
                echo "<script>alert('Proses berhasil');
                document.location='AdminList.php';</script>";
            }
//        }
    
    
}
