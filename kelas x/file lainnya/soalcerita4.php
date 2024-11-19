<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kasir Buku</title>
</head>
<body>

<?php
class Buku {
    private $judul;
    private $harga;
    private $jumlah;

    public function __construct($judul, $harga, $jumlah) {
        $this->judul = $judul;
        $this->harga = $harga;
        $this->jumlah = $jumlah;
    }

    public function getTotalBiaya() {
        return $this->harga * $this->jumlah;
    }
}

class Kasir {
    private $daftarBuku = [];

    public function tambahBuku(Buku $buku) {
        $this->daftarBuku[] = $buku;
    }

    public function hitungTotalSebelumDiskon() {
        $total = 0;
        foreach ($this->daftarBuku as $buku) {
            $total += $buku->getTotalBiaya();
        }
        return $total;
    }

    public function hitungDiskon($totalSebelumDiskon, $persentaseDiskon) {
        return $totalSebelumDiskon * $persentaseDiskon;
    }

    public function hitungTotalSetelahDiskon($totalSebelumDiskon, $diskon) {
        return $totalSebelumDiskon - $diskon;
    }
}

// Membuat objek buku
$matematikaDasar = new Buku("Matematika Dasar", 25000, 15);
$matematikaLanjutan = new Buku("Matematika Lanjutan", 35000, 10);

// Membuat objek kasir
$kasir = new Kasir();

// Menambahkan buku ke kasir
$kasir->tambahBuku($matematikaDasar);
$kasir->tambahBuku($matematikaLanjutan);

// Menghitung total biaya sebelum diskon
$totalSebelumDiskon = $kasir->hitungTotalSebelumDiskon();

// Menghitung diskon 10%
$diskon = $kasir->hitungDiskon($totalSebelumDiskon, 0.1);

// Menghitung total biaya setelah diskon
$totalSetelahDiskon = $kasir->hitungTotalSetelahDiskon($totalSebelumDiskon, $diskon);
?>

<h2>Rincian Pembelian Buku</h2>
<table border="1">
    <tr>
        <th>Buku</th>
        <th>Harga per Buku (Rp)</th>
        <th>Jumlah</th>
        <th>Total Biaya (Rp)</th>
    </tr>
    <?php foreach ($kasir->getDaftarBuku() as $buku): ?>
        <tr>
            <td><?php echo $buku->getJudul(); ?></td>
            <td><?php echo $buku->getHarga(); ?></td>
            <td><?php echo $buku->getJumlah(); ?></td>
            <td><?php echo $buku->getTotalBiaya(); ?></td>
        </tr>
    <?php endforeach; ?>
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
