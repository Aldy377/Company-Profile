<?php 
include '../../config/koneksi.php';
$id = $_GET['id_berita'];
$sql = (mysqli_query($bebas,"DELETE FROM berita WHERE id_berita = '$id'"));
if ($sql ) {
	$hd = "DELETE FROM berita WHERE id_berita = '$id'";
	mysqli_query($bebas,$hd);
	echo "
	<script language='javascript'>
		alert('Data Berhasil Di Hapus');
		window.location = '../home.php?menu=7';
	</script>
	";
}else{
	echo "
	<script language='javascript'>
		alert('Data Gagal Di Hapus');
		window.location = '../home.php?menu=7';
		</script>
	";
}
?>