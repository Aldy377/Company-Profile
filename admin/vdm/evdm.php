<?php
include '../config/koneksi.php';

$id_vdm = $_GET['id_vdm'];

$sql = mysqli_query($bebas,"SELECT * FROM visimisi WHERE id_vdm='$id_vdm'");
$tampil = mysqli_fetch_assoc($sql);

?>
<div class="modal-body">
       <form action="vdm/editvdm.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">type</label>
    <input type="hidden" name="id_vdm" value="<?php echo $tampil['id_vdm']?>">
    <input type="text" class="form-control" name="type" value="<?php echo $tampil['type']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">keterangan</label>
    <input type="text" class="form-control" name="keterangan" value="<?php echo $tampil['keterangan']?>">
  </div>
  <div class="form-group">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>