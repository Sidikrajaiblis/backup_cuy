<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <h2>Biodata Kelas</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama_lengkap" id=""></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="simpan"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if(isset($_POST['proses'])){

$nama_lengkap = $_POST['nama_lengkap'];
$kelas = $_POST['kelas'];

echo"Nama Lengkap : $nama_lengkap <br>";
echo"Kelas : $kelas <br>";
}

?>