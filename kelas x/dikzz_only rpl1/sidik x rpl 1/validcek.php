<?php
$nama = $_POST['nama'];

if ($nama == "") {
    header("location:validasi.php?nama=kosong");
}else {
      for ($i=0; $i <= $nama; $i++) { 
         for ($t=0; $t < $i; $t++) { 
             echo "*";
         }
         echo "<br>";
    }
}
?>