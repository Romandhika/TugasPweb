<?php
include 'Connect.php';
    $id= $_POST['idloker'];
    $nama= $_POST['nama'];
    $tipe=$_POST['tipe'];
    $emailcp=$_POST['emailcp'];
    $usiamin= $_POST['usiamin'];
    $usiamax= $_POST['usiamax'];
    $gajimin= $_POST['gajimin'];
    $gajimax= $_POST['gajimax'];
    $namacp= $_POST['namacp'];
    $telpcp=$_POST['telpcp'];
    $deskripsi=$_POST['desloker'];
    $tanggal = date('Y-m-d');
// query SQL untuk insert data
$query="UPDATE loker SET nama='$nama',tipe='$tipe',usia_min='$usiamin',usia_max='$usiamax',gaji_min='$gajimin'"
        . ",gaji_max='$gajimax',nama_cp='$namacp',email_cp='$emailcp',no_telp_cp='$telpcp',deskripsi_loker='$deskripsi'"
        . ",tgl_update='$tanggal'where idloker='$id' ";
mysqli_query($conn, $query)
?>
<script>
    alert("Berhasil mengedit");
    document.location.href = 'AdminList.php';
</script>

