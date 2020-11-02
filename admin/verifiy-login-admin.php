<?php 
// mengaktifkan session php
session_start();


include 'conndb.php';

$username =trim(htmlspecialchars(mysqli_real_escape_string($mysqli, $_POST['fusername'])));
$password =trim(htmlspecialchars(mysqli_real_escape_string($mysqli, $_POST['fpassword'])));

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($mysqli,"select * from tbl_admin where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$row = mysqli_fetch_assoc($data);
	$_SESSION['nama'] = $row['full_name'];
	$_SESSION['No_pegawai'] = $row['No_pegawai'];
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";  
	header("location:dashboard.php");
}else{
	$_SESSION['errLog'] = 'Username & Password tidak ditemukan!';
	header("location:index.php?login");
}
?>