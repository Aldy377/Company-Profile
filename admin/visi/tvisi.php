<?php
include '../../config/koneksi.php';

$ket = $_POST['keterangan'];
$tipe = $_POST['tipe'];
$judul = $_POST['judul'];


$sql = mysqli_query($bebas, "INSERT INTO visimisi VALUES ('','$ket','$tipe','$judul')");

if ($sql > 0){
	echo "
	<script language ='javascript'>
	alert ('Data Berhasil Disimpan');
	window.location ='../home.php?menu=5';
	</script>
	";
}else{
	echo "
	<script language ='javascript'>
	alert ('Data Gagal Disimpan');
	window.location ='../home.php?menu=5';
	</script>
	";
}
?>