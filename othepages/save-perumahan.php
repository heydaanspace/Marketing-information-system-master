<?php
if (isset ($_POST["tambah"])){
	require ("conndb.php");

	$idperumahan	= $_POST["idperumahan"];
	$perumahan		= $_POST["perumahan"];
	$lokasi			= $_POST["lokasiperumahan"];
	$fasilitas		= $_POST["fasilitasperum"];
	$tipe			= $_POST["tipeperum"];
	$jumlah			= $_POST["jmlkav"];
	$luas			= $_POST["luastanah"];


	
	$SQL = "insert into tbl_perumahan (id_perumahan,nama_perumahan,lokasi_perumahan,fasilitas_perumahan,daftar_tiperumah,Jumlah_kaveling,luas_tanah) values ('$idperumahan','$perumahan','$lokasi','$fasilitas','$tipe','$jumlah','$harga')";

	mysqli_query($mysqli, $SQL);
	$num = mysqli_affected_rows($mysqli);
	if($num > 0){
		header("location:index.php?page=frmperumahangagal?berhasil");


	}
	else{
		echo "Data gagal disimpan.<br />";
	}

}

?>