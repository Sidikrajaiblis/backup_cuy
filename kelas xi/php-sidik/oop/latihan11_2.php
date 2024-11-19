<?php
if (isset($_POST['hitung'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    
    // Matematika
    $harian_mtk = $_POST['harianmtk'];
    $tugas_mtk = $_POST['tugasmtk'];
    $uts_mtk = $_POST['utsmtk'];
    $uas_mtk = $_POST['uasmtk'];
    
    // Bahasa Indonesia
    $harian_indo = $_POST['harianindo'];
    $tugas_indo = $_POST['tugasindo'];
    $uts_indo = $_POST['utsindo'];
    $uas_indo = $_POST['uasindo'];
    
    // Bahasa Inggris
    $harian_inggris = $_POST['harianinggris'];
    $tugas_inggris = $_POST['tugasinggris'];
    $uts_inggris = $_POST['utsinggris'];
    $uas_inggris = $_POST['uasinggris'];
    
    // Produktif
    $harian_produktif = $_POST['harian_produktif'];
    $tugas_produktif = $_POST['tugas_produktif'];
    $uts_produktif = $_POST['uts_produktif'];
    $uas_produktif = $_POST['uas_produktif'];
}

class Data {
    public $rata_rata;

    public function data_diri($nama, $kelas, $jurusan) {
        echo "<table width='50%' align='center'>";
        echo "<tr><td>Nama: $nama</td></tr>";
        echo "<tr><td>Kelas: $kelas</td></tr>";
        echo "<tr><td>Jurusan: $jurusan</td></tr>";
        echo "</table><br>";
    }

    public function cetak_nilai($mapel, $harian, $tugas, $uts, $uas) {
        echo "<tr>";
        echo "<td>$mapel</td>";
        echo "<td>$harian</td>";
        echo "<td>$tugas</td>";
        echo "<td>$uts</td>";
        echo "<td>$uas</td>";
        $this->rata_rata = ($harian + $tugas + $uts + $uas) / 4;
        echo "<td>" . number_format($this->rata_rata, 2) . "</td>";
        echo "<td>" . ($this->rata_rata >= 75 ? 'Tuntas' : 'Tidak Tuntas') . "</td>";
        echo "</tr>";
    }

    public function tampilkan_nilai($harian_mtk, $tugas_mtk, $uts_mtk, $uas_mtk, $harian_indo, $tugas_indo, $uts_indo, $uas_indo, $harian_inggris, $tugas_inggris, $uts_inggris, $uas_inggris, $harian_produktif, $tugas_produktif, $uts_produktif, $uas_produktif) {
        echo "<table border='1' cellspacing='0' width='50%' align='center'>
        <tr>
            <td>Mapel</td>
            <td>Harian</td>
            <td>Tugas</td>
            <td>UTS</td>
            <td>UAS</td>
            <td>Rata-rata</td>
            <td>Grade</td>
        </tr>";
        $this->cetak_nilai('Matematika', $harian_mtk, $tugas_mtk, $uts_mtk, $uas_mtk);
        $this->cetak_nilai('Bahasa Indonesia', $harian_indo, $tugas_indo, $uts_indo, $uas_indo);
        $this->cetak_nilai('Bahasa Inggris', $harian_inggris, $tugas_inggris, $uts_inggris, $uas_inggris);
        $this->cetak_nilai('Produktif', $harian_produktif, $tugas_produktif, $uts_produktif, $uas_produktif);
        echo "</table>";
    }
}

$cetak = new Data();
$cetak->data_diri($nama, $kelas, $jurusan);
$cetak->tampilkan_nilai($harian_mtk, $tugas_mtk, $uts_mtk, $uas_mtk, $harian_indo, $tugas_indo, $uts_indo, $uas_indo, $harian_inggris, $tugas_inggris, $uts_inggris, $uas_inggris, $harian_produktif, $tugas_produktif, $uts_produktif, $uas_produktif);
?>
