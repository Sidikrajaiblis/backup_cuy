<?php

class ppdb{
    public function data_diri($jurusan,$nama,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$nomor_hp,$email){
        echo "<b>Data Diri Calon Pendaftar</b> <br>";
        echo "Jurusan : $jurusan <br>";
        echo "Nama Lengkap : $nama <br>";
        echo "Jenis Kelamin : $jenis_kelamin <br>";
        echo "Tempat Lahir : $tempat_lahir <br>";
        echo "Tanggal Lahir : $tanggal_lahir <br>";
        echo "Nomor Hp : $nomor_hp <br>";
        echo "Email : $email <br>";
        echo "<hr>";
    }
    public function alamat($provinsi,$kota,$kecamatan,$desa,$alamat,$kode_pos){
        echo "<b>Alamat Calon Pendaftar</b> <br>";
        echo "Provinsi : $provinsi <br>";
        echo "Kab / kota : $kota <br>";
        echo "Kecamatan : $kecamatan <br>";
        echo "Desa / Kelurahan : $desa <br>";
        echo "Alamat : $alamat <br>";
        echo "Kode Pos : $kode_pos <br>";
        echo "<hr>";
    }
    public function asal_sekolah($nama_asal,$alamat_asal){
        echo "<b>Data Asal Sekolah</b> <br>";
        echo "Nama Asal Sekolah : $nama_asal <br>";
        echo "Alamat Sekolah : $alamat_asal <br>";   
        echo "<hr>";
    }
    public function data_ortu($nama_ortu,$pekerjaan,$nomorhp,$alamat){
        echo "<b>Data Orang Tua </b> <br>";
        echo "Nama Lengkap Ayah / Ibu / Wali : $nama_ortu <br>";
        echo "Pekerjaan Ayah / Ibu / Wali : $pekerjaan <br>";
        echo "Nomor HP yang bisa dihubungi : $nomorhp <br>";
        echo "Alamat Lengkap : $alamat <br>";
        echo "<hr>";
    }
}

$cetak = new ppdb();

echo $cetak->data_diri("RPL","sidik","Laki-laki","Garut","03 July 2008",123,"sidik@email.com");
echo $cetak->alamat("jawa barat","bandung","baleendah","jati mekar","BMI",40111);
echo $cetak->asal_sekolah("SMP Fauzaniyyah","Garut");
echo $cetak->data_ortu("Asep","Karyawan","123","Bojong Malaka Indah");

?>