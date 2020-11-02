<?php
include 'conndb.php';

$carikode = mysqli_query($mysqli, "SELECT no_pembayaran from tbl_pembayaran") or die (mysqli_error());

$datakode = mysqli_fetch_array($carikode);
$jumlah_data = mysqli_num_rows($carikode);

if ($datakode) {

 $nilaikode = substr($jumlah_data[0], 1);

 $kode = (int) $nilaikode;

 $kode = $jumlah_data + 1;

 $kode_pembayaran = "41".str_pad($kode, 2, "0", STR_PAD_LEFT);
} else {
 $kode_pembayaran = "41001";

}
?>