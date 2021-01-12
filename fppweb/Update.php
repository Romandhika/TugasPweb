<?php

	if(isset($_POST['update'])){
		$id=$_COOKIE['idArticle'];
		$fileName = $_FILES['img']['name'];
		$temp_filename = $_COOKIE['filenameArticle'];
		$title = $_POST['title'];
		$desc = $_POST['description'];
		$query = "";
		$result = "";

		if($_FILES['img']['name'] == "") {
			$query = "UPDATE portofolio SET `heading` = '$title', `text` = '$desc' WHERE id = $id;";
			$result = mysqli_query($conn,$query);
		} else {
			//Hapus dari folder
			unlink("../image/" . $temp_filename);

			// Simpan di Folder Gambar
			if(move_uploaded_file($_FILES['img']['tmp_name'],  "../image/".$_FILES['img']['name'])){
				echo "<script>alert('Image uploaded successfully!');</script>";
			} else {
				echo "<script>alert('Image failed to upload.');</script>";
			}

			// Simpan ke Database
			$query = "UPDATE portofolio SET `filename` = '$fileName', `heading` = '$title', `text` = '$desc' WHERE id = $id;";
			$result = mysqli_query($conn,$query);
		}

		if($result){
			echo "<script>alert('Data successfully inserted!');</script>";
		} else {
			echo "<script>alert('Data failed to insert.');</script>";
		}
	}

?>
