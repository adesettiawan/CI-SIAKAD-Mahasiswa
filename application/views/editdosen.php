<div class="content-wrapper">
    <section class="content-header">
    <h4>UBAH DATA DOSEN</h4><br>
        <?php foreach($dosen as $dsn) { ?>
            <?php echo form_open_multipart('dosen/update'); ?>
                <div class="form-group">
                    <label>Nama Dosen</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $dsn->id ?>">
                    <input type="text" name="nama" class="form-control" value="<?php echo $dsn->nama ?>">
                </div>
                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" name="nip" class="form-control" value="<?php echo $dsn->nip ?>">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $dsn->tgl_lahir ?>">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $dsn->alamat ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $dsn->email ?>">
                </div>
                <div class="form-group">
                    <label>Ubah Foto</label>
                    <input type="file" name="foto" class="form-control" value="<?php echo $dsn->foto ?>"><br>
                    <td>
                    <img src="<?php echo base_url(); ?>assets/img/<?php echo $dsn->foto; ?>
                    " width="120" height="130">
                </td>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo base_url('dosen'); ?>" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                <?php echo form_close(); ?>
        <?php } ?>
    </section>
</div>