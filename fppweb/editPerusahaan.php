<?php
include ('Access.php');
include ('Connect.php');
if(isset($_POST['submit'])){
    $namaperusahaan = $_POST['namaperusahaan'];
    $pwperusahaan = $_POST['pwperusahaan'];
    $namapemilik = $_POST['namapemilik'];
    $alamatperusahaan = $_POST['alamatperusahaan'];
    $kotaperusahaan = $_POST['kotaperusahaan'];
    $emailperusahaan = $_POST['emailperusahaan'];
    $telpperusahaan = $_POST['telpperusahaan'];
    $query = "UPDATE perusahaan SET nama='$namaperusahaan', password='$pwperusahaan', 
        nama_pemilik='$namapemilik', alamat='$alamatperusahaan', kota='$kotaperusahaan', 
        email='$emailperusahaan', no_telp='$telpperusahaan'
        WHERE idperusahaan='".$_SESSION['idperusahaan']."'";
    $result=mysqli_query($conn, $query);
    if(!$result){
        echo '<script language="javascript">alert("Proses gagal!"); document.location="AdminAbout.php";</script>';
    }else{
        echo '<script languange="javascript">alert("Proses berhasil"); document.location="AdminAbout.php";</script>';
    }
}

