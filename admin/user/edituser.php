<?php
include '../../config/koneksi.php';

$id_user = $_POST['id_user'];
$user = $_POST['username'];
$pass = $_POST['password'];
$nama = $_POST['nama'];

$sql = mysqli_query($bebas,"UPDATE user set username = '$user', password = '$pass', nama = '$nama' WHERE id_user = '$id_user' ");

if ($sql > 0) {
	echo "
	<script language='javascript'>
		alert('Data Berhasil Di Rubah');	
		window.location = '../home.php?menu=1';
    	</script>
    	";
}else{
	echo "
	<script language='javascript'>
		alert('Data Gagal Di Ubah');
		window.location = '../home.php?menu=1';
		</script>
        ";
    }
	?>