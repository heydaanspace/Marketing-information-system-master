<?php
function KodeOtomatis($conn,$tabel, $id, $inisial, $index, $panjang)
{
  $query  = "SELECT max(".$id.") as max_id FROM `".$tabel."` WHERE ".$id." LIKE '".$inisial."%'";
  $data   = $conn->query($query)->fetch_array();
  $id_max = $data['max_id'];
  
  if($index=='' && $panjang=='')
  {
  $no_urut  = (int) $id_max;
  }else if($index!='' && $panjang==''){
  $no_urut    = (int) substr($id_max, $index);
  }else{
  $no_urut  = (int) substr($id_max, $index, $panjang);
  }
  $no_urut  = $no_urut + 1;
  if($index=='' && $panjang=='')
  {
    $id_baru  = $no_urut;
  }else if($index!='' && $panjang==''){
    $id_baru  = $inisial . $no_urut;
  }else{
    $id_baru  = $inisial . sprintf("%0$panjang"."s", $no_urut);
  }
  return $id_baru;
}

  function SingleData($conn,$kolom,$table){
    $row = $conn->query("SELECT $kolom FROM $table")->fetch_array();
    return $row[0];
  }

  function ArrayData($conn,$table,$kondisi){
    $row = $conn->query("Select * from $table where $kondisi")->fetch_assoc();
    return $row;
  }

  function JumlahData($conn,$table){
     $row = $conn->query("Select * from $table")->num_rows;
     return $row;
  }

  function lastinsert($conn,$qry){
    $row = $conn->query($qry)->fetch_array();
    return $row[0];
  }

  function CekExist($conn,$qry){
    $row = $conn->query($qry)->num_rows;
    if ($row> 0){
        return true;
    }else{
        return false;
    }

  }
  function caridata($conn,$qry){
    $row = $conn->query("$qry")->fetch_array();
    return $row[0];
  }

  function cekkembali($tgl,$h){
    $tgl_hasil= date('Y-m-d', strtotime($h, strtotime($tgl)));
    return $tgl_hasil;
  }

  function cektelat($tgl1,$tgl2,$s){
    $tglpinjam = date_create($tgl1);
    $tglskrg  = date_create($tgl2);

    $diff  = date_diff( $tglpinjam, $tglskrg );
    $selisih=$diff->days;

    if($selisih<=$s){
      $telat=0;
    }else{
      $telat=$selisih-$s;
    }
    return $telat;
  }
  


function tahun(){
  $tgl=date('Y');
  for ($i=2017; $i<=$tgl ; $i++) { 
    echo "<option value='$i'>$i</option>";  
  }
}

function pilihselect($data,$string){
  if ($data==$string){
    return "selected";
  }
}

// Upload gambar
function UploadImage($fupload_name, $lokasi, $name){
  //direktori gambar
  $vdir_upload = "$lokasi/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["$name"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 150;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "small_" . $fupload_name);

  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
}

function UploadFile($fupload_name, $lokasi, $name){
  //direktori gambar
  $vdir_upload = "$lokasi/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["$name"]["tmp_name"], $vfile_upload);

}

function limit_text($text, $limit) 
    {
      if (strlen($text)<=$limit)
      {
          echo $text;
      }else{
        $text2=substr($text,0, $limit) . '...';
          echo $text2;
      }
    }

# /=============================
class Paging
{
    function cariPosisi($batas)
    {
        if (empty($_GET['halaman'])) {
            $posisi = 0;
            $_GET['halaman'] = 1;
        } else {
            $posisi = ($_GET['halaman'] - 1) * $batas;
        }
        return $posisi;
    }

// Fungsi untuk menghitung total halaman
    function jumlahHalaman($jmldata, $batas)
    {
        $jmlhalaman = ceil($jmldata / $batas);
        return $jmlhalaman;
    }

// Fungsi untuk link halaman 1,2,3 (untuk admin)
    function navHalaman($halaman_aktif, $jmlhalaman, $hal)
    {
        $link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
        if ($halaman_aktif > 1) {
            $prev = $halaman_aktif - 1;
            $link_halaman .= "<li><a href=./$hal&halaman=1><i class='fa fa-step-backward'></i></a></li>
                    <li><a href=./$hal&halaman=$prev><i class='fa fa-backward'></i></a></li>";
        } else {
            $link_halaman .= "<li class='disabled'><a href='#'><i class='fa fa-step-backward'></i></a></li><li class='disabled'><a href='#'><i class='fa fa-backward'></i></a></li>";
        }

// Link halaman 1,2,3, ...
        $angka = ($halaman_aktif > 3 ? "<li><a> ... </a></li>" : " ");
        for ($i = $halaman_aktif - 2; $i < $halaman_aktif; $i++) {
            if ($i < 1)
                continue;
            $angka .= "<li><a href=./$hal&halaman=$i>$i</a></li>";
        }
        $angka .= "<li class='active'><a href='#'>$halaman_aktif</a></li>";

        for ($i = $halaman_aktif + 1; $i < ($halaman_aktif + 3); $i++) {
            if ($i > $jmlhalaman)
                break;
            $angka .= "<li><a href=./$hal&halaman=$i>$i</a></li>";
        }
        $angka .= ($halaman_aktif + 2 < $jmlhalaman ? "<li><a> ... </a></li><li><a href=./$hal&halaman=$jmlhalaman>$jmlhalaman</a></li>" : " ");

        $link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last)
        if ($halaman_aktif < $jmlhalaman) {
            $next = $halaman_aktif + 1;
            $link_halaman .= "<li><a href=./$hal&halaman=$next><i class='fa fa-forward'></i></a></li>
  <li><a href=./$hal&halaman=$jmlhalaman><i class='fa fa-step-forward'></i></a></li> ";
        } else {
            $link_halaman .= "<li class='disabled'><a href='#'><i class='fa fa-forward'></i></a></li><li class='disabled'><a href='#'><i class='fa fa-step-forward'></i></a></li>";
        }
        return $link_halaman;
    }
}

?>

