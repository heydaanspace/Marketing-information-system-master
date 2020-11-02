<?php 


session_start();
include 'crud-fungsi.php';
include 'conndb.php';
if(isset($_POST['ubah']))
{

	
	$id_perumahan	    = $_POST["id_perumahan"];
	$nama_perumahan		= $_POST["nama_perumahan"];
	$lokasi_perumahan	= $_POST["lokasi_perumahan"];
	$daftar_tiperumah	= $_POST["tipeperum"];
	$implode = implode(',', $daftar_tiperumah);
	$Jumlah_kaveling	= $_POST["Jumlah_kaveling"];
	$spesifikasi_teknis = $_POST["spesifikasi_teknis"];
	$luas_tanah			= $_POST["luas_tanah"];

	if(!preg_match("/^[a-zA-Z0-9.,()\/ -]*$/", $nama_perumahan)){
		$_SESSION['perumahan'] = 'Nama Perumahan hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,) minus(-). kurung() dan garis miring(/)';
		header('location: dashboard.php?page=perumahan');

	} else {
		$ekstensi = array('jpg','png','jpeg','doc','docx','pdf');
		$file = $_FILES['file']['name'];
		$x = explode('.', $file);
		$eks = strtolower(end($x));
		$ukuran = $_FILES['file']['size'];
		$target_dir = "assets/images/perumahan/";


		if($file != ""){

			$rand = rand(1,10000);
			$nfile = $rand."-".$file;

                                                        //validasi file
			if(in_array($eks, $ekstensi) == true){
				if($ukuran < 2500000){

					if(!empty($file)){
						unlink($target_dir.$file);

						move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
						$query = mysqli_query($mysqli, "UPDATE tbl_perumahan SET nama_perumahan='$nama_perumahan',gambar='$nfile',lokasi_perumahan='$lokasi_perumahan',daftar_tiperumah='$implode',Jumlah_kaveling='$Jumlah_kaveling',spesifikasi_teknis='$spesifikasi_teknis',luas_tanah='$luas_tanah' WHERE id_perumahan='$id_perumahan'");

						if($query == true){
							$_SESSION['info'] = "Perumahan baru saja ditambahkan!";
							header('location: dashboard.php?page=perumahan');
							exit;
						} else {
							header('location: dashboard.php?page=perumahan');
						}
						

					} else {
						move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
						$query = mysqli_query($mysqli, "UPDATE tbl_perumahan SET nama_perumahan='$nama_perumahan',gambar='$nfile',lokasi_perumahan='$lokasi_perumahan',daftar_tiperumah='$implode',Jumlah_kaveling='$Jumlah_kaveling',spesifikasi_teknis='$spesifikasi_teknis',luas_tanah='$luas_tanah' WHERE id_perumahan='$id_perumahan'");

						if($query == true){
							$_SESSION['info'] = "Perumahan baru saja ditambahkan!";
							header('location: dashboard.php?page=perumahan');
							exit;
						} else {
							echo "<script>alert('Data Produk Gagal Disimpan')</script>";
							header('location: dashboard.php?page=perumahan');
						}

					}
					
				} else {
					$_SESSION['errSize'] = 'Ukuran file yang diupload terlalu besar!';
					header('location: dashboard.php?page=perumahan');
				} 
			} else {
				$_SESSION['errFormat'] = 'Format file yang diperbolehkan hanya *.JPG, *.PNG, *.DOC, *.DOCX atau *.PDF!';
				header('location: dashboard.php?page=perumahan');
			}
		} else {
			$query = mysqli_query($mysqli, "UPDATE tbl_perumahan SET nama_perumahan='$nama_perumahan',lokasi_perumahan='$lokasi_perumahan',daftar_tiperumah='$implode',Jumlah_kaveling='$Jumlah_kaveling',spesifikasi_teknis='$spesifikasi_teknis',luas_tanah='$luas_tanah' WHERE id_perumahan='$id_perumahan'");

			if($query == true){
				$_SESSION['info'] = "Perumahan baru saja ditambahkan!";
				header('location: dashboard.php?page=perumahan');
				exit;
			} else {
				echo "<script>alert('Data Produk Gagal Disimpan')</script>";
				header('location: dashboard.php?page=perumahan');
			}

		}


	}
}





?>

