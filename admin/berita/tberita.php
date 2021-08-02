<?php 
include '../../config/koneksi.php';

$jenis = $_POST['jenisberita'];
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$keterangan = $_POST['keterangan'];
$foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmY').$foto;
$path = "foto/".$fotobaru;

if (move_uploaded_file($tmp_foto, $path)) {
	
	$inbr = "INSERT INTO berita VALUES('','$jenis','$tanggal','$judul','$keterangan','$fotobaru')";
	if (mysqli_query($bebas,$inbr)) {
		echo "
			<script language='javascript'>
				alert('Data Berhasil Di Tambah');
				window.location = '../home.php?menu=7';
			</script>
			";	
	}else{
		echo "
		<script language='javascript'>
			alert('Data Gagal Di Tambahkan');
			window.location = '../home.php?menu=7';
		</script>
		";
	}
}else{
	echo "
		<script language='javascript'>
			alert('Ukuran Fhoto Terlalu Besar');
			window.location = '../home.php?menu=7';
		</script>
		";
}

?>