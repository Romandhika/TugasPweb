<?php

require_once ('Connect.php');
        $db= mysqli_connect($db_host,$db_username,$db_password,$db_database);
        if (mysqli_connect_errno()){
            die("Could not connect to database : ".myslqi_connect_error());
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
        <p>|</p><a href="AdminList.php">Back</a><p>|</p>
</div>

    <h1 align="center" style="font-family:Rockwell; ">Edit Data Lowongan Kerja</h1>
    <hr align="center" size="5px" width="10%" style="background-color: #053EFF;">
 <?php
    include'Connect.php';
    $id = $_GET['id'];
    $akses="SELECT * from loker where idloker='$id'";
    $edit= mysqli_query($db, $akses);
    $data = mysqli_fetch_array($edit);
?>       
    <form class="centered" method="POST" action="EditList.php">
        <input type="hidden" value="<?php echo $data['idloker'];?>" name="idloker">
            <table>
                <tr>
                    <td>Nama Lowongan Kerja</td>
                    <td>:</td>
                    <td><input type="text" value="<?php echo $data['nama'];?>" name="nama" 
                        size="30" maxlength="30"  required=""></td>
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
                    <td><input type="text" value="<?php echo $data["tipe"];?>" name="tipe"  size="10" maxlength="10" 
                                required=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" value="<?php echo $data['email_cp'];?>"name="emailcp"  
                               maxlength="20"  required=""></td>
                </tr>
                <tr>
                    <td>Usia minimal</td>
                    <td>:</td>
                    <td><input type="text" value="<?php echo $data['usia_min'];?>" name="usiamin" 
                               size="10" maxlength="2"  required=""></td>
                    <td>Usia maksimal</td>
                    <td>:</td>
                    <td><input type="text" value="<?php echo $data['usia_max'];?>" name="usiamax" 
                               size="10" maxlength="2"  required=""></td>
                </tr>
                <tr>
                    <td>Gaji minimal</td>
                    <td>:</td>
                    <td><input type="text" value="<?php echo $data['gaji_min'];?>" name="gajimin" 
                               size="10"  required=""></td>
                    <td>Gaji maksimal</td>
                    <td>:</td>
                    <td><input type="text" value="<?php echo $data['gaji_max'];?>" name="gajimax" 
                               size="10"  required=""></td>
                </tr>
                <tr>
                    <td>Nama CP</td>
                    <td>:</td>
                    <td><input type="text" type="text" value="<?php echo $data['nama_cp'];?>" name="namacp" 
                               size="30" maxlength="30"  required=""></td>
                </tr>
                <tr>
                    <td>No Telp CP</td>
                    <td>:</td>
                    <td><input type="text" type="text" value="<?php echo $data['no_telp_cp'];?>" name="telpcp" 
                               size="30" maxlength="11"  required=""></td>
                </tr>
                <tr>
                    <td>Deskripsi Loker</td>
                    <td>:</td>
                    <td><input type="text" value="<?php echo $data['deskripsi_loker'];?>" name="desloker" maxlength="500" 
                               size="5"  required=""></td>
                </tr>
            </table>
            <div class="panelButton">
                <input class="button" type="submit" name="submit" value="Submit" >
            </div>
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
</body>
</html>