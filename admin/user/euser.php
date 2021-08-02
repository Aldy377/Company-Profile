<?php
include '../config/koneksi.php';

$id_user = $_GET['id_user'];

$sql = mysqli_query($bebas,"SELECT * FROM user WHERE id_user = '$id_user' ");
$tampil = mysqli_fetch_assoc($sql);

?>
<div class="modal-body">
  <form action="user/edituser.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="hidden" name="id_user" value="<?php echo $tampil['id_user']?>">
    <input type="text" class="form-control" name="username" value="<?php echo $tampil['username']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" value="<?php echo $tampil['password']?>" readonly>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $tampil['nama']?>">
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