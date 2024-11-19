<?php
class Perusahaan

{
    public $nama = "";
    public $jabatan = "";
    public $gaji = "";

    public function Memodifikasi()
    {
        return "Memodifikasi Data Karyawan";
    }

    public function Menampilkan()
    {
        return "Menampilkan Data Karyawan";
    }
}

$team1 = new Perusahaan();
$team1->nama = "Ajul";
$team1->jabatan = "Manager";
$team1->gaji = 5000000;
echo "Nama : " . $team1->nama . "<br>";
echo "Jabatan : " . $team1->jabatan . "<br>";
echo "Gaji karyawan : " . $team1->gaji . "<br>";
echo "Gawean karyawan : " . $team1->Menampilkan() . "<br>";

if ($team1->jabatan == "Manager") {
    $gaji_tambahan = $team1->gaji * 0.05;
    echo "Bonus : $gaji_tambahan <br>";
    $total = $gaji_tambahan + $team1->gaji;
    echo "Total Gaji : $total <hr>";
} else {
    echo "Anda bukan <b>Manager</b> jadi  tidak mendapatkan bonus <hr>";
}

$team2 = new Perusahaan();
$team2->nama = "Voiz";
$team2->jabatan = "Manager";
$team2->gaji = 5000000;
echo "Nama : " . $team2->nama . "<br>";
echo "Jabatan : " . $team2->jabatan . "<br>";
echo "Gaji karyawan : " . $team2->gaji . "<br>";
echo "Gawean karyawan : " . $team2->Memodifikasi() . "<br>";

if ($team2->jabatan == "Manager") {
    $gaji_tambahan = $team2->gaji * 0.05;
    echo "Bonus : $gaji_tambahan <br>";
    $total = $gaji_tambahan + $team2->gaji;
    echo "Total Gaji : $total <hr>";
} else {
    echo "Anda bukan <b>Manager</b> jadi  tidak mendapatkan bonus <hr>";
}

$team3 = new Perusahaan();
$team3->nama = "Epin";
$team3->jabatan = "Sales";
$team3->gaji = 5000000;
echo "Nama : " . $team3->nama . "<br>";
echo "Jabatan : " . $team3->jabatan . "<br>";
echo "Gaji karyawan : " . $team3->gaji . "<br>";
echo "Gawean karyawan : " . $team3->Memodifikasi() . "<br>";

if ($team3->jabatan == "Manager") {
    $gaji_tambahan = $team3->gaji * 0.05;
    echo "Bonus : $gaji_tambahan <br>";
    $total = $gaji_tambahan + $team3->gaji;
    echo "Total Gaji : $total <hr>";
} else {
    echo "Anda bukan <b>Manager</b> jadi tidak mendapatkan bonus <hr>";
}