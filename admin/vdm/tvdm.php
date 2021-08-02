<?php
include '../../config/koneksi.php';

$type = $_POST['type'];
$kete = $_POST['keterangan'];

$sql = mysqli_query($bebas, "INSERT INTO visimisi VALUES ('','$type','$kete')");

if ($sql > 0) {
	echo "
	<script language='javascript'>
		alert('Data Berhasil Di Simpan');
		window.location = '../home.php?menu=3';
    </script>
    ";
}else{
	echo "
	<script language='javascript'>
		alert('Ada Kesalahan Input');
		window.location = '../home.php?menu=3;
    </script>
    ";
}
?> 