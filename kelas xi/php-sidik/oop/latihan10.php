<?php

class gaji{

public $gaji;
public $tunjangan;
public $total_potongan;

    public function jabatan($nama,$jabatan){
        if ($jabatan == "direktur") {
            $this->gaji = 10000000;
        }elseif ($jabatan == "manager") {
            $this->gaji = 7500000;
        }elseif ($jabatan == "karyawan") {
            $this->gaji = 5000000;
        }elseif ($jabatan == "ob") {
            $this->gaji = 2500000;
        }else {
            $this->gaji = 0;
        }

        echo "<center><h3>Penggajihan Karyawan</h3></center>";
        echo "<b>Gaji Pokok</b><br><br>";
        echo "Nama Karyawan : $nama <br>";
        echo "Jabatan : $jabatan <br>";
        echo "Gaji Pokok : $this->gaji <br>";
        echo "<hr>";
    }
    public function tunjangan($pendidikan){
        if ($pendidikan == "s1") {
            $this->tunjangan = 1000000;
        }elseif ($pendidikan == "sma") {
            $this->tunjangan = 750000;
        }elseif ($pendidikan == "smp") {
            $this->tunjangan = 500000;
        }elseif ($pendidikan == "sd") {
            $this->tunjangan = 250000;
        }

        echo "<b>Tunjangan</b><br><br>";
        echo "Pendididkan : $pendidikan <br>";
        echo "Tunjangan Pendididkan : $this->tunjangan <br>";  
        echo "<hr>";      
    }
    public function potongan($tabungan,$pinjaman){
        $this->total_potongan = $tabungan + $pinjaman;

        echo "<b>Potongan</b><br><br>";
        echo "Tabungan : $tabungan <br>";
        echo "Pinjaman : $pinjaman <br>";
        echo "Total Potongan : $this->total_potongan <br>";
        echo "<hr>";    
    }
    public function total_gaji_bersih(){
        $total = $this->gaji + $this->tunjangan - $this->total_potongan;

        echo "<b>Total Gaji Bersih</b><br><br>";
        echo "Total Gaji Bersih : $total <br>";  
        echo "<hr>";      
    }
}

$cetak = new gaji();

echo $cetak-> jabatan("sidik","direktur");
echo $cetak-> tunjangan("s1");
echo $cetak-> potongan(200000,50000);
echo $cetak-> total_gaji_bersih();

?>