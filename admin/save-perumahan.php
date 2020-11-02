<?php 


session_start();
include 'crud-fungsi.php';
include 'conndb.php';
if(isset($_POST['tambah']))
{

	if($_POST['daftar_tiperumah'] == "" || $_REQUEST['Jumlah_kaveling'] == "" ){
		$_SESSION['errEmpty'] = 'ERROR! Semua form wajib diisi';
		echo '<script language="javascript">window.history.back();</script>';
	} else {
		$id_perumahan	    = $_POST["id_perumahan"];
		$nama_perumahan		= $_POST["nama_perumahan"];
		$lokasi_perumahan	= $_POST["lokasi_perumahan"];
		$daftar_tiperumah	= $_POST["daftar_tiperumah"];
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

                                                    //jika form file tidak kosong akan mengeksekusi script dibawah ini
			if($file != ""){

				$rand = rand(1,10000);
				$nfile = $rand."-".$file;

                                                        //validasi file
				if(in_array($eks, $ekstensi) == true){
					if($ukuran < 2500000){
						move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
						$stmt = $mysqli->prepare("INSERT INTO tbl_perumahan (id_perumahan,nama_perumahan,gambar,lokasi_perumahan,daftar_tiperumah,Jumlah_kaveling,spesifikasi_teknis,luas_tanah) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");


						$stmt->bind_param("ssssssss",$id_perumahan,$nama_perumahan, $nfile, $lokasi_perumahan,$implode, $Jumlah_kaveling, $spesifikasi_teknis, $luas_tanah);

						if ($stmt->execute()) { 
							$_SESSION['info'] = "Perumahan baru saja ditambahkan!";
							header('location: dashboard.php?page=perumahan');
							exit;
						} else {
							echo "<script>alert('Data Produk Gagal Disimpan')</script>";
							$error = $mysqli->errno.''.$mysqli->error;
							echo $error;
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
					$stmt = $mysqli->prepare("INSERT INTO tbl_perumahan (id_perumahan,nama_perumahan,lokasi_perumahan,daftar_tiperumah,Jumlah_kaveling,spesifikasi_teknis,luas_tanah) VALUES (?, ?, ?, ?, ?, ?, ?)");


					$stmt->bind_param("ssssssss",$id_perumahan,$nama_perumahan,$lokasi_perumahan,$implode, $Jumlah_kaveling, $spesifikasi_teknis, $luas_tanah);

					if ($stmt->execute()) { 
						$_SESSION['info'] = "Perumahan baru saja ditambahkan!";
						header('location: dashboard.php?page=perumahan');
						exit;
					} else {
						echo "<script>alert('Data Produk Gagal Disimpan')</script>";
						$error = $mysqli->errno.''.$mysqli->error;
						echo $error;

					}

				}


					

				}
			}
		}


		?>

