<?php
include ('Connect.php');
if(isset($_POST['daftar'])){
    $namaperusahaan = $_POST['namaperusahaan'];
    $pwperusahaan = $_POST['pwperusahaan'];
    $namapemilik = $_POST['namapemilik'];
    $alamatperusahaan = $_POST['alamatperusahaan'];
    $kotaperusahaan = $_POST['kotaperusahaan'];
    $emailperusahaan = $_POST['emailperusahaan'];
    $telpperusahaan = $_POST['telpperusahaan'];
    $date = date('Y-m-d');
    $query = "INSERT INTO perusahaan VALUES ('','$namaperusahaan','$pwperusahaan','$namapemilik','$alamatperusahaan','$kotaperusahaan','$emailperusahaan','$telpperusahaan','$date')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        echo '<script language="javascript">alert("Proses gagal!"); document.location="Index.php";</script>';
    }else{
        echo '<script languange="javascript">alert("Proses berhasil"); document.location="Index.php";</script>';
    }
}

?>
