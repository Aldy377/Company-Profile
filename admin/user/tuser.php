<?php
include '../../config/koneksi.php';

$user = $_POST['username'];
$pass = md5($_POST['password']);
$nama = $_POST['nama'];

$sql = mysqli_query($bebas, "INSERT INTO user VALUES ('','$user','$pass','$nama')");

if ($sql > 0) {
	echo "
	<script language='javascript'>
		alert('Data Berhasil Di Simpan');
		window.location = '../home.php?menu=1';
    </script>
    ";
}else{
	echo "
	<script language='javascript'>
		alert('Ada Kesalahan Input');
		window.location = '../home.php?menu=1;
    </script>
    ";
}
?> 