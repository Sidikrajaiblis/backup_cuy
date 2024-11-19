<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kasir Buku</title>
</head>
<body>

<?php
    // Rincian transaksi
    $hargaMatematikaDasar = 25000;
    $jumlahMatematikaDasar = 15;
    $hargaMatematikaLanjutan = 35000;
    $jumlahMatematikaLanjutan = 10;

    // Menghitung total biaya pembelian buku matematika dasar
    $totalMatematikaDasar = $hargaMatematikaDasar * $jumlahMatematikaDasar;

    // Menghitung total biaya pembelian buku matematika lanjutan
    $totalMatematikaLanjutan = $hargaMatematikaLanjutan * $jumlahMatematikaLanjutan;

    // Menghitung total biaya pembelian semua buku sebelum diskon
    $totalSebelumDiskon = $totalMatematikaDasar + $totalMatematikaLanjutan;

    // Menghitung diskon 10%
    $diskon = 0.1 * $totalSebelumDiskon;

    // Menghitung total biaya pembelian buku setelah diskon
    $totalSetelahDiskon = $totalSebelumDiskon - $diskon;
?>

<h2>Rincian Pembelian Buku</h2>
<table border="1">
    <tr>
        <th>Buku</th>
        <th>Harga per Buku (Rp)</th>
        <th>Jumlah</th>
        <th>Total Biaya (Rp)</th>
    </tr>
    <tr>
        <td>Matematika Dasar</td>
        <td><?php echo $hargaMatematikaDasar; ?></td>
        <td><?php echo $jumlahMatematikaDasar; ?></td>
        <td><?php echo $totalMatematikaDasar; ?></td>
    </tr>
    <tr>
        <td>Matematika Lanjutan</td>
        <td><?php echo $hargaMatematikaLanjutan; ?></td>
        <td><?php echo $jumlahMatematikaLanjutan; ?></td>
        <td><?php echo $totalMatematikaLanjutan; ?></td>
    </tr>
    <tr>
        <td colspan="3">Total Biaya Sebelum Diskon</td>
        <td><?php echo $totalSebelumDiskon; ?></td>
    </tr>
    <tr>
        <td colspan="3">Diskon (10%)</td>
        <td><?php echo $diskon; ?></td>
    </tr>
    <tr>
        <td colspan="3">Total Biaya Setelah Diskon</td>
        <td><?php echo $totalSetelahDiskon; ?></td>
    </tr>
</table>

</body>
</html>
