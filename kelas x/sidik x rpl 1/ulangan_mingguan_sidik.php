<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toko sarah</title>
</head>
<body>
<table align="center" border="1" cellspacing="1" width="70%" bordercolor="black">
     <tr>
      <td align="center" bgcolor="orange">
        <h1>TOKO SARAH</h1>
      </td>
     </tr>
    <tr>
        <td align="center">
            <?php
            echo "<h3> Daftar Makanan</h3>";
            echo "Keripik : 5000<br>";
            echo "Permen : 1000<br>";
            echo "Minuman Ringan : 2000<br><br>";
            ?>
        </td>
    </tr>
    <tr>
        <td align="center">
          <?php
          $keripik = 5000;
          $permen = 1000;
          $minuman = 2000;
          $qty1 = 5;
          $qty2 = 1;
          $qty3 = 1;
          $tumbal = $qty1 + $qty2 + $qty3;


              echo "<h3>Transaksi Berhasil</h3>";

              $barang1 = $keripik * $qty1;
              $barang2 = $permen * $qty2;
              $barang3 = $minuman * $qty3;
              if ($tumbal > 0) {
              echo "Barang yang dibeli <br>";
                  if ($qty1 > 0) {
                    echo "Keripik $qty1 <br>";
                  } 
                  if ($qty2 > 0) {
                    echo "Permen $qty2 <br>";
                  } 
                  if ($qty3 > 0) {
                    echo "Minuman Ringan $qty3 <br>";
                  } 

                  $total = $barang1 + $barang2 + $barang3;
                  echo "Total Transaksi = $total<br>";
                  if ($total > 20000) {
                    $diskon = $total * 0.1;
                    echo "Anda Mendafatkan Diskon 10%<br>";
                    echo "Total Diskon = $diskon<br>";
                    $totkir = $total - $diskon;
                    echo "Total Akhir = $totkir<br>";

                  } else {
                    echo "Tidak ada diskon untuk nominal anda<br>";
                  }
              } else {
                  echo "Tidak ada barang yang dibeli";
              }



              ?>
        </td>
    </tr>
    <tr>
        <td align="center" class="makasih" bgcolor="orange">
        <h2>Terima Kasih</h2>
        </td>
    </tr>
</table>
    
</body>
</html>