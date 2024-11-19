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
            <img src="logo_smk.png" width="15%" alt="">
            <h2>Form Biodata Diri</h2>
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
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                    <input type="radio" name="jurusan" id="" value="TKR">
                    <label for="tkr">TKR</label>
                    <input type="radio" name="jurusan" id="" value="RPL">
                    <label for="rpl">RPL</label>
                    <input type="radio" name="jurusan" id="" value="TSM">
                    <label for="tsm">TSM</label>
                    </td>
                </tr>
                <tr>
                    <td><h3>Nilai Ujian</h3></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nilai B.Indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="indo" id="" value=""></td>
                </tr>
                <tr>
                    <td>Nilai B.Inggris</td>
                    <td>:</td>
                    <td><input type="number" name="inggris" id="" value=""></td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="mtk" id="" value=""></td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="produktif" id="" value=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="simpan"></td>
                </tr>
            </table>
        </form><br><br>

<?php
if(isset($_POST['proses'])){

$nama_lengkap = $_POST['nama_lengkap'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$indo = $_POST['indo'];
$inggris = $_POST['inggris'];
$mtk = $_POST['mtk'];
$produktif = $_POST['produktif'];

$total = $indo + $inggris + $mtk + $produktif;
$rata = $total /= 4;


echo"<table width='20%'>";
echo"<tr><td>Nama </td><td> : $nama_lengkap </td></tr>";
echo"<tr><td>Kelas </td><td> : $kelas </td></tr>";
echo"<tr><td>Jurusan </td><td> : $jurusan </td></tr>";
echo"<tr><td>Nilai B.Indonesia </td><td> : $indo </td></tr>";
echo"<tr><td>Nilai B.Inggris </td><td> : $inggris </td></tr>";
echo"<tr><td>Matematika </td><td> : $mtk </td></tr>";
echo"<tr><td>Produktif </td><td> : $produktif </td></tr>";
echo"<tr><td>Rata-rata </td><td> : $rata </td></tr>";
echo"</table> <br>";


// echo"Nama Lengkap :  <br>";
// echo"Kelas : $kelas <br>";
// echo"Jurusan : $jurusan <br>";
// echo"NIlai B.Indonesia : $indo <br>";
// echo"NIlai B.Inggris : $inggris <br>";
// echo"NIlai Matematika : $mtk <br>";
// echo"NIlai Produktif : $produktif <br>";
// echo"Rata-rata : $rata <br>";

echo"Status : ";
if ($rata >= 75) {
    echo"Tuntas";
}else{
    echo"Belum Tuntas";
}
}

?>



    </center>
</body>
</html>