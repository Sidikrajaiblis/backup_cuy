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
                  $uang = 10000000;
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