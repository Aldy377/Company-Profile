<?php
include '../../config/koneksi.php';

$id = $_GET['id'];

$sql = (mysqli_query($bebas, "DELETE FROM visimisi WHERE id_visimisi='$id'"));

if ($sql > 0) {
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