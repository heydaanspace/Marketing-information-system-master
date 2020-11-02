<?php
session_start();

include 'conndb.php';

if(isset($_SESSION['id_member'])) {

       if(isset($_POST['tambah'])) { 
        $nopem = $_POST["nopem"];
        $notrans = $_POST["notrans"];
        $tanggal = $_POST["tanggal"];
        $jenis = $_POST["jenis"];
        $jumlah = $_POST["nominal"];
        $bank = $_POST["bank"]; 
        $bukti = $_FILES['bukti']['name'];
        $tmp = $_FILES['bukti']['tmp_name'];
        
        $newbukti = ('bukti').$bukti;
        $path = "admin/assets/images/dokumen/".$newbukti;
        
        move_uploaded_file($tmp,$path);
  
        $query = $mysqli->query("INSERT INTO tbl_pembayaran (no_pembayaran, jenis_bayar,jumlah_bayar,tanggal_transfer,bukti_transfer,nama_bank,status,no_transaksi) VALUES('$nopem','$jenis','$jumlah', '$tanggal','$newbukti','$bank','Menunggu persetujuan','$notrans' )");

        if($query){
          if($mysqli->query("UPDATE tbl_penjualan SET status = 'Proses pembayaran' WHERE no_transaksi = ".$notrans));
         

        }
      }
    }

 header('location:index.php?page=akun');
 $_SESSION['info'] = "Pembayaran telah dilakukan";
    

?>
