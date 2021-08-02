<body onload="window.print()">
	<h3 align="center">VISI DAN MISI</h3>
	<table border="1" align="center">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>TYPE</th>
                    <th>KETERANGAN</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    include '../../config/koneksi.php';
                    $sql = "SELECT * FROM visimisi";
                    $query = mysqli_query($bebas,$sql);
                    while ($tampil = mysqli_fetch_assoc($query)) {
                    
                    ?>
                  <tr>
                    <td><?php echo $tampil['id_vdm']?></td>
                    <td><?php echo $tampil['type']?></td>
                    <td><?php echo $tampil['keterangan']?></td>
                  </tr>
                  <?php
                   }
                  ?> 
                  <tr>
                        
                  <tfoot>
                  <tr>

                </table>
</body>