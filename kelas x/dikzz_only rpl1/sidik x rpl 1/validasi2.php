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
        if(isset($_GET['bintang'])){
            if($_GET['baris'] == "kosong"){
                echo "<h4 style='color:red'>Jumlah Belum Di Masukan !</h4>";
            }
        }
    ?>

<h4>Masukan Jumlah Baris</h4>
<form action="" method="get">
  <table>
     <tr>
        <td>Jumlah segitiga bintang</td>
        <td><input type="text" name="bintang"></td>
     </tr>
     <tr>
        <td>Jumlah baris</td>
        <td><input type="text" name="baris"></td>
        <td><input type="submit" values="cek"></td>
     </tr>
  </table>

     <?php
$baris = $_GET['baris'];
$bintang = $_GET['bintang'];

if ($baris == "") {
}else {
      for ($i=1; $i <= $bintang; $i++) { 
         for ($t= 1; $t <= $baris; $t++) { 
             for ($g=$baris; $g >= $t; $g-=1) {   
                echo "*";
             }
             echo "<br>";
         }
    }
}
?>

</form>
</body>
</html>   