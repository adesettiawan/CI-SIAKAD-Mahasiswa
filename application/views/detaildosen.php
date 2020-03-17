<div class="content-wrapper">
    <section class="content-header">
        <h4>DETAIL DATA DOSEN</h4><br>
        <table class="table">
            <tr>
                <th>Nama Lengkap</th>
                <td><?php echo $detail->nama ?></td>
            </tr>
            <tr>
                <th>NIP</th>
                <td><?php echo $detail->nip ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $detail->tgl_lahir ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo $detail->alamat ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $detail->email ?></td>
            </tr>
            <tr>
                <td>
                    <img src="<?php echo base_url(); ?>assets/img/<?php echo $detail->foto; ?>
                    " width="120" height="130">
                </td>
                <td></td>
            </tr>
        </table>
        <div class="modal-footer">
            <a href="<?php echo base_url('dosen'); ?>" class="btn btn-primary">Kembali</i></a>
        </div>
    </section>
</div>