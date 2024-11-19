<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Asal Sekolah</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        
        <div class="container shadow-lg mt-5">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="card-title">Informasi</h5>
                    <p class="card-text">Apabila anda telah melakukan pendaftaran, silahkan klik tombol "Cek Status Pendaftaran"</p>
                    <div class="grip-flex gap-3">
                        <a href="#" class="btn btn-primary">Cek Status Pendaftaran</a>
                        <a href="#" class="btn btn-warning">Kembali ke Home</a>
                        <a href="#" class="btn btn-danger">Situs Resmi SMK ASSALAAM</a>
                    </div>
                </div>
            </div>
        </div>

<?php

if (isset($_POST['proses'])) {
    
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
    $nomorhp = $_POST['nomorhp'];
    $email = $_POST['email'];

    $provinsi = $_POST['provinsi'];
    $kabkota = $_POST['kabkota'];
    $kecamatan = $_POST['kecamatan'];
    $desa = $_POST['desa'];
    $alamat = $_POST['alamat'];
    $kodepos = $_POST['kodepos'];
    
    $namasekolah = $_POST['namasekolah'];
    $alamatsekolah = $_POST['alamatsekolah'];
    
    $status = $_POST['status'];
    $namaorangtua = $_POST['namaorangtua'];
    $pekerjaanorangtua = $_POST['pekerjaanorangtua'];
    $hporangtua = $_POST['hporangtua'];
    $alamatorangtua = $_POST['alamatorangtua'];

}

class data{

    public function data_diri($nama,$jurusan,$jeniskelamin,$tempatlahir,$tanggallahir,$nomorhp,$email) {
        echo "<center>";
        echo "<div class='container shadow-lg mt-5'>
            <div class='card border-0'>
            <div class='card-body'>
            <b class='mb-4'>Data Diri Siswa</b>";
        echo "<table width='30%'>";
        echo "<tr><td> Nama Siswa </td><td> : $nama </td><tr>";
        echo "<tr><td> Jurusan </td><td> : $jurusan <br>";
        echo "<tr><td> Jenis Kelamin </td><td> : $jeniskelamin </td><tr>";
        echo "<tr><td> Tempat Lahir </td><td> : $tempatlahir </td><tr>";
        echo "<tr><td> Tanggal Lahir </td><td> : $tanggallahir </td><tr>";
        echo "<tr><td> Nomor Hp </td><td> : $nomorhp </td><tr>";
        echo "<tr><td> Email </td><td> : $email </td><tr>";
        echo "</table>";
        echo "</div></div></div>";
        echo "</center>";

    }

    public function alamat($provinsi,$kabkota,$kecamatan,$desa,$alamat,$kodepos) {
        echo "<center>";
        echo "<div class='container shadow-lg mt-5'>
            <div class='card border-0'>
            <div class='card-body'>
            <b class='mb-4'>Alamat Siswa</b>";
        echo "<table width='50%'>";
        echo "<tr><td> Provinsi </td><td> : $provinsi </td><tr>";
        echo "<tr><td> Kab/Kota </td><td> : $kabkota </td><tr>";
        echo "<tr><td> Kecamatan </td><td> : $kecamatan </td><tr> ";
        echo "<tr><td> Desa </td><td> : $desa </td><tr>";
        echo "<tr><td> Alamat </td><td> : $alamat </td><tr> ";
        echo "<tr><td> Kode Pos </td><td> : $kodepos </td><tr>";
        echo "</table>";
        echo "</div></div></div>";
        echo "</center>";

    }

    public function asalsekolah($namasekolah,$alamatsekolah){
        echo "<center>";
        echo "<div class='container shadow-lg mt-5'>
            <div class='card border-0'>
            <div class='card-body'>
            <b class='mb-4'>Asal Sekolah</b>";
        echo "<table width='30%'>";
        echo "<tr><td> Nama Sekolah </td><td> : $namasekolah </td><tr>";
        echo "<tr><td> Alamat Sekolah </td><td> : $alamatsekolah </td><tr>";
        echo "</table>";
        echo "</div></div></div>";
        echo "</center>";

    }

    public function dataorangtua($status,$namaorangtua,$pekerjaanorangtua,$hporangtua,$alamatorangtua) {
        echo "<center>";
        echo "<div class='container shadow-lg mt-5'>
            <div class='card border-0'>
            <div class='card-body'>
            <b class='mb-4'>Data Orang Tua</b>";
        echo "<table width='50%'>";
        echo "<tr><td> Orang Tua </td><td> : $status </td><tr>";
        echo "<tr><td> Nama Orang Tua </td><td> : $namaorangtua </td><tr>";
        echo "<tr><td> Pekerjaan Orang Tua </td><td> : $pekerjaanorangtua </td><tr>";
        echo "<tr><td> Nomor Hp Orang Tua </td><td> : $hporangtua </td><tr>";
        echo "<tr><td> Alamat Orang Tua </td><td> : $alamatorangtua </td><tr>";
        echo "</table>";
        echo "</div></div></div>";
        echo "</center>";
    }

}

$cetak = new data();
$cetak->data_diri($nama,$jurusan,$jeniskelamin,$tempatlahir,$tanggallahir,$nomorhp,$email);
$cetak->alamat($provinsi,$kabkota,$kecamatan,$desa,$alamat,$kodepos);
$cetak->asalsekolah($namasekolah,$alamatsekolah);
$cetak->dataorangtua($status,$namaorangtua,$pekerjaanorangtua,$hporangtua,$alamatorangtua);


?>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>