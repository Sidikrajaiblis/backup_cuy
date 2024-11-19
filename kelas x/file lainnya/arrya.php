<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>titel</title>
    <font face="arial">
</head>
<body>
    <fieldset>
        <legend>insert data</legend>
        <table>
           <form action="" method="post">
            <tr>
                    <td><b>Masukan jumlah siswa:</b></td>
                    <td><input type="text" name="jumlah"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="text" name="nama">submit</button> <button type="text" name="nama">reset</button></td>
                </tr>
           </form>
        </table>
    </fieldset>
    
    <fieldset>
        <legend>Input Data</legend>
        <form action="" method="post">
            <table>
            <?php
            $jumlah =$_POST['jumlah'];
            if ($jumlah > 0) {
                for ($i=1; $i <= $jumlah; $i++) { 
                    ?>
                    <tr>
                        <th>Data Ke <?= $i ?></th>
                        <td>Nama</td>
                        <td><input type="text" name="nama[]"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>kelas</td>
                        <td><input type="text" name="kelas[]"></td>
                    </tr>
                    <?php
                }
            }
        ?>
            </table>
            <button type="submit" name="save">simpan</button>
        </form>
    </fieldset>
</font>
</body>
</html>
