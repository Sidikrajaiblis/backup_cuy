<?php 
    $siswa = isset($_POST['nama']) ? $_POST['nama'] : array();
    $kelas = isset($_POST['kelas']) ? $_POST['kelas'] : array();
    if (isset($_POST['simpan'])) {
        //proses data yang disumbmit
        $siswa = $_POST['nama'];
        $kelas = $_POST['kelas'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset><legend>Data Siswa</legend>
    <table border ="1">
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php
        $no = 1;
        for ($i=0; $i < count($siswa); $i++) {
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $siswa[$i] ?></td>
            <td><?php echo $kelas[$i]?></td>
        </tr>
        <?php 
        } 
        ?>
    </table>
    </fieldset>
</body>
</html>