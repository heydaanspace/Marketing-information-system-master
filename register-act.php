
<?php
session_start();
require "conndb.php";
include 'autoid_member.php';

$idmember = $idmember;
$namadepan = $_POST["firstname"];
$namabelakang = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$notelp = $_POST["notelp"];

if ($mysqli->query("INSERT INTO tbl_member (id_member, nm_depan,nm_belakang, email,password,No_telefonmember) VALUES('$idmember','$namadepan','$namabelakang','$email','$password','$notelp')"));

{

    $_SESSION['info'] = "Akun anda berhasil dibuat, Silahkan Login";
    header('location: index.php?page=login');
    exit;
}

header("location:login.php");
?>