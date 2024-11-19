<?php

class PembelianBuku {
    private $jmlBukuDasar;
    private $hargaBukuDasar;
    private $jmlBukuLanjutan;
    private $hargaBukuLanjutan;

    public function __construct($jmlBukuDasar, $hargaBukuDasar, $jmlBukuLanjutan, $hargaBukuLanjutan) {
        $this->jmlBukuDasar = $jmlBukuDasar;
        $this->hargaBukuDasar = $hargaBukuDasar;
        $this->jmlBukuLanjutan = $jmlBukuLanjutan;
        $this->hargaBukuLanjutan = $hargaBukuLanjutan;
    }

    public function hitungTotalBiayaDasar() {
        return $this->jmlBukuDasar * $this->hargaBukuDasar;
    }

    public function hitungTotalBiayaLanjutan() {
        return $this->jmlBukuLanjutan * $this->hargaBukuLanjutan;
    }

    public function hitungTotalBiayaSebelumDiskon() {
        return $this->hitungTotalBiayaDasar() + $this->hitungTotalBiayaLanjutan();
    }

    public function hitungDiskon() {
        $totalBiayaSebelumDiskon = $this->hitungTotalBiayaSebelumDiskon();
        $persentaseDiskon = ($totalBiayaSebelumDiskon > 500000) ? 10 : 0;
        return $totalBiayaSebelumDiskon * $persentaseDiskon / 100;
    }

    public function hitungTotalBiayaSetelahDiskon() {
        return $this->hitungTotalBiayaSebelumDiskon() - $this->hitungDiskon();
    }
}

// Inisialisasi objek dengan rincian pembelian
$pembelian = new PembelianBuku(15, 25000, 10, 35000);

// Menampilkan hasil
echo "Total biaya pembelian buku matematika dasar: Rp " . number_format($pembelian->hitungTotalBiayaDasar()) . "\n";
echo "Total biaya pembelian buku matematika lanjutan: Rp " . number_format($pembelian->hitungTotalBiayaLanjutan()) . "\n";
echo "Total biaya pembelian semua buku sebelum diskon: Rp " . number_format($pembelian->hitungTotalBiayaSebelumDiskon()) . "\n";
echo "Diskon yang diterima Bapak Hadi: Rp " . number_format($pembelian->hitungDiskon()) . "\n";
echo "Total biaya pembelian buku setelah diskon: Rp " . number_format($pembelian->hitungTotalBiayaSetelahDiskon()) . "\n";

?>