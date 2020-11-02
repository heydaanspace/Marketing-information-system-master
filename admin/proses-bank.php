
<?php
session_start();
include 'conndb.php';
if(isset($_POST['tambah'])){
$id_bank	= $_POST["id_bank"];
$nama_bank		= $_POST["nama_bank"];



if($mysqli->query("INSERT INTO tbl_bank (id_bank, nama_bank) VALUES('$id_bank','$nama_bank')")){
	$_SESSION['info'] = "Bank baru saja ditambahkan!";
	header('location: dashboard.php?page=viewbank');
	exit;
}

header ("location:login.php");
	

} 
?>




