<?php 
include '../config/koneksi.php';
function autonumber($tabel, $kolom, $lebar=0, $awalan='')
{
    $conn = mysqli_connect("localhost", "root", "", "dbcompany");
    $query= "select $kolom from $tabel order by $kolom desc limit 1";
    $hasil= mysqli_query($conn,$query);
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
                <h3 class="card-title">Data Berita</h3>
                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Berita
                </button>
                <a href="berita/cberita.php" target="_blank" class="btn btn-secondary"><i class="fa fa-print"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>JENIS</th>
                    <th>TANGGAL</th>
                    <th>JUDUL</th>
                    <th>KETERANGAN</th>
                    <th>FOTO</th>
                    <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $sql = "SELECT * FROM berita";
                    $query = mysqli_query($bebas,$sql);
                    while ( $tampil = mysqli_fetch_assoc($query)) {
    
                    ?>
                  <tr>
                    <td><?php echo $tampil['id_berita']?></td>
                    <td><?php echo $tampil['jenis_berita']?></td>
                    <td><?php echo $tampil['tanggal']?></td>
                    <td><?php echo $tampil['judul']?></td>  
                    <td><?php echo $tampil['keterangan']?></td>
                    <td><img src="berita/foto/<?php echo $tampil['foto']?>" width="100" height="100"></td>
                    <td>
                       <a href="home.php?menu=8&id_berita=<?php echo $tampil['id_berita']?>" class="btn btn-outline-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg></a>  
                      <a href="berita/hberita.php?id_berita=<?php echo $tampil['id_berita']?>" class="btn btn-outline-danger" onclick="return confirm('Yakin Data Akan Di Hapus ...?')"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                      <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                      <path fill-rule="evenodd" d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z"/>
</svg></a>
                    </td>
                  </tr>
                  <?php 
                   }
                   ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="modal" tabindex="-1" id="exampleModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="berita/tberita.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <input type="hidden" class="form-control" name="id_berita" value="<?php echo autonumber('berita','id_berita',0,'') ?>">
                        <label for="exampleInputEmail1">JENIS</label>
                      <select class="form-control" name="jenisberita">
                        <?php 
                        include '../config/koneksi.php';
                        $jenis = "SELECT * FROM kategori";
                        $ej = mysqli_query($bebas, $jenis);
                        echo "<option>-</option>";
                        while ($data = mysqli_fetch_assoc($ej)) {
                          echo "<option value=$data[jenisberita]>$data[jenisberita]</option>";
                        }
                        ?>
                      </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal</label>
                       <input type="hidden" class="form-control" name="id_berita">
                        <input type="date" class="form-control" name="tanggal" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" class="form-control" name="judul" required>
                      </div>
                         <div class="form-group">
                        <label for="exampleInputEmail1">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">FOTO</label>
                        <input type="file" class="form-control" name="foto" required="">
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