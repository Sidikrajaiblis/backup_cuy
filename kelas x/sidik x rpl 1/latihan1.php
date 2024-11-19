<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toko sarah</title>
</head>
<body bgcolor="skyblue">
<table align="center" border="1" cellspacing="1" width="70%" bordercolor="black">
     <tr>
      <td align="center" bgcolor="sky blue">
        <h1>Dikzz Rental</h1>
      </td>
     </tr>
    <tr>
        <td align="center">
            <?php
            echo "<h3>Daftar Harga Sewa</h3>";
            echo "Motor Matic : Rp.300.000/24jam<br>";
            echo "Motor Sport : Rp.500.000/24jam<br>";
            echo "Mobil Mini : Rp.2.000.000/24jam<br>";
            echo "Mobil Family : Rp.5.000.000/24jam<br><br>";
            ?>
        </td>
    </tr>
    <tr>
        <td align="center">
        <?php
          $matic = 300000;
          $sport = 500000;
          $mini = 2000000;
          $family = 5000000;
          $qty1 = 0;
          $qty2 = 0;
          $qty3 = 1;
          $qty4 = 0;
          $tumbal = $matic + $sport + $mini + $family;


              echo "<h3>Transaksi</h3>";

              $rental1 = $matic * $qty1;
              $rental2 = $sport * $qty2;
              $rental3 = $mini * $qty3;
              $rental4 = $family * $qty4;
              if ($tumbal > 0) {
              echo "Kendaraan yang disewa <br>";
                  if ($qty1 > 0) {
                    echo "Motor matic $qty1 Hari<br>";
                  } 
                  if ($qty2 > 0) {
                    echo "Motor Sport $qty2 hari<br>";
                  } 
                  if ($qty3 > 0) {
                    echo "Mobil Mini $qty3 Hari<br>";
                  } 
                  if ($qty4 > 0) {
                    echo "Mobil Family $qty4 Hari<br>";
                  } 

                  $total = $rental1 + $rental2 + $rental3 + $rental4;
                  echo "Total Transaksi = $total<br>";
                  $uang = 3000000;
                  if ($uang > 300000) {
                    $totkir = $uang - $total;
                    echo "Uang Anda = $uang<br>";
                    echo "Kembalian = $totkir<br>";
                    echo "Uang Anda Cukup<br>";
                  } else {
                    echo "Uang anda kurang";
                }
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