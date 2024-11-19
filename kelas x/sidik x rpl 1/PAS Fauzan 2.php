<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="get">
<fieldset>
    <legend>Input array</legend>
    
    <table>
        <tr>
            <td>
                <b>Masukan jumlah</b>
            </td>
            <td>:</td>
            <td>
                <input type="text" name="jumlah">
            </td>
    
        </tr>
<tr >
    
    <td colspan="2">
        <input type="submit" name="simpan" values="simpan">
    </td>
</tr>
    </table>
</fieldset>
</form>
<?php
    
    $nama = $_GET['jumlah']; 
 $jumlah=isset($_GET['jumlah']) ? $_GET['jumlah'] : 0; 
        if ($jumlah > 0) {
            echo "
            <fieldset>
     <legend>input data siswa</legend>";
    
     for ($i=1; $i <= $jumlah; $i++) { 
         echo "<table>
         <tr><td><b>Data ke-$i</b></td><form action='PAS Fauzan2,2.php' method='POST'>
         <td> Nama </td>
         <td> 
         <input type='text' name='nama[]'></td>
          </tr>
            <tr>
            <td></td>
            <td> Asal sekolah</td>
            <td><input type='text' name='sekolah[]'> </td></tr>
            <tr>
            <td></td>

            <td>Nilai Bahasa Indonesia</td>
            <td><input type='text' name='nilaiBI[]'></td>
        </tr>
        <tr>
            <td></td>
            <td>Nilai Bahasa Inggris</td>
            <td><input type='text' name='nilaiIng[]'></td>
        </tr>
        <tr>
            <td></td>
            <td>Nilai Matematika</td>
            <td><input type='text' name='nilaiMTK[]'></td>
        </tr>
        <tr>
            <td></td>
            <td>Nilai IPA</td>
            <td><input type='text' name='nilaiIPA[]'></td>
        </tr>";
           }
        }
    
   
    echo "<tr><td><button type='submit' name='save'>simpan</button> </td></tr></form></table> ";
    echo "</fieldset>";
    
    
    ?>
   
</body>
</html>
     
 
 
  
 
     