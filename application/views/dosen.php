<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Dosen</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=""><i class=" fas fa-tachometer-alt"></i></a> Home</li>
              <li class="breadcrumb-item active">Data Dosen</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <?php echo $this->session->flashdata('message'); ?>
        <button class="btn btn-primary mb-2 ml-1" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data </button>
        <a class="btn btn-danger mb-2 ml-1" href="<?php echo base_url('dosen/print') ?>"><i class="fa fa-print"> Print</i></a>
        <a class="btn btn-success mb-2 ml-1" href="<?php echo base_url('dosen/pdf') ?>"><i class="fa fa-download"> Export PDF</i></a>

        <table class="table ml-n1">
            <tr>
                <th>NO</th>
                <th>NAMA DOSEN</th>
                <th>NIP</th>
                <th>TANGGAL LAHIR</th>
                <th>ALAMAT</th>
                <th colspan="3">AKSI</th>
            </tr>

            <?php
                $no = 1;
                foreach($dosen as $dsn) :
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dsn->nama ?></td>
                <td><?php echo $dsn->nip ?></td>
                <td><?php echo $dsn->tgl_lahir ?></td>
                <td><?php echo $dsn->alamat ?></td>
                <td><?php echo anchor('dosen/detailDosen/'. $dsn->id, '<button class="btn btn-success btn-sm mr-n5"><i class="fa fa-search-plus"></i> Detail</button>') ?></td>
                <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('dosen/hapusDosen/'. $dsn->id, '<button class="btn btn-danger btn-sm  ml-4"><i class="fa fa-trash"></i> Hapus</button>') ?></td>
                <td><?php echo anchor('dosen/editDosen/'. $dsn->id, '<button class="btn btn-primary btn-sm ml-n5"><i class="fa fa-edit"></i> Edit</button>') ?></td>
            </tr>
                <?php endforeach; ?>
        </table>
    </section>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA DOSEN</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <!-- untuk open file ubah menjadi form open multipart -->
         <?php echo form_open_multipart('dosen/tambah_dosen'); ?>
                <div class="form-group">
                    <label>Nama Dosen</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" name="nip" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" required>
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