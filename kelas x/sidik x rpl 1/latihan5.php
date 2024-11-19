<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator</title>
    <link rel="stylesheet" href="kalkulator.css">
</head>
<body class="bd">
<form action="" method="get">

<?php
    if (isset($_POST['nomor1'])) {
        $nomor1 = $_GET['nomor1'];
        $nomor2 = $_GET['nomor2'];
        $operator = $_GET[''];

        switch ($operator) {
            case '+':
         $hasil = $nomor1 + $nomor2;
             break;
             case '-':
         $hasil = $nomor1 - $nomor2;
              break;
             case '*':
         $hasil = $nomor1 * $nomor2;
            break;
            case '/':
           $hasil = $nomor1 / $nomor2;
           break;
      }
  }
    ?>
    
<table align="center" class="bg" border="0">
    <tr>
        <td align="center">
            kalkulator
        </td>
    </tr>
  <tr>
     <td align="center">
       <input type="text" name="nomor1" placeholder="nomor 1" required class="hitung">
     </td>
</tr>
<tr>
<td align="center">
     <input type="text" name="nomor2" placeholder="nomor 2" required class="hitung">
</td>
</tr>
<tr>
<td>
       <select name="operator" required class="input">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
     </select>
     <button type="submit" class="tombol">Hitung</button>
</td>
</tr>
<tr>
    <td>
        <?php
        if (isset($_GET['operator'])) {
        }
        ?>
        <input type="text" name="operator" id="" class="hitungan">
    </td>
</tr>
</table>
</form>
</body>
</html>