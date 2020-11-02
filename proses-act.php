<?php
session_start();

include 'conndb.php';
include 'no_transaksi.php';


if(isset($_SESSION['kaveling'])) {


  foreach($_SESSION['kaveling'] as $idkaveling => $quantity) {

    $result = $mysqli->query("SELECT * FROM tbl_kaveling JOIN tbl_perumahan ON tbl_kaveling.id_perumahan=tbl_perumahan.id_perumahan WHERE id_kaveling = ".$idkaveling);

    if($result){

      if($obj = $result->fetch_object()) {

       if(isset($_POST['tambah'])) {

        $notrans = $kode_otomatis;
        $pelunasan = $_POST["pelunasan"];
        $nama = $_POST["pembeli"];
        $tanggal = date('Y-m-d', strtotime($_POST["tanggal"]));
        $id= $_SESSION['id_member']; 


        $ekstensi = array('jpg','png','jpeg','doc','docx','pdf');
        $file = $_FILES['file']['name'];
        $x = explode('.', $file);
        $eks = strtolower(end($x));
        $ukuran = $_FILES['file']['size'];
        $target_dir = "admin/assets/images/dokumen/";
        $rand = rand(1,10000);
        $nfile = $rand."-".$file;

        $ekstensin = array('jpg','png','jpeg','doc','docx','pdf');
        $npwp = $_FILES['npwp']['name'];
        $x = explode('.', $npwp);
        $eks = strtolower(end($x));
        $ukuran = $_FILES['npwp']['size'];
        $target_dir = "admin/assets/images/dokumen/";
        $rand = rand(1,10000);
        $nfilen = $rand."-".$npwp;

        if(in_array($eks, $ekstensi) == true){
          if($ukuran < 2500000){
            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
            move_uploaded_file($_FILES['npwp']['tmp_name'], $target_dir.$nfilen);
            $query = $mysqli->query("INSERT INTO tbl_penjualan (no_transaksi,nm_pembeli,jenis_pelunasan,tanggal_transaksi,lampiran_ktp,lampiran_npwp,id_member,id_perumahan,id_kaveling,status) VALUES('$notrans','$nama', '$pelunasan','$tanggal','$nfile','$nfilen','$id', '$obj->id_perumahan', $obj->id_kaveling,'Diajukan')");

            if($query){
              $newjumlah = $obj->jumlah - 1;
              if($mysqli->query("UPDATE tbl_kaveling SET jumlah = ".$newjumlah." WHERE id_kaveling = ".$idkaveling)){   
               $alamat = $_POST['alamat'];
               $telp = $_POST['notelp'];
               $idmember = $_SESSION['id_member'];
               $mysqli->query("UPDATE tbl_member SET alamat_member ='$alamat',No_telefonmember ='$telp' WHERE id_member='$idmember'");

             }
             $_SESSION['info'] = "Silahkan Lakukan Pembayaran, pada menu pembayaran dibawah";
             unset($_SESSION['kaveling']);
             header('location:invoices.php');

           }
         } else {
          $_SESSION['errSize'] = 'Ukuran file yang diupload terlalu besar!';
          header('location: index.php?page=proses');
        } 
      } else {
        $_SESSION['errFormat'] = 'Format file yang diperbolehkan hanya *.JPG, *.PNG, *.DOC, *.DOCX atau *.PDF!';
        header('location: index.php?page=proses');
      }
    }
  }
}
}
}


?>
