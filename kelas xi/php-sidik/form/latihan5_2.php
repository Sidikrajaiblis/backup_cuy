<?php
if(isset($_POST['submit'])){

$no = $_POST['no'];
$nama = $_POST['nama'];
$unit = $_POST['unit'];
$tanggal = $_POST['tanggal'];
$jabatan = $_POST['jabatan'];
$bpjs = $_POST['bpjs'];
$lamakerja = $_POST['lamakerja'];
$pinjaman = $_POST['pinjaman'];
$status = $_POST['status'];
$tabungan  = $_POST['tabungan'];
$lainnya = $_POST['lainnya'];

}


?>
 <!-- <?php echo"$nama"; ?> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hasilnya</title>
  </head>
  <body>
    <center>
        <h3>Struk Gaji</h3>

        <table style="width: 50%;height:80px ;" border="1" class="text-primary">
            <tr class="card-header" align="center">
                <td colspan="2"><h4><b><?php echo"$nama"; ?></b></h4></td>
                <td></td>
            </tr>
            <tr align="center">
                <td colspan="2"><b>Primary Card Title</b></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">
            <table style="width: 35%;height:80px ;" align="center">
                    <tr>
                        <td>No </td>
                        <td><?php echo": $no";?></td>
                    </tr>
                    <tr>
                        <td>Nama </td>
                        <td><?php echo": $nama";?></td>
                    </tr>
                    <tr>
                        <td>Unit Pendidikan</td>
                        <td><?php echo": $unit";?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Gaji</td>
                        <td><?php echo": $tanggal";?></td>
                    </tr>
            </table>
            <table style="width: 45%;height:80px ;" align="center">
                <tr align="center">
                    <td colspan="2"><b>Gaji</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td><?php echo": $jabatan";?></td>
                </tr>
                <tr>
                    <td>Gaji</td>

                <?php
                if ($jabatan == "kepala sekolah") {
                    $gaji = 10000000;
                    echo"<td> : $gaji </td>";
                }else if ($jabatan == "wakasek") {
                    $gaji = 7500000;
                    echo"<td> : $gaji </td>";
                }else if ($jabatan == "guru") {
                    $gaji = 5000000;
                    echo"<td> : $gaji </td>";
                }else if ($jabatan == "ob") {
                    $gaji = 2500000;
                    echo"<td> : $gaji </td>";
                }

                ?>

                </tr>
                <tr>
                    <td>Lama Kerja</td>
                    <td><?php echo": $lamakerja";?> Tahun</td>
                </tr>
                <tr>
                    <td>Tunjangan Lama Kerja</td>

                    <?php
                    if ($lamakerja > 5) {
                        $tunjangan = 1000000;
                        echo"<td> : $tunjangan </td>";
                    }else {
                        $tunjangan = 0;
                        echo"<td> : $tunjangan </td>";
                    }

                    ?>

                </tr>
                <tr>
                    <td>Status Kerja</td>
                    <td><?php echo": $status";?></td>
                </tr>
                <tr>
                    <td>Bonus</td>
                    <?php
                    if ($status == "tetap") {
                        $bonus = 500000;
                        echo"<td> : $bonus </td>";
                    }else {
                        $bonus = 0;
                        echo"<td> : $bonus </td>";
                    }
                    
                    $gajikotor = $gaji + $tunjangan + $bonus ;

                    ?>
                </tr>
                <tr>
                    <td><b>Gaji Kotor</b></td>
                    <td><b><?php echo": $gajikotor";?></b></td>
                </tr>
            </table>
            <table style="width: 40%;height:80px ;" align="center">
            <tr align="center">
                    <td colspan="2"><b>Potongan</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td>BPJS</td>
                    <td><?php echo": $bpjs";?></td>
                </tr>
                <tr>
                    <td>Pinjaman</td>
                    <td><?php echo": $pinjaman";?></td>
                </tr>
                <tr>
                    <td>Tabungan</td>
                    <td><?php echo": $tabungan";?></td>
                </tr>
                <tr>
                    <td>Lainnya</td>
                    <td><?php echo": $lainnya";?></td>
                </tr>
                <?php
                $totalpotongan = $bpjs + $pinjaman + $tabungan + $lainnya ;
                ?>
                <tr>
                    <td><b>Total Potongan</b></td>
                    <td><b><?php echo": $totalpotongan";?></b></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><h3><b>Total</b></h3></td>
                    <td></td>
                </tr>
                <?php
                $total = $gajikotor - $totalpotongan ;
                ?>
                <tr>
                    <td><h4><b>Gaji Bersih</b></h4></td>
                    <td><h4><b><?php echo": $total";?></b></h4></td>
                </tr>
            </table>
            </td>
            </tr>
        </table>



    </center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>