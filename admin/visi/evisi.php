<?php
include '../config/koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($bebas, "SELECT * FROM visimisi WHERE id_visimisi='$id'");
$tampil = mysqli_fetch_assoc($sql);
echo "";
?>

<div class="modal-body">
  <form action="visi/editvisi.php" method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Tipe</label>
      <input type="hidden" name ="id" value="<?php echo $tampil['id_visimisi']?>">
      <input type="text" class="form-control" name="tipe" value="<?php echo $tampil['tipe']?>">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Keterangan</label>

      <input type="text" class="form-control" name="keterangan" value="<?php echo $tampil['keterangan']?>">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      <button type="submit" class="btn btn-primary" >Edit</button>
    </div>
  </div>
</form>
</div>
</div>