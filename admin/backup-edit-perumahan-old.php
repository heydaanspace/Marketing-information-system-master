
<?php
session_start();
include 'crud-fungsi.php';
include 'conndb.php';
if(isset($_POST['ubah'])){
	$id_perumahan	    	= $_POST["id_perumahan"];

	$lokasi_file    = $_FILES['gambar']['tmp_name'];
	$tipe_file      = $_FILES['gambar']['type'];
	$nama_file      = $id_perumahan.'.jpg'; 

	if (!empty($lokasi_file)){		  
		if ($tipe_file != "image/jpeg" && $tipe_file != "image/pjpeg"){
			echo "<script>window.alert('Upload Gagal, Pastikan File Foto yang di Upload Bertipe *.JPG')</script>";
			//ARAHKAN
			echo "<script>window.location='javascript:history.go(-1)';</script>";
		}else {
			//buat folder
			if(is_dir("assets/images/perumahan"))
			{
				$tempat_gambar = "assets/images/perumahan";
			}else{
				mkdir("assets/images/perumahan");
				$tempat_gambar = "assets/images/perumahan";
			}
			$ambil = caridata($mysqli,"SELECT gambar FROM tbl_perumahan WHERE id_perumahan = '".$_POST['id_perumahan']."'");
			if(is_file("assets/images/perumahan".$ambil) && $ambil!='default.jpg')
			{
				unlink("assets/images/perumahan".$ambil);
				unlink("assets/images/perumahan/small_".$ambil);
			}
			UploadImage($nama_file, $tempat_gambar ,"gambar");
		}
		$status = TRUE;
	}else{
		$status = FALSE;
	}

	$stmt = $mysqli->prepare("UPDATE tbl_perumahan SET 
		nama_perumahan=?,
		lokasi_perumahan=?,
		daftar_tiperumah=?,
		Jumlah_kaveling=?,
		spesifikasi_teknis=?,
		luas_tanah=?
		where id_perumahan=?");

	$stmt->bind_param("sssssss",
		mysqli_real_escape_string($mysqli, $_POST['nama_perumahan']),
		mysqli_real_escape_string($mysqli, $_POST['lokasi_perumahan']),
		mysqli_real_escape_string($mysqli, $_POST['daftar_tiperumah']),
		mysqli_real_escape_string($mysqli, $_POST['Jumlah_kaveling']), 
		mysqli_real_escape_string($mysqli, $_POST['spesifikasi_teknis']),
		mysqli_real_escape_string($mysqli, $_POST['luas_tanah']), 
		mysqli_real_escape_string($mysqli, $_POST['id_perumahan']));
	

	if ($stmt->execute()) { 
		if($status)
		{
			$sql="UPDATE tbl_perumahan SET gambar = '$nama_file' where id_perumahan= '".$_POST['id_perumahan']."'";
			$mysqli->query($sql);
		}
		$_SESSION['info'] = "Perumahan baru saja ditambahkan!";
		header('location: dashboard.php?page=perumahan');
		exit;
	} else {
		echo "<script>alert('Data Produk Gagal Diubah')</script>";
		
	}

}else if(isset($_GET['hapus'])){
	$ambil = caridata($mysqli,"SELECT gambar FROM tbl_perumahan WHERE id_perumahan = '".$_GET['hapus']."'");
	$stmt = $mysqli->prepare("DELETE FROM perumahan where id_perumahan=?");
	$stmt->bind_param("s",mysqli_real_escape_string($mysqli, $_GET['hapus'])); 

	if ($stmt->execute()) { 
		//HAPUS FILE
		if(is_file("assets/images/perumahan".$ambil) && $ambil!='default.jpg')
		{
			unlink("assets/images/perumahan".$ambil);
			unlink("assets/images/perumahan/small_".$ambil);
		}
		echo "<script>alert('Data Produk Berhasil Dihapus')</script>";
		echo "<script>window.location='../index.php?hal=produk';</script>";	
	} else {
		echo "<script>alert('Data Produk Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>




