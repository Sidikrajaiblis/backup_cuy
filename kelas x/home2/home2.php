<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Latihan</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="logo.png" alt="" width="100"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php">Soal 1</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section>
  <div class="container text-center mt-5 pt-5">
    <div class="row">
      <div class="col">
        <img src="logo.png" alt="" style="width: 30%;">
      </div>
      
    </div>
    <div class="row">
      <div class="col">
        <h2 class="display-5"><b>SELAMAT DATANG</b></h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h2 class="display-6"><b> Penilaian Mata Pelajaran Produktif</b></h2>
      </div>
   
  </div>
</section>
<br>
<form action="" method="post">
<section>
  <div class="row pt-5">
    <div class="col" align="center">
      <div class="card" style="width: 450px;" align="left">
  <div class="card-header">
   Masukan Jumlah Siswa
  </div> 
  <div class="card-body">Jumlah <br>
  <p class="d-flex"><input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="jumlah"><br>
  <p align="center"><button name="simpan" style="border-radius: 5px; color: white;" class="btn btn-primary">simpan</button></p>
  </div>
</div>
    </div>
  </div>

</section>
</form>

<?php
$jumlah = isset($_POST['jumlah'])?
$_POST['jumlah'] : 0;

if ($jumlah > 0) {
    for ($h=1; $h <= $jumlah ; $h++) { ?>
    <form action="data.php" method="post">
       <section>
  <div class="row pt-5">
    <div class="col" align="center">
      <div class="card" style="width: 450px;" align="left">
  <div class="card-header">
   Data Siswa Ke - <?php echo"$h"?>
  </div>
  <div class="card-body">
   Nis <br>
  <p class="d-flex"><input type="text" name="nis[]" style="width: 100%;" placeholder="No" class="form-control"></p>
   Nama <br>
  <p class="d-flex"><input type="text" name="nama[]" style="width: 100%;" placeholder="Nama" class="form-control"></p>
   Kelas <br>
  <select name="kelas[]" id="" style="width: 100%">
  <option value="">Pilih Kelas</option>
    <option value="X RPL 1"  >
        X RPL 1
    </option>
    <option value="X RPL 2" >
        X RPL 2
    </option>
    <option value="X RPL 3" >
        X RPL 3
    </option>
  </select>
  <p><h2><center><i>Nilai Produktif</i></center></h2></p>

  Nilai Bulanan <b><i>(35%)</i></b> <br>
  <p class="d-flex"><input type="number" name="bulan[]" placeholder="Nilai Bulanan" style="width: 100%;" class="form-control"></p>
  Nilai PTS <b><i>(15%)</i></b> <br>
  <p class="d-flex"><input type="text" name="pts[]" placeholder="Nilai PTS" style="width: 100%;" class="form-control"></p>
  Nilai PAS <b><i>(20%)</i></b> <br>
  <p class="d-flex"><input type="text" name="pas[]" placeholder="Nilai PAS" style="width: 100%;" class="form-control"></p>
  Nilai Kehadiran <b><i>(30%)</i></b> <br>
  <p class="d-flex"><input type="text" name="kehadiran[]" placeholder="Nilai Kehadiran" style="width: 100%;" class="form-control"></p>
  </div>
</div>
    </div>
  </div>

</section>

        <?php
    }
    ?>
      <p align="center"><button name="proses" style="border-radius: 5px; color: white;" class="btn btn-primary">simpan</button></p></form>
    <?php

}
?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>