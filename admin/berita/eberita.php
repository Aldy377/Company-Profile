<?php 
include '../config/koneksi.php';
$id = $_GET['id_berita'];
$sql = mysqli_query($bebas,"SELECT * FROM berita WHERE id_berita = '$id' ");
$tampil = mysqli_fetch_assoc($sql);
?>

<div class="modal-body">
                    <form action="berita/editberita.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">JENIS</label>
                        <input type="hidden" name="id_berita" value="<?php echo $tampil['id_berita']?>">
                        <input type="text" class="form-control" name="jenis_berita" value="<?php echo $tampil['jenis_berita']?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="<?php echo $tampil['tanggal']?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Judul</label>
                        <input type="text" class="form-control" name="judul" value="<?php echo $tampil['judul']?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" value="<?php echo $tampil['keterangan']?>">
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