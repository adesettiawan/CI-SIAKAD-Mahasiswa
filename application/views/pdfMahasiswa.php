<!DOCTYPE html>
<html lang="en"><head>
    <title></title>
</head><body>
    <h2 align="center">LAPORAN DATA MAHASISWA</h2><br><br>
    <table border="1" cellpadding="5">
        <tr>
            <th>NO</th>
            <th>NAMA MAHASISWA</th>
            <th>NIM</th>
            <th>TANGGAL LAHIR</th>
            <th>JURUSAN</th>
            <th>ALAMAT</th>
            <th>EMAIL</th>
            <th>TELEPHONE</th>
        </tr>

        <?php 
        $no = 1;
        foreach($mahasiswa as $mhs): ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $mhs->nama ?></td>
            <td><?php echo $mhs->nim ?></td>
            <td><?php echo $mhs->tgl_lahir ?></td>
            <td><?php echo $mhs->jurusan ?></td>
            <td><?php echo $mhs->alamat ?></td>
            <td><?php echo $mhs->email ?></td>
            <td><?php echo $mhs->telp ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body></html>