<?php
include '../config/koneksi.php';
?>
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data User</h3>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                 Tambah Data User
                </button>
                <a href="user/cuser.php" target==_blank class="btn btn-secondary"><i class="fa fa-print"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>NAMA</th>
                    <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM user";
                    $query = mysqli_query($bebas,$sql);
                    while ($tampil = mysqli_fetch_assoc($query)) {
                    ?>
                  <tr>
                    <td><?php echo $tampil['id_user']?></td>
                    <td><?php echo $tampil['username']?></td>
                    <td><?php echo $tampil['password']?></td>
                    <td><?php echo $tampil['nama']?></td>
                    <td>
                      <a href="home.php?menu=2&id_user=<?php echo $tampil['id_user']?>" class="btn btn-outline-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/></svg></a> | 
                      <a href="user/huser.php?id_user=<?php echo $tampil['id_user']?>" class="btn btn-outline-danger" onclick="return confirm('Yakin Data Akan Di Hapus ...?')"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-dash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5-.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/></svg></a>
                      </td>  
                  </tr>
                  <?php
                   }
                  ?> 
                  <tr>    
                  <tfoot>
                  <tr>
                </table>
              </div>
              <!-- /.card-body -->
            </tr>
            </div>
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="form-group"> 
        <div class="modal-body">
       <form action="user/tuser.php" method="POST">
  <div class="form-group">
    <input type="hidden" class="form-control" name="id_user">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>