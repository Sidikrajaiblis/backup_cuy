
<?php

// Rincian pembelian buku matematika dasar
$jmlBukuDasar = 15;
$hargaBukuDasar = 25000;
$totalBukuDasar = $jmlBukuDasar * $hargaBukuDasar;

// Rincian pembelian buku matematika lanjutan
$jmlBukuLanjutan = 10;
$hargaBukuLanjutan = 35000;
$totalBukuLanjutan = $jmlBukuLanjutan * $hargaBukuLanjutan;

// Total biaya pembelian sebelum diskon
$totalBiayaSebelumDiskon = $totalBukuDasar + $totalBukuLanjutan;

// Persentase diskon
$persentaseDiskon = 10;

// Hitung diskon
$diskon = ($totalBiayaSebelumDiskon > 500000) ? ($totalBiayaSebelumDiskon * $persentaseDiskon / 100) : 0;

// Total biaya setelah diskon
$totalBiayaSetelahDiskon = $totalBiayaSebelumDiskon - $diskon;

// Menampilkan hasil
echo "Total biaya pembelian buku matematika dasar: Rp " . number_format($totalBukuDasar) . "\n";
echo "Total biaya pembelian buku matematika lanjutan: Rp " . number_format($totalBukuLanjutan) . "\n";
echo "Total biaya pembelian semua buku sebelum diskon: Rp " . number_format($totalBiayaSebelumDiskon) . "\n";
echo "Diskon yang diterima Bapak Hadi: Rp " . number_format($diskon) . "\n";
echo "Total biaya pembelian buku setelah diskon: Rp " . number_format($totalBiayaSetelahDiskon) . "\n";

?>                