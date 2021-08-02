<?php
include '../../config/koneksi.php';

$jenisberita = $_POST['jenisberita'];

$sql = mysqli_query($bebas, "INSERT INTO kategori VALUES ('','$jenisberita')");

if ($sql > 0) {
	echo "
	<script language='javascript'>
		alert('Data Berhasil Di Simpan');
		window.location = '../home.php?menu=5';
    </script>
    ";
}else{
	echo "
	<script language='javascript'>
		alert('Ada Kesalahan Input');
		window.location = '../home.php?menu=5;
    </script>
    ";
}
?> 