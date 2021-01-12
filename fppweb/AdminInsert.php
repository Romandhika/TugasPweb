<?php
include('Access.php');
require_once ('Connect.php');
        $db= mysqli_connect($db_host,$db_username,$db_password,$db_database);
        if (mysqli_connect_errno()){
            die("Could not connect to database : ".myslqi_connect_error());
        }
  
  setcookie("idArticle", "");
  setcookie("filenameArticle", "");
  setcookie("titleArticle", "");
  setcookie("descriptionArticle", "");

  function cutText($text,$length,$max){
    $string = "";
    if($length > $max){
      $string = substr($text, 0, $max) . "...";
    } else {
      $string = $text;
    }
    return $string;
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Radar Pekerjaan</title>
	<link rel="stylesheet" href="AdminInsert.css">
</head>
<body>
    

<div id="centerMode" class="header">
  <div class="logo">Radar Pekerjaan.</div>
  <div class="logo2">Welcome to Radar Pekerjaan</div>
</div>

<!-- NAVBAR -->
<div class="navbar">
        <a href="AdminHome.php">Home</a><p>|</p>
        <a href="AdminList.php">List Lowongan Pekerjaan</a><p>|</p>
        <a class="active" href="AdminInsert.php">Insert</a><p>|</p>
  	<a href="AdminContact.php">Contact</a><p>|</p>
  	<a href="AdminAbout.php">About</a><p>|</p>
  	<a href="logout.php">Logout</a>
</div>


<!-- MAIN WEB-->
        <form class="centered" method="POST" autocomplete="on">
            <table>
                <tr>
                    <td>Nama Lowongan Kerja</td>
                    <td>:</td>
                    <td><input type="text" name="nama" size="30" maxlength="30" placeholder="masukkan nama lowongan kerja" required=""></td>
                </tr>
                <tr>
                    <td>Bidang Pekerjaan</td>
                    <td>:</td>
                    <td>
                            <?php
                                    echo '<select name="bdpekerjaan">';
                                    echo '<option value="none">Pilih bidang</option>';
                            $query = "SELECT * FROM bidang_pekerjaan";
                            $result = mysqli_query($db, $query);
                            if(!$result){
                                die("Could not query to database : ". mysqli_error($db));
                            }
                            
                            while ($row = mysqli_fetch_array($result)){
                                echo '<option values="' . $row['idbidang']. '">' .$row['nama']. '</option>';
                            }
                            echo '</select>';
                            ?>
                        </td>
                </tr>
                <tr>
                    <td>Tipe</td>
                    <td>:</td>
                    <td><input type="text" name="tipe" size="10" maxlength="10" placeholder="tipe pekerjaan" required=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" name="emailcp"  maxlength="20" placeholder="email contact person" required=""></td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td>:</td>
                    <td><input type="text" name="usiamin" size="10" maxlength="2" placeholder="usia minimal" required=""></td>
                    <td>Usia maksimal</td>
                    <td>:</td>
                    <td><input type="text" name="usiamax" size="10" maxlength="2" placeholder="usia maximal" required=""></td>
                </tr>
                <tr>
                    <td>Gaji minimal</td>
                    <td>:</td>
                    <td><input type="text" name="gajimin" size="10" placeholder="gaji minimal" required=""></td>
                    <td>Gaji maksimal</td>
                    <td>:</td>
                    <td><input type="text" name="gajimax" size="10" placeholder="gaji maximal" required=""></td>
                </tr>
                <tr>
                    <td>Nama CP</td>
                    <td>:</td>
                    <td><input type="text" name="namacp" size="30" maxlength="30" placeholder="nama contact person" required=""</td>
                </tr>
                <tr>
                    <td>No Telp CP</td>
                    <td>:</td>
                    <td><input type="text" name="telpcp" size="30" maxlength="11" placeholder="telp contact person" required=""</td>
                </tr>
                <tr>
                    <td>Deskripsi Loker</td>
                    <td>:</td>
                    <td><textarea name="desloker" cols="30" rows="5" placeholder="deksripsi lowongan kerja maks 500 kalimat" required=""></textarea></td>
                </tr>
            </table>
            <div class="panelButton">
                <input class="button" type="submit" name="submit" value="Submit" >
            </div>
<?php
    include 'Connect.php';
if(isset($_POST['submit'])){
    $idd=$_SESSION['idperusahaan'];
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
$query="INSERT INTO loker SET nama='$nama',tipe='$tipe',usia_min='$usiamin',usia_max='$usiamax',gaji_min='$gajimin'"
        . ",gaji_max='$gajimax',nama_cp='$namacp',email_cp='$emailcp',no_telp_cp='$telpcp',deskripsi_loker='$deskripsi'"
        . ",tgl_insert='$tanggal', idperusahaan='$idd'";
if( mysqli_query($conn,$query) ) {
    echo '<script language="javascript">alert("Data Tersimpan"); document.location="AdminList.php";</script>';
}else{
    echo '<script language="javascript">alert("Data Tidak Tersimpan");</script>';
}
// mengalihkan ke halaman index.php
}

?>
        </form>

<!-- FOOTER -->
<div id="centerMode" class="footer">  
  <div class="footerLeft">
      <a href="AdminHome.css">Home</a>
      <a href="AdminAbout.php">Penjelasan</a>
  </div>
  <div class="footerRight">
    <a href="#">Edit Profile</a>
    <a href="#">Terms</a>
    <a href="#">Settings</a>
  </div>
</div>

</script>
</body>
</html>