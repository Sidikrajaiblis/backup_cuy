<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form action="" method="post">

<fieldset>
<legend>Form Transaksi Buku</legend>
<table>
<tr>
<th>Nama Costumer :  </th>
<td><input type="text" name="nama" id=""></td>
</tr>
<tr>
<th>Jumlah Buku Matematika Dasar : </th>
<td><input type="number" name="jumlahdasar" id=""></td>
</tr>
<tr>
<th>Jumlah Buku Matematika Lanjutan : </th>
<td><input type="number" name="jumlahlanjut" id=""></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="duarr" name="save"></td>
</tr>
</table>
</fieldset>
</form>

<?php

if(isset($_POST['save'])){
$nama = $_POST['nama'];
$jumlahdasar= $_POST['jumlahdasar'];
$jumlahlanjut = $_POST['jumlahlanjut'];
?>
<fieldset>
<legend>Pembelian</legend>
<?php

class TokoBuku
{
public $nama, $jumlahdasar, $jumlahlanjut;
public $mtkdasar = 25000;
public $mtklanjut = 35000;

public function Pembelian()
{
$totaldasar = $this->mtkdasar * $this->jumlahdasar;
$totallanjut = $this->mtklanjut * $this->jumlahlanjut;
$jumlah = $totaldasar + $totallanjut;
$diskon = $jumlah * 0.10;
$totdis = $jumlah - $diskon;

if ($jumlah > 500000) {
return "<br>Total Pembelian Matematika Dasar:" . $totaldasar .
       "<br>Total Pembelian Matematika Lanjutan :" . $totallanjut.
        "<br>Total Pembelian : " . $jumlah .
        "<br>Anda Mendapatkan Diskon sebesar 10%!!<br>Total Diskon : " . $diskon .
        "<br>Total setelah dipotong Diskon : " . $totdis;

       } else {
       return "Total Pembelian Matematika Dasar:". $totaldasar . "<br>Total Pembelian Matematika Lanjutan :" . $totallanjut . "<br>";
       }
    }
}
$Pembeli = new TokoBuku();
    $Pembeli->nama = $nama;
    $Pembeli->jumlahdasar = $jumlahdasar;
    $Pembeli->jumlahlanjut = $jumlahlanjut;
echo "Nama Costumer : " . $Pembeli->nama . "<br>";
echo "Buku Matematika Dasar yang dibeli : " . $Pembeli->jumlahdasar ."<br>";
echo "Buku Matematika Lanjutan yang dibeli :" . $Pembeli->jumlahlanjut . "<br>";
echo $Pembeli->Pembelian(); ?>

</fieldset>
<?php } ?>
</body>
</html>