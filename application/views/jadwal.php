<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Jadwal Mata Kuliah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=""><i class=" fas fa-tachometer-alt"></i></a> Home</li>
              <li class="breadcrumb-item active">Mata Kuliah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <a class="btn btn-primary mb-2 ml-1" href="<?php echo base_url('jadwal/print') ?>"><i class="fa fa-print"> Print</i></a>
        <table class="table ml-n1">
            <tr>
                <th>NO</th>
                <th>KODE MATA KULIAH</th>
                <th>NAMA MATA KULIAH</th>
                <th>SKS</th>
                <th colspan="3">AKSI</th>
            </tr>

            <?php
                $no = 1;
                foreach($jadwal as $jdw) :
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $jdw->kodematkul ?></td>
                <td><?php echo $jdw->matkul ?></td>
                <td><?php echo $jdw->sks ?></td>
                <td><?php echo anchor('jadwal/detailjadwal/'. $jdw->id, '<button class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i> Detail</button>') ?></td>
            </tr>
                <?php endforeach; ?>
        </table>
    </section>
</div>
