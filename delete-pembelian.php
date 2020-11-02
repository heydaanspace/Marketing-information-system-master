<?php 
session_start();
include 'conndb.php';
$id=$_GET['id'];
  
    $result = mysqli_query($mysqli, "DELETE FROM tbl_penjualan WHERE no_transaksi='$id'");
    if ($result) {

      $_SESSION['info'] = "Pembelian telah dihapus";
      header('location:index.php?page=akun');
    } else {
     $_SESSION['errDel'] = "Pembelian anda telah diproses, data tidak bisa dihapus";
      header('location:index.php?page=akun');
  
  }

  ?>