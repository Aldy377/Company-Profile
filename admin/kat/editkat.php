<?php
include '../../config/koneksi.php';

$id_kat = $_POST['id_kat'];
$jenisberita = $_POST['jenisberita'];

$sql = mysqli_query($bebas,"UPDATE kategori set jenisberita = '$jenisberita' WHERE id_kat = '$id_kat' ");

if ($sql > 0) {
	echo "
	<script language='javascript'>
		alert('Data Berhasil Di Rubah');	
		window.location = '../home.php?menu=5';
    	</script>
    	";
}else{
	echo "
	<script language='javascript'>
		alert('Data Gagal Di Ubah');
		window.location = '../home.php?menu=5;
    	</script>
        ";
    }
	?>