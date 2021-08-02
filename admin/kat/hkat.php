<?php
include '../../config/koneksi.php';

$id_kat = $_GET['id_kat'];

$sql = "DELETE FROM kategori WHERE id_kat = '$id_kat' ";
$func = mysqli_query($bebas,$sql);

if ($func > 0) {
	echo "
	<script language='javascript'>
		alert('Data Berhasil Di Hapus');
		window.location = '../home.php?menu=5';
    	</script>
    	";
}else{
	echo "
	<script language='javascript'>
		alert('Data Gagal Di Hapus');
		window.location = '../home.php?menu=5';
    	</script>
    	";
}
?>