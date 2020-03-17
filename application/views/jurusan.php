<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Nama Jurusan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=""><i class=" fas fa-tachometer-alt"></i></a> Home</li>
              <li class="breadcrumb-item active">Jurusan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <table class="table ml-n1">
            <tr>
                <th>NO</th>
                <th>NAMA JURUSAN</th>
                <th>TAHUN BERDIRI</th>
                <th>ALAMAT</th>
            </tr>

            <?php
                $no = 1;
                foreach($jurusan as $jrs) :
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $jrs->nama ?></td>
                <td><?php echo $jrs->thn_berdiri ?></td>
                <td><?php echo $jrs->alamat ?></td>
            </tr>
                <?php endforeach; ?>
        </table>
    </section>
</div>
