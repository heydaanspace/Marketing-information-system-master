<?php 


session_start();
include 'crud-fungsi.php';
include 'conndb.php';
if(isset($_POST['ubah']))
{

	
	$id	    = $_POST["id"];
	$namadpn		= $_POST["nmdpn"];
	$nmbelakang	= $_POST["nmblkg"];
	$email	= $_POST["email"];
	$password	= $_POST["password"];
	$alamat = $_POST["alamat"];

	$ekstensi = array('jpg','png','jpeg');
	$file = $_FILES['file']['name'];
	$x = explode('.', $file);
	$eks = strtolower(end($x));
	$ukuran = $_FILES['file']['size'];
	$target_dir = "admin/assets/images/";


	if($file != ""){

		$rand = rand(1,10000);
		$nfile = $rand."-".$file;

                                                        //validasi file
		if(in_array($eks, $ekstensi) == true){
			if($ukuran < 2500000){

				if(!empty($file)){
					unlink($target_dir.$file);

					move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
					$query = mysqli_query($mysqli, "UPDATE tbl_member SET nm_depan='$namadpn',nm_belakang='$nmbelakang',email='$email',password='$password',alamat_member='$alamat',foto_member='$nfile' WHERE id_member='$id'");

					if($query == true){
						$_SESSION['info'] = "Profil baru saja diperbarui!";
						header('location: index.php?page=akun');
						exit;
					} else {
						header('location: index.php?page=akun');
					}


				} else {
					move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
					$query = mysqli_query($mysqli, "UPDATE tbl_member SET nm_depan='$namadpn',nm_belakang='$nmbelakang',email='$email',password='$password',alamat_member='$alamat',foto_member='$nfile' WHERE id_member='$id'");

					if($query == true){
						$_SESSION['info'] = "Profil baru saja diperbarui!";
						header('location: index.php?page=akun');
						exit;
					} else {
						echo "<script>alert('Data Produk Gagal Disimpan')</script>";
						header('location: index.php?page=akun');
					}

				}

			} else {
				$_SESSION['errSize'] = 'Ukuran file yang diupload terlalu besar!';
				header('location: index.php?page=akun');
			} 
		} else {
			$_SESSION['errFormat'] = 'Format file yang diperbolehkan hanya *.JPG, *.PNG!';
			header('location: index.php?page=akun');
		}
	} else {
		$query = mysqli_query($mysqli, "UPDATE tbl_member SET nm_depan='$namadpn',nm_belakang='$nmbelakang',email='$email',password='$password',alamat_member='$alamat' WHERE id_member='$id'");

		if($query == true){
			$_SESSION['info'] = "Profil baru saja diperbarui!";
			header('location: index.php?page=akun');
			exit;
		} else {
			echo "<script>alert('Data Produk Gagal Disimpan')</script>";
			header('location: index.php?page=akun');
		}

	}


}






?>

