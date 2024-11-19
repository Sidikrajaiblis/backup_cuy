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
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat" id=""></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" id=""></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                    <input type="radio" name="jenis_kelamin" id="" value="Laki-laki">
                    <label for="laki">Laki-laki</label>
                    <input type="radio" name="jenis_kelamin" id="" value="Perempuan">
                    <label for="Perempuan">perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id=""></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="">
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="khonghuchu">Khonghuchu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td>
                        <select name="pk" id="">
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="sma">SMA</option>
                            <option value="smk">SMK</option>
                            <option value="ma">MA</option>
                            <option value="s1">S1</option>
                            <option value="s2">S2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status" id="">
                            <option value="sudah menikah">Sudah Menikah</option>
                            <option value="belum menikah">Belum Menikah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobi" id="" value="membaca">
                        <label for="membaca">Membaca</label>
                        <input type="checkbox" name="hobi" id="" value="menulis">
                        <label for="menulis">Menulis</label>
                        <input type="checkbox" name="hobi" id="" value="ngepush">
                        <label for="ngepush">Ngepush</label>
                    </td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td>
                        <select name="cita_cita" id="">
                            <option value="programer">Programmer</option>
                            <option value="mekanik">Mekanik</option>
                            <option value="polisi">Polisi</option>
                            <option value="guru">guru</option>
                            <option value="pembalap">Pembalap</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kata-kata Bijak</td>
                    <td>:</td>
                    <td><textarea name="kata_kata" id=""></textarea></td>
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
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$pk = $_POST['pk'];
$status = $_POST['status'];
$hobi = $_POST['hobi'];
$cita_cita = $_POST['cita_cita'];
$kata_kata = $_POST['kata_kata'];

echo"Nama Lengkap : $nama_lengkap <br>";
echo"Tempat lahir : $tempat <br>";
echo"Tanggal lahir : $tanggal <br>";
echo"Jenis Kelamin : $jenis_kelamin <br>";
echo"Alamat : $alamat <br>";
echo"Agama : $agama <br>";
echo"Pendidikan Terakhir : $pk <br>";
echo"Status : $status <br>";
echo"Hobi : $hobi <br>";
echo"Cita-cita : $cita_cita <br>";
echo"Kata-kata Bijak : $kata_kata <br>";
}

?>