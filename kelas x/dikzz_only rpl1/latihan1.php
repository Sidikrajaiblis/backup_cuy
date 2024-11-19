<?php

class admin 
{
    public $nama;
    public $id;
    public $no;

    public function __construct($a, $b, $c)
    {
        $this->nama = $a;
        $this->id = $b;
        $this->no = $c;
    }

    public function cek()
    {
        return "cek pembayaran";
    }

    public function men()
    {
        return "menerima pembayaran";
    }

    public function but()
    {
        return "buat laporan";
    }
}

class siswa 
{
    public $nama_siswa;
    public $id_siswa;
    public $kelas;
    
    public function __construct($a, $b, $c)
    {
        $this->nama_siswa = $a;
        $this->id_siswa = $b;
        $this->kelas = $c;
    }
}

class pembayaran_spp
{
    public $biaya;
    Public $total;

    public function __construct($a, $b)
    {
        $this->biaya = $a;
        $this->total = $b;
    }  
}

$admin1 = new admin("udin", 1945, "089xx");
echo "nama siswa :" . $admin1->nama . "<br>";
echo "id siswa :" . $admin1->id . "<br>";
echo "bukti pembayaran :" . $admin1->cek() . "<br><hr>";

$admin2 = new admin("udin", 1945, "089xx");
echo "nama siswa :" . $admin2->nama . "<br>";
echo "id siswa :" . $admin2->id . "<br>";
echo "bukti pembayaran :" . $admin2->men() . "<br><hr>";

$admin3 = new admin("udin", 1945, "089xx");
echo "nama siswa :" . $admin3->nama . "<br>";
echo "id siswa :" . $admin3->id . "<br>";
echo "bukti pembayaran :" . $admin3->but() . "<br><hr>";