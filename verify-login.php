<?php 

session_start();

include 'conndb.php';

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($mysqli,"select * from tbl_member where email='$email' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	$row = mysqli_fetch_assoc($data);
	$_SESSION['nm_depan'] = $row['nm_depan'];
	$_SESSION['id_member'] = $row['id_member'];
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login"; 
	header("location:index.php");
}else{
	header("location:index.php?page=login");
}
?>