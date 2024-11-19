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
}

// Contoh penggunaan
$pegawai = new Penggajian();
$jamKerjaPegawai = 10; // Ganti dengan jumlah jam kerja pegawai
$totalGajiPegawai = $pegawai->hitungGaji($jamKerjaPegawai);

echo "Total gaji pegawai untuk $jamKerjaPegawai jam kerja adalah: Rp " . number_format($totalGajiPegawai);
?>
