<?php
include '../config/koneksi.php';
function autonumber($tabel, $kolom, $lebar=0, $awalan='')
{
  $conn=mysqli_connect("localhost", "root", "", "dbcompro");
  $query="select $kolom from $tabel order by $kolom desc limit 1";
  $hasil=mysqli_query($conn, $query);
  $jumlahrecord = mysqli_num_rows($hasil);
  if($jumlahrecord == 0)
    $nomor=1;
  else
  {
    $row=mysqli_fetch_array($hasil);
    $nomor=intval(substr($row[0],strlen($awalan)))+1;
  }
  if($lebar>0)
    $angka = $awalan.str_pad($nomor,$lebar,"0",STR_PAD_LEFT);
  else
    $angka = $awalan.$nomor;
  return $angka;
}
?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Visi Misi</h3><br>
            <!-- Button trigger modal -->
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-address-card" aria-hidden="true">
              Tambah Data
            </i></button>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID VISI MISI</th>
                  <th>JUDUL</th>
                  <th>TIPE</th>
                  <th>KETERANGAN</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT * FROM visimisi";
                $query = mysqli_query($bebas, $sql);
                while ($tampil = mysqli_fetch_assoc($query)) {
                  ?>
                  <tr>
                    <td><?php echo $tampil['id_visimisi']?></td>
                    <td><?php echo $tampil['judul']?></td>
                    <td><?php echo $tampil['tipe']?></td>
                    <td><?php echo $tampil['keterangan']?></td>

                    <td>
                      <a href="home.php?menu=6&id=<?php echo $tampil['id_visimisi']?>" class="btn btn-outline-dark"><i class="fa fa-pencil-alt"></i></a> |
                      <a href="visi/hvisi.php?id=<?php echo $tampil['id_visimisi']?>" class="btn btn-outline-dark" onclick="return confirm('Yakin data akan dihapus?')"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php
                }
                ?>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Visimisi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="visi/tvisi.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Judul</label>
            <input type="text" class="form-control" name="judul" required>
          </div>
         

          <div class="form-group">
            <label for="exampleInputEmail1">Tipe</label>
            <select name="tipe" required>
              <option></option>
              <option name="visi" class="font-weight-bold"><h1><strong>VISI</strong></h1></option>
              <option name="misi" class="font-weight-bold"><h1><strong>MISI</strong></h1></option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" required>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" >Tambah Data</button>
        </div>
      </div>
    </form>
  </div>
</div>