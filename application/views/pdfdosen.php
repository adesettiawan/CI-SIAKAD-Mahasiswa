<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Data Dosen</title>
</head><body>
    <h2>LAPORAN DATA DOSEN</h2><br><br>
    <table border="1" cellpadding="5">
        <tr>
            <th>NO</th>
            <th>NAMA DOSEN</th>
            <th>NIP</th>
            <th>TANGGAL LAHIR</th>
            <th>ALAMAT</th>
            <th>EMAIL</th>
        </tr>
        
        <?php 
        $no = 1;
        foreach($dosen as $dsn) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $dsn->nama ?></td>
            <td><?php echo $dsn->nip ?></td>
            <td><?php echo $dsn->tgl_lahir ?></td>
            <td><?php echo $dsn->alamat ?></td>
            <td><?php echo $dsn->email ?></td>

        </tr>

        <?php endforeach ?>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body></html>