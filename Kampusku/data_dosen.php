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
            <h1 class="m-0">DATA DOSEN</h1>
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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NIDN</th>
                    <th>ALAMAT</th>
                    <th>JENIS KELAMIN</th>
                    <th>EMAIL</th>
                    <th>TELEPHONE</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 0;
                  $query = mysqli_query($koneksi, "SELECT * FROM tb_dosen");
                  while($mhs = mysqli_fetch_array($query)){
                    $no++
                  ?>
                  <tr>
                  <td width='3%'><?php echo $no;?></td>
                    <td width='20%'><?php echo $mhs['nama_dosen'];?></td>
                    <td><?php echo $mhs['nidn'];?></td>
                    <td><?php echo $mhs['alamat'];?></td>
                    <td><?php echo $mhs['jenis_kelamin'];?></td>
                    <td><?php echo $mhs['email'];?></td>
                    <td><?php echo $mhs['telp'];?></td>
                  </tr>
                  </tbody>
                  <?php }?>
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
    <!-- /.content -->
  </div>