<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapot siswa</title>
</head>
<body>
    <center>
        <h2><b>Rapot siswa</b></h2>
        <form action="latihan11_2.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan" id="">
                        <option selected>Pilih Jurusan</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                        <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                    </select></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><h4><b>Nilai Matematika</b></h4></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harianmtk" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="tugasmtk" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="utsmtk" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uasmtk" id=""></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><h4><b>Nilai Bahasa Indonesia</b></h4></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harianindo" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="tugasindo" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="utsindo" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uasindo" id=""></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><h4><b>Nilai Inggris</b></h4></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harianinggris" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="tugasinggris" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="utsinggris" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uasinggris" id=""></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><h4><b>Nilai Produktif</b></h4></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harian_produktif" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="tugas_produktif" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="uts_produktif" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uas_produktif" id=""></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" value="hitung" name="hitung"></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
