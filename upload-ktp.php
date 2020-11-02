<?php 

 $ekstensi_diperbolehkan = array('png','jpg','pdf');
  $ktp = $_FILES['ktp']['name'];
  $npwp = $_FILES['npwp']['name'];
  $x = explode('.', $ktp,$npwp);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];


  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    echo "<script>window.alert('Upload Gagal, Pastikan File Foto yang di Upload Bertipe *.JPG')</script>";
      //ARAHKAN
    echo "<script>window.location='javascript:history.go(-1)';</script>";
  }else {
    move_uploaded_file($file_tmp, 'file/'.$ktp);
    move_uploaded_file($file_tmp, 'file/'.$npwp);
  }

 ?>

