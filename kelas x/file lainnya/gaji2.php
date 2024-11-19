<?php
class Penggajian {
    public $gajiPerJam = 25000;
    public $jamNormal = 8;
    public $jamMax = 12;
    public $bonusMultiplier = 1.5;

    public function hitungGaji($jamKerja) {
        $gajiDasar = $jamKerja <= $this->jamNormal ? $jamKerja * $this->gajiPerJam : $this->jamNormal * $this->gajiPerJam;
        $jamBonus = $jamKerja > $this->jamNormal ? min($jamKerja - $this->jamNormal, $this->jamMax - $this->jamNormal) : 0;
        $bonus = $jamBonus * $this->gajiPerJam * $this->bonusMultiplier;
        $totalGaji = $gajiDasar + $bonus;
        return $totalGaji;
    }

    public function hitungGajiPertahun($jamKerjaPerBulan, $jumlahBulan) {
        $gajiPerBulan = $this->hitungGaji($jamKerjaPerBulan);
        $gajiPertahun = $gajiPerBulan * $jumlahBulan;
        return $gajiPertahun;
    }
}

// Contoh penggunaan
$pegawai = new Penggajian();
$jamKerjaPegawai = 10; // Ganti dengan jumlah jam kerja pegawai per bulan
$jumlahBulan = 12; // Ganti dengan jumlah bulan dalam setahun
$totalGajiPertahun = $pegawai->hitungGajiPertahun($jamKerjaPegawai, $jumlahBulan);

echo "Total gaji pegawai per tahun adalah: Rp " . number_format($totalGajiPertahun);
?>
