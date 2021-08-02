<body onload="window.print()">
	<h3 align="center">DATA USER</h3>
	<table border="1" align="center">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>NAMA</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    include '../../config/koneksi.php';
                    $sql = "SELECT * FROM user";
                    $query = mysqli_query($bebas,$sql);
                    while ($tampil = mysqli_fetch_assoc($query)) {
                    
                    ?>
                  <tr>
                    <td><?php echo $tampil['id_user']?></td>
                    <td><?php echo $tampil['username']?></td>
                    <td><?php echo $tampil['password']?></td>
                    <td><?php echo $tampil['nama']?></td>
                  </tr>
                  <?php
                   }
                  ?> 
                  <tr>
                        
                  <tfoot>
                  <tr>

                </table>
</body>