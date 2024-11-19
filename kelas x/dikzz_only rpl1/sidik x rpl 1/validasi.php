<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validasi</title>
</head>
<body>
<h1>Membuat Segitiga Bintang</h1>

    <?php
        if(isset($_GET['nama'])){
            if($_GET['nama'] == "kosong"){
                echo "<h4 style='color:red'>Jumlah Belum Di Masukan !</h4>";
            }
        }
    ?>

<h4>Masukan Jumlah Baris</h4>
<form action="validcek.php" method="post">
  <table>
     <tr>
        <td>Jumlah</td>
        <td><input type="text" name="nama"></td>
        <td><input type="submit" values="cek"></td>
     </tr>
  </table>
</form>
</body>
</html>         