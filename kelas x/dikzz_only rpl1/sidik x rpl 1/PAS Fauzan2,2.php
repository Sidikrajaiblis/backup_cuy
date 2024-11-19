<?php
if (isset($_POST['save']))
{
    $nama = $_POST['nama'];
    $asal = $_POST['sekolah'];
  $nilaiBI = $_POST['nilaiBI'];
  $nilaiIng = $_POST['nilaiIng'];
  $nilaiMTK = $_POST['nilaiMTK'];
  $nilaiIPA = $_POST['nilaiIPA'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>absen</title>
</head>
<body>
  <fieldset>
    <legend>Data Siswa</legend>
    <table border="1">
    <tr>
    <td><b>Nomor</b></td>
    <td><b>nama</b></td>
    <td><b>Asal Sekolah</b></td>
    <td><b>Bahasa Indonesia</b></td>
    <td><b>Bahasa Inggris</b></td>
    <td><b>Matematika</b></td>
    <td><b>Ilmu Pengetahuan Alam</b></td>
    <td><b>Jumlah Nilai</b></td>
    <td><b>Rata-rata</b></td>
    <td><b>Keterangan</b></td>
 
    </tr>
    <?php
    $jumlahn = $nilaiBI + $nilaiIng + $nilaiIPA + $nilaiMTK;

?>
    <?php
    $no = 1;
    for ($i=0; $i < count($nama); $i++){ ?>
        <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $nama[$i]; ?></td>
        <td><?php echo $asal[$i]; ?></td>
        <td><?php echo $nilaiBI[$i]; ?></td>
        <td><?php echo $nilaiIng[$i]; ?></td>
        <td><?php echo $nilaiMTK[$i]; ?></td>
        <td><?php echo $nilaiIPA[$i]; ?></td>
        <td><?php $jumlahn= $nilaiBI[$i]+$nilaiIng[$i]+$nilaiMTK[$i]+$nilaiIPA[$i]; echo $rata=$jumlahn/4;?></td>
        <td><?php echo $jumlahn= $nilaiBI[$i]+$nilaiIng[$i]+$nilaiMTK[$i]+$nilaiIPA[$i];?></td>
        <td><?php if ($jumlahn > 340) {
          echo "Diterima";
        }else {
          echo"Tidak diterima";
        }?> </td>

       <?php } ?> 

      
       
        </tr>
    </table>
  </fieldset>

</table>
</body>
</html>
