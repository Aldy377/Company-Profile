<?php
include '../../config/koneksi.php';

$id = $_POST['id'];
$tipe = $_POST['tipe'];
$keterangan = $_POST['keterangan'];
$sql = mysqli_query($bebas, "UPDATE visimisi SET tipe = '$tipe' , keterangan='$keterangan' WHERE id_visimisi ='$id'");

if ($sql > 0){
	echo "
	<script language ='javascript'>
	alert ('Data Berhasil Dirubah');
	window.location ='../home.php?menu=5';
	</script>
	";
}else{
	echo "
	<script language ='javascript'>
	alert ('Ada Kesalahan Perubahan Data');
	window.location ='../home.php?menu=5';
	</script>
	";
}
?>