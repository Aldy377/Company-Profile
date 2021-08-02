<?php
include '../../config/koneksi.php';

$id_vdm = $_GET['id_vdm'];

$sql = "DELETE FROM visimisi WHERE id_vdm='$id_vdm'";
$func = mysqli_query($bebas,$sql);

if ($func > 0) {
	echo "
	<script language='javascript'>
		alert('Data Berhasil Di Hapus');
		window.location = '../home.php?menu=3';
    	</script>
    	";
}else{
	echo "
	<script language='javascript'>
		alert('Data Gagal Di Hapus');
		window.location = '../home.php?menu=3;
    	</script>
    	";
}
?>