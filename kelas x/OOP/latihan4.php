<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset><legend>Form</legend>
    <form action="" method="post">
    <table>
        <tr>
            <td>Nama :</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Kelas :</td>
            <td><input type="text" name="kelas" required></td>
        </tr>
        <tr>
            <td>Kelas :</td>
            <td><textarea name="tempat" id="" cols="21" rows="5" required></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td align="right"><input type="submit" name="simpan" value="Simpan"> <button type="reset">Reset</button></td>
        </tr>
    </table>
    </form>
    </fieldset>
    <?php
    if(isset($_POST['simpan'])){
        $nm = $_POST['nama'];
        $kls = $_POST['kelas'];
        $alamat = $_POST['tempat'];

        class Siswa
        {
            public $nama, $kelas, $alamat;
            public function __construct($a, $b, $c)
            {
                $this->nama = $a;
                $this->kelas = $b;
                $this->alamat = $c;
            }
        }
        $siswa = new Siswa($nm, $kls, $alamat);
        ?>
        <fieldset>
            <legend>Data</legend>
            <table border>
                <tr>
                    <td>Nama</td>
                    <td>Kelas</td>
                    <td>Alamat</td>
                </tr>
                <tr>
                    <td><?php echo $siswa->nama . "";?></td>
                    <td><?php echo $siswa->kelas . "";?></td>
                    <td><?php echo $siswa->alamat . ""; }?></td>
                </tr>
            </table>
        </fieldset>
</body>
</html>