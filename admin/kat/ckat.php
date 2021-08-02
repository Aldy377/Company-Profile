<body onload="window.print()">
	<h3 align="center">KATEGORI</h3>
	<table border="1" align="center">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>JENIS</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    include '../../config/koneksi.php';
                    $sql = "SELECT * FROM kategori";
                    $query = mysqli_query($bebas,$sql);
                    while ($tampil = mysqli_fetch_assoc($query)) {
                    ?>
                  <tr>
                    <td><?php echo $tampil['id_kat']?></td>
                    <td><?php echo $tampil['jenisberita']?></td>
                  </tr>
                  <?php
                   }
                  ?> 
  </table>
</body>