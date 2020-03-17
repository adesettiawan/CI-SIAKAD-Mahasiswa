<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=""><i class=" fas fa-tachometer-alt"></i></a> Home</li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <?php echo $this->session->flashdata('message'); ?>
        <button class="btn btn-primary mb-2 ml-1" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data </button>
        <a class="btn btn-danger mb-2 ml-1" href="<?php echo base_url('mahasiswa/print') ?>"><i class="fa fa-print"> Print</i></a>
        <a class="btn btn-success mb-2 ml-1" href="<?php echo base_url('mahasiswa/pdf') ?>"><i class="fa fa-download"> Export PDF</i></a>

        <table class="table ml-n1">
            <tr>
                <th>NO</th>
                <th>NAMA MAHASISWA</th>
                <th>NIM</th>
                <th>TANGGAL LAHIR</th>
                <th>JURUSAN</th>
                <th colspan="3">AKSI</th>
            </tr>

            <?php
                $no = 1;
                foreach($mahasiswa as $mhs) :
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $mhs->nama ?></td>
                <td><?php echo $mhs->nim ?></td>
                <td><?php echo $mhs->tgl_lahir ?></td>
                <td><?php echo $mhs->jurusan ?></td>
                <td><?php echo anchor('mahasiswa/detailMahasiswa/'. $mhs->id, '<button class="btn btn-success btn-sm mr-n5 ml-n1"><i class="fa fa-search-plus"></i> Detail</button>') ?></td>
                <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('mahasiswa/hapusMahasiswa/'. $mhs->id, '<button class="btn btn-danger btn-sm ml-4"><i class="fa fa-trash"></i> Hapus</button>') ?></td>
                <td><?php echo anchor('mahasiswa/editMahasiswa/'. $mhs->id, '<button class="btn btn-primary btn-sm ml-n5"><i class="fa fa-edit"></i> Edit</button>') ?></td>
            </tr>
                <?php endforeach; ?>
        </table>
    </section>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <!-- untuk open file ubah menjadi form oopen multipart -->
         <?php echo form_open_multipart('mahasiswa/tambah_mahasiswa'); ?>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <select name="jurusan" class="form-control" required>
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Telephone</label>
                    <input type="text" name="telp" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Upload Foto</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="modal-footer">
                <button type="reset" class="btn btn-primary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success" value="Simpan">Simpan</button>
                </div>
        <?php echo form_close(); ?>
    </div>
  </div>
</div>
</div>
</div>