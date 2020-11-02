<?php
include 'conndb.php';

$carikode = mysqli_query($mysqli, "SELECT no_transaksi from tbl_penjualan") or die (mysqli_error());

$datakode = mysqli_fetch_array($carikode);
$jumlah_data = mysqli_num_rows($carikode);

if ($datakode) {

 $nilaikode = substr($jumlah_data[0], 1);

 $kode = (int) $nilaikode;

 $kode = $jumlah_data + 1;

 $kode_otomatis = "101".str_pad($kode, 3, "0", STR_PAD_LEFT);
} else {
 $kode_otomatis = "1010001";

}
?>