<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
</section>
<!-- /.Content header -->
<div class="content-header ">
      <div class="container-fluid ">
        <div class="row mb-2 ">
          <div class="col-sm-6 ">
            <h1 class="m-0">DATA MAHASISWA</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>           
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
              </div>
              <!-- /.card-header -->  
              <div class="card-body">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <br></div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NIM</th>
                    <th>SEMESTER</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 0;
                  $query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");
                  while($mhs = mysqli_fetch_array($query)){
                    $no++
                  ?>
                  <tr>
                  <td width='3%'><?php echo $no;?></td>
                    <td><?php echo $mhs['nama'];?></td>
                    <td><?php echo $mhs['nim'];?></td>
                    <td><?php echo $mhs['semester'];?></td>
                    <td><a href="hapus.php?id=<?php echo $mhs['id'];?>" ><button class="btn btn-danger">Hapus</button></a>
                      <a href="index2.php?page=edit-data&& id=<?php echo $mhs['id'];?>)" ><button class="btn btn-primary">Edit</button></a>
                    </td>
                  </tr>
                  </tbody>
                  <?php }?>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.form tambah -->
  <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Masukan Data Mahasiswa</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="create.php">
            <div class="modal-body">   
            <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nama" name="nama" required="Masukan Nama Terlebih Dahulu">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="NIM" name="nim" required="Harap Masukan NIM">
              </div>
                <select class="custom-select" id="inputGroupSelect01" name="semester">
                  <option selected>Semester</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>
             </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
       