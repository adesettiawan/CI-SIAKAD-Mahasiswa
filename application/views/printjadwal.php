<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Mata Kuliah</title>
</head>
<body>
    <h2>Jadwal Mata Kuliah</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>NO</th>
            <th>KODE MATA KULIAH</th>
            <th>NAMA MATA KULIAH</th>
            <th>SKS</th>
            <th>DURASI/WAKTU</th>
            <th>DOSEN PENGAMPU</th>
        </tr>
        
        <?php 
        $no = 1;
        foreach($jadwal as $jdw) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $jdw->kodematkul ?></td>
            <td><?php echo $jdw->matkul ?></td>
            <td><?php echo $jdw->sks ?></td>
            <td><?php echo $jdw->durasi ?></td>
            <td><?php echo $jdw->nmdosen ?></td>

        </tr>

        <?php endforeach ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>