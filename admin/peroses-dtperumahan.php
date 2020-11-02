<?php
session_start();
require ("conndb.php");
if(isset($_POST['tambah']))
{

	$kode = $_POST['kode'];
	//upload
	$lokasi_file    = $_FILES['gambar']['tmp_name'];
	$tipe_file      = $_FILES['gambar']['type'];
	$nama_file      = $kode.'.jpg'; 
	// Apabila ada gambar yang diupload
	if (!empty($lokasi_file)){		  
		if ($tipe_file != "image/jpeg" && $tipe_file != "image/pjpeg"){
			echo "<script>window.alert('Upload Gagal, Pastikan File Foto yang di Upload Bertipe *.JPG')</script>";
			//ARAHKAN
			echo "<script>window.location='javascript:history.go(-1)';</script>";
		}else {
			//buat folder
			if(is_dir("../../uploaded/produk"))
			{
				$tempat_gambar = "../../uploaded/produk";
			}else{
				mkdir("../../uploaded/produk");
				$tempat_gambar = "../../uploaded/produk";
			}
			// UploadImage($fupload_name, $lokasi, $name)
			UploadImage($nama_file, $tempat_gambar ,"gambar");
		}
	}else{
		$nama_file = "default.jpg";
	}

	$stmt = $mysqli->prepare("INSERT INTO produk 
		(id_produk,nama_tanaman,id_kategori,stok,ketentuan,deskripsi,ukuran,gambar,berat,harga) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt->bind_param("ssssssssss",
		mysqli_real_escape_string($mysqli, $_POST['kode']), 
		mysqli_real_escape_string($mysqli, $_POST['nama']),
		mysqli_real_escape_string($mysqli, $_POST['kategori']), 
		mysqli_real_escape_string($mysqli, $_POST['stok']), 
		mysqli_real_escape_string($mysqli, $_POST['ketentuan']), 
		mysqli_real_escape_string($mysqli, $_POST['deskripsi']), 
		mysqli_real_escape_string($mysqli, $_POST['ukuran']), 
		mysqli_real_escape_string($mysqli, $nama_file), 
		mysqli_real_escape_string($mysqli, $_POST['berat']), 
		mysqli_real_escape_string($mysqli, $_POST['harga']));	

	if ($stmt->execute()) { 
		echo "<script>alert('Data Produk Berhasil Disimpan')</script>";
		echo "<script>window.location='../index.php?hal=produk';</script>";	
	} else {
		echo "<script>alert('Data Produk Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){
		$kode = $_POST['kode'];
		$lokasi_file    = $_FILES['gambar']['tmp_name'];
		$tipe_file      = $_FILES['gambar']['type'];
		$nama_file      = $kode.'.jpg'; 
		// Apabila ada gambar yang diupload
		if (!empty($lokasi_file)){		  
			if ($tipe_file != "image/jpeg" && $tipe_file != "image/pjpeg"){
				echo "<script>window.alert('Upload Gagal, Pastikan File Foto yang di Upload Bertipe *.JPG')</script>";
				//ARAHKAN
				echo "<script>window.location='javascript:history.go(-1)';</script>";
			}else {
				//buat folder
				if(is_dir("../../uploaded/produk"))
				{
					$tempat_gambar = "../../uploaded/produk";
				}else{
					mkdir("../../uploaded/produk");
					$tempat_gambar = "../../uploaded/produk";
				}
				$ambil = caridata($mysqli,"SELECT gambar FROM produk WHERE id_produk = '".$_POST['kode']."'");
				if(is_file("../../uploaded/produk/".$ambil) && $ambil!='default.jpg')
					{
						unlink("../../uploaded/produk/".$ambil);
						unlink("../../uploaded/produk/small_".$ambil);
					}
				UploadImage($nama_file, $tempat_gambar ,"gambar");
			}
			$status = TRUE;
		}else{
			$status = FALSE;
		}

	$stmt = $mysqli->prepare("UPDATE produk SET 
		nama_tanaman=?,
		id_kategori=?,
		stok=?,
		ketentuan=?,
		deskripsi=?,
		ukuran=?,
		berat=?,
		harga=?
		where id_produk=?");
	$stmt->bind_param("sssssssss",
		mysqli_real_escape_string($mysqli, $_POST['nama']),
		mysqli_real_escape_string($mysqli, $_POST['kategori']), 
		mysqli_real_escape_string($mysqli, $_POST['stok']), 
		mysqli_real_escape_string($mysqli, $_POST['ketentuan']), 
		mysqli_real_escape_string($mysqli, $_POST['deskripsi']),
		mysqli_real_escape_string($mysqli, $_POST['ukuran']), 
		mysqli_real_escape_string($mysqli, $_POST['berat']),
		mysqli_real_escape_string($mysqli, $_POST['harga']),	 
		mysqli_real_escape_string($mysqli, $_POST['kode']));	

	if ($stmt->execute()) { 
		if($status)
			{
				$sql="UPDATE produk SET gambar = '$nama_file' where id_produk= '".$_POST['kode']."'";
				$mysqli->query($sql);
			}
		echo "<script>alert('Data Produk Berhasil Diubah')</script>";
		echo "<script>window.location='../index.php?hal=produk';</script>";	
	} else {
		echo "<script>alert('Data Produk Gagal Diubah')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){
	$ambil = caridata($mysqli,"SELECT gambar FROM produk WHERE id_produk = '".$_GET['hapus']."'");
	$stmt = $mysqli->prepare("DELETE FROM produk where id_produk=?");
	$stmt->bind_param("s",mysqli_real_escape_string($mysqli, $_GET['hapus'])); 

	if ($stmt->execute()) { 
		//HAPUS FILE
		if(is_file("../../uploaded/produk/".$ambil) && $ambil!='default.jpg')
		{
			unlink("../../uploaded/produk/".$ambil);
			unlink("../../uploaded/produk/small_".$ambil);
		}
		echo "<script>alert('Data Produk Berhasil Dihapus')</script>";
		echo "<script>window.location='../index.php?hal=produk';</script>";	
	} else {
		echo "<script>alert('Data Produk Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>

?>