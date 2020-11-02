<?php
include 'conndb.php';

$carikode = mysqli_query($mysqli, "SELECT id_member from tbl_member") or die (mysqli_error());

$datakode = mysqli_fetch_array($carikode);
$jumlah_data = mysqli_num_rows($carikode);

if ($datakode) {

 $nilaikode = substr($jumlah_data[0], 1);

 $kode = (int) $nilaikode;

 $kode = $jumlah_data + 1;

 $idmember = "01".str_pad($kode, 2, "1", STR_PAD_LEFT);
} else {
 $idmember = "01110";

}
?>