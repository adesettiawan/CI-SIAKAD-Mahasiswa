<div class="content-wrapper">
    <section class="content-header">
    <h4>UBAH DATA MAHASISWA</h4><br>
        <?php foreach($mahasiswa as $mhs) { ?>
            <?php echo form_open_multipart('mahasiswa/update'); ?>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
                    <input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama ?>">
                </div>
                <div class="form-group">
                    <label>Nomor Induk Mahasiswa</label>
                    <input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim ?>">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $mhs->tgl_lahir ?>">
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <select name="jurusan" class="form-control" value="<?php echo $mhs->jurusan ?>">
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $mhs->alamat ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $mhs->email ?>">
                </div>
                <div class="form-group">
                    <label>Telephone</label>
                    <input type="text" name="telp" class="form-control" value="<?php echo $mhs->telp ?>">
                </div>
                <div class="form-group">
                    <label>Ubah Foto</label>
                    <input type="file" name="foto" class="form-control" value="<?php echo $mhs->foto ?>">
                </div>
                <div class="modal-footer">
                    <a href="<?php echo base_url('mahasiswa'); ?>" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                <?php echo form_close(); ?>
        <?php } ?>
    </section>
</div>