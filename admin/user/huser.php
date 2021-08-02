<?php
include '../../config/koneksi.php';

$id_user = $_GET['id_user'];

$sql = "DELETE FROM user WHERE id_user = '$id_user' ";
$func = mysqli_query($bebas,$sql);

if ($func > 0) {
	echo "
	<script language='javascript'>
		alert('Data Berhasil Di Hapus');
		window.location = '../home.php?menu=1';
    	</script>
    	";
}else{
	echo "
	<script language='javascript'>
		alert('Data Gagal Di Hapus');
		window.location = '../home.php?menu=1';
    	</script>
    	";
}
?>