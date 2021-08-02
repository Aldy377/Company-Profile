<?php
include '../config/koneksi.php';

$id_kat = $_GET['id_kat'];

$sql = mysqli_query($bebas,"SELECT * FROM kategori WHERE id_kat = '$id_kat' ");
$tampil = mysqli_fetch_assoc($sql);

?>
<div class="modal-body">
       <form action="kat/editkat.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">JENIS</label>
    <input type="hidden" name="id_kat" value="<?php echo $tampil['id_kat']?>">
    <input type="text" class="form-control" name="jenisberita" value="<?php echo $tampil['jenisberita']?>">
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>