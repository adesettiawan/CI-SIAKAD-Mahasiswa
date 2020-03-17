<div class="content-wrapper">
    <section class="content-header">
        <h4>DETAIL JADWAL MATA KULIAH</h4><br>
        <table class="table">
            <tr>
                <th>Kode Mata Kuliah</th>
                <td><?php echo $detail->kodematkul ?></td>
            </tr>
            <tr>
                <th>Nama Mata Kuliah</th>
                <td><?php echo $detail->matkul ?></td>
            </tr>
            <tr>
                <th>SKS</th>
                <td><?php echo $detail->sks ?></td>
            </tr>
            <tr>
                <th>Durasi/Waktu</th>
                <td><?php echo $detail->durasi ?></td>
            </tr>
            <tr>
                <th>Dosen Pengampu</th>
                <td><?php echo $detail->nmdosen ?></td>
            </tr>
        </table>
        <div class="modal-footer">
            <a href="<?php echo base_url('jadwal'); ?>" class="btn btn-primary">Kembali</i></a>
        </div>
    </section>
</div>