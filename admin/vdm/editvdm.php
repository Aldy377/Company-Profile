<?php
include '../../config/koneksi.php';

$id_vdm = $_POST['id_vdm'];
$type = $_POST['type'];
$kete = $_POST['keterangan'];

$sql = mysqli_query($bebas,"UPDATE visimisi set type = '$type', keterangan = '$kete'  WHERE id_vdm='$id_vdm'");

if ($sql > 0) {
	echo "
	<script language='javascript'>
		alert('Data Berhasil Di Rubah');	
		window.location = '../home.php?menu=3';
    	</script>
    	";
}else{
	echo "
	<script language='javascript'>
		alert('Data Gagal Di Ubah');
		window.location = '../home.php?menu=3;
    	</script>
        ";
    }
	?>