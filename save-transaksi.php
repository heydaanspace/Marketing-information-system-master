
<?php

include 'conndb.php';
if(isset($_SESSION['id_kaveling']))
{
$id_kaveling = $_GET['id'];
$result = $mysqli->query("SELECT * FROM tbl_kaveling JOIN tbl_perumahan ON tbl_kaveling.id_perumahan=tbl_perumahan.id_perumahan WHERE id_kaveling='$id_kaveling'");
$obj = $result->fetch_object();


if(isset($_POST['tambah']))
{
 
  $id_transaksi   = $_POST["notrans"];
  $pembeli    = $_SESSION['id_member'];
  $query = $mysqli->query("INSERT INTO tbl_penjualan (no_transaksi,no_ktp,id_perumahan,id_kaveling)
   VALUES('$id_transaksi','$pembeli', $obj->id_perumahan, $obj->id_kaveling)");
  header('location: index.php?page=akun');
  exit;
   }
}
header('location: index.php?page=akun.php');


?>




