<?php
    $nis = isset($_GET['nis']) ? $_GET['nis'] : array();
    $nama = isset($_GET['nama']) ? $_GET['nama'] : array();
    $kelas = isset($_GET['kelas']) ? $_GET['kelas'] : array();
    $bulan = isset($_GET['bulan']) ? $_GET['bulan'] : array();
    $pts = isset($_GET['pts']) ? $_GET['pts'] : array();
    $pas = isset($_GET['pas']) ? $_GET['pas'] : array();
    $kehadiran = isset($_GET['kehadiran']) ? $_GET['kehadiran'] : array();
    if (isset($_POST['proses'])) {
      //proses data
      $nis = $_POST['nis'];
      $nama = $_POST['nama'];
      $kelas = $_POST['kelas'];
      $bulan = $_POST['bulan'];
      $pts = $_POST['pts'];
      $pas = $_POST['pas'];
      $kehadiran = $_POST['kehadiran'];

      function hitungRapot($bulan, $pts, $pas, $kehadiran) {
        return ($bulan * 0.35) + ($pts * 0.15) + ($pas * 0.20) + ($kehadiran * 0.30);
      }
      function Grade($nilairapot) {
        if ($nilairapot >= 85) {
          return "A";
        }
        elseif ($nilairapot >= 70) {
          return "B";
        }
        elseif ($nilairapot >= 60) {
          return "C";
        }
        elseif ($nilairapot >= 50) {
          return "D";
        }
        elseif ($nilairapot >= 40) {
          return "E";
        }
      }
    }
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data</title>
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
        <li class="nav-item">
          <a class="nav-link" href="">Data Nilai</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>


<section class="jumbotron text-center p-4">
  <h2>Data Nilai Pelajaran Produktif</h2>
  <div class="container">
  <table class="table"style="width: 70%" align="center">

  <body>
    <tr>
      <td colspan="9"></td>
    </tr>
    <tr>
      <td scope="col">No</td>
      <td scope="col">Nama</td>
      <td scope="col">Kelas</td>
      <td scope="col">Nilai Bulanan (35%)</td>
      <td scope="col">Nilai PTS (15%)</td>
      <td scope="col">Nilai PAS (20%)</td>
      <td scope="col">Nilai Kehadiran (30%)</td>
      <td scope="col">Nilai Raport</td>
      <td scope="col">Grade</td>
    </tr>
    <?php
    for ($a=0; $a < count($nis); $a++) { 
      $nilairapot = hitungRapot($bulan[$a], $pts[$a], $pas[$a], $kehadiran[$a]);
      $grade = Grade($nilairapot)
      ?>
      <tr>
        <th scope="row"><?php echo $nis[$a] ?></th>
        <td><?php echo $nama[$a] ?></td>
        <td><?php echo $kelas[$a] ?></td>
        <td><?php echo $bulan[$a] ?></td>
        <td><?php echo $pts[$a] ?></td>
        <td><?php echo $pas[$a] ?></td>
        <td><?php echo $kehadiran[$a] ?></td>
        <td><?php echo $nilairapot ?></td>
        <td><?php echo $grade[$a] ?></td>
      </tr>
    <?php
    }
    ?>
  </body>
  </div>
  </table>
</section>



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