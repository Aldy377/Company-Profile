<?php 
include '../../config/koneksi.php';

$id = $_POST['id_berita'];
$jenis = $_POST['jenis_berita'];
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$keterangan = $_POST['keterangan'];

$sql = mysqli_query($bebas,"UPDATE berita set jenis_berita = '$jenis', tanggal = '$tanggal', judul = '$judul', keterangan = '$keterangan' WHERE id_berita='$id'");

if ($sql > 0) {
	echo "
	<script language='javascript'>
		alert('Data Berhasil Di Rubah');	
		window.location = '../home.php?menu=7';
    	</script>
    	";
}else{
	echo "
	<script language='javascript'>
		alert('Data Gagal Di Ubah');
		window.location = '../home.php?menu=7;
    	</script>
        ";
    }
	?>