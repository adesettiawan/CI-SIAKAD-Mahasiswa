<?php
    $db = mysqli_connect("localhost","root","","mahasiswa_data");
    
    //untuk mengambil data dari tabel di database
    $query1 = $db->query("SELECT * FROM tb_mahasiswa");
    $query2 = $db->query("SELECT * FROM tb_dosen");
    $query3 = $db->query("SELECT * FROM tb_jadwal");
    $query4 = $db->query("SELECT * FROM tb_jurusan");

    //untuk melakukan perhitungan berdasarkan baris
    $jml_mhs = mysqli_num_rows($query1);
    $jml_dsn = mysqli_num_rows($query2);
    $jml_jdw = mysqli_num_rows($query3);
    $jml_jrs = mysqli_num_rows($query4);

?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=""><i class=" fas fa-tachometer-alt"></i></a> Home</li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo number_format($jml_mhs,0,",",","); ?></h3>

                <p>Mahasiswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
              <a href="<?php echo base_url() ?>mahasiswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo number_format($jml_dsn,0,",",","); ?></h3>

                <p>Dosen</p>
              </div>
              <div class="icon">
              <i class="ion ion-person"></i>
              </div>
              <a href="<?php echo base_url() ?>dosen" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?php echo number_format($jml_jdw,0,",",","); ?></h3>

                <p>Jadwal Kuliah</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-paper"></i>
              </div>
              <a href="<?php echo base_url() ?>jadwal" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo number_format($jml_jrs,0,",",","); ?></h3>

                <p>Jurusan</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-home"></i>
              </div>
              <a href="<?php echo base_url() ?>jurusan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  </body>
</html> 