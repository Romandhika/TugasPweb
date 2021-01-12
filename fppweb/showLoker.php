<?php
include ('Connect.php');
$id=$_GET['id'];
$query="SELECT loker.nama AS namaloker, apply_loker.status AS status, apply_loker.tgl_apply AS tgl_apply, apply_loker.idloker AS idloker,
        apply_loker.idpencaker AS idpencaker, pencaker.nama AS namapencaker, pencaker.jenis_kelamin AS jk, pencaker.alamat AS alamat, pencaker.kota AS kota,
        pencaker.email AS email, pencaker.no_telp AS notelp, pencaker.foto AS foto, pencaker.bidang_pekerjaan AS bp, 
        pencaker.tgl_daftar AS tgl_daftar FROM apply_loker 
        JOIN loker 
            ON apply_loker.idloker = loker.idloker
        JOIN pencaker 
            ON apply_loker.idpencaker = pencaker.idpencaker";
$getnama= mysqli_query($conn,"SELECT nama FROM loker WHERE idloker='".$id."'");
$nmloker= mysqli_fetch_assoc($getnama);
$result= mysqli_query($conn, $query);
if(!$result){
    die("Gagal terhubung ke database : ".mysqli_error($conn));
}
?>

<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Radar Pekerjaan</title>
        <link rel="stylesheet" href="showLoker.css">
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
        <div id="centerMode" style="font-weight: bold; font-size: 20px;"> Daftar Pencaker <?php echo $nmloker['nama']; ?></div>
        <div class="main">
            
        
        <table>
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Email</th>
            <th>No. Telp</th>
            <th>Bidang Pekerjaan</th>
            <th>Tgl Apply</th>
            <th>Status</th>
        </tr>
    
        <?php $i=1;
        while ($row= mysqli_fetch_assoc($result)){
            if($row['idloker']==$id){?>
            <tr>
                <?php $image=$row['foto'];?>
                <?php $msg='<img style="width:50%;" src="data:foto/jpg;base64,'.base64_encode($row['foto']).' " />';?>
                <td><?php echo $i ?></td>
                <td><?php echo $msg?></td>
                <td><?php echo $row['namapencaker']; ?></td>
                <td><?php echo $row['jk']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['kota']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['notelp']; ?></td>
                <td><?php echo $row['bp']; ?></td>
                <td><?php echo $row['tgl_apply']; ?></td>
                <td><form method="POST" autocomplete="on" action="setStatus.php?id=<?php echo $row['idpencaker']; ?>">
                        <select name="newstatus" required>
                            <option value="panggilan tes" <?php if($row['status']=='panggilan tes') echo 'selected="true"'; ?>>Panggilan Tes</option>
                            <option value="proses seleksi" <?php if($row['status']=='proses seleksi') echo 'selected="true"'; ?>>Proses Seleksi</option>
                            <option value="diterima " <?php if($row['status']=='diterima') echo 'selected="true"'; ?>>Diterima</option>
                            <option value="ditolak" <?php if($row['status']=='ditolak') echo 'selected="true"'; ?>>Ditolak</option>
                        </select>
                        <input type="submit" name="submit" value="edit">
                </form></td>
                <!--<td style="font-weight: bold"><?php echo $row['status']; ?></td>-->
            
            </tr>
      <?php }
            $i++;
        } ?>
        </table>
        </div>
    </body>
</html>