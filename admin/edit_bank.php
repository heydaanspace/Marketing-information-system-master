
<?php
session_start();
include 'conndb.php';
if(isset($_POST['ubah'])){
$id_bank	= $_POST["id_bank"];
$nama_bank		= $_POST["nama_bank"];



	if($mysqli->query("UPDATE tbl_bank SET nama_bank='$nama_bank' WHERE	id_bank='$id_bank'")){
	$_SESSION['info'] = "Bank baru saja diperbarui!";
	header('location: dashboard.php?page=viewbank');
	exit;


}

header ("location:tes.php");
	
	

} 
?>




