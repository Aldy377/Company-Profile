<body onload="window.print()">
	<h3 align="center">DATA BERITA</h3>
	<table border="1" align="center" cellpadding="0" cellspacing="0">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>JENIS</th>
                    <th>Tanggal</th>
                    <th>Judul Berita</th>
                    <th>Keterangan</th>
                    <th>Foto</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    include '../../config/koneksi.php';
                    $sql = "SELECT * FROM berita";
                    $query = mysqli_query($bebas,$sql);
                    while ( $tampil = mysqli_fetch_assoc($query)) {
    
                    ?>
                  <tr>
                  <td><?php echo $tampil['id_berita']?></td>
                    <td><?php echo $tampil['jenisberita']?></td>
                    <td><?php echo $tampil['tanggal']?></td>
                    <td><?php echo $tampil['judul']?></td>
                    <td><?php echo $tampil['keterangan']?></td>
                    <td><img src="foto/<?php echo $tampil['foto']?>" width="100" height="100"></td>
                  </tr>
                  <?php 
                }
                   ?>
                  </tbody>
    </table>
</body>