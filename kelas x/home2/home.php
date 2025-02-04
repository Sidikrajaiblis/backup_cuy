<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>home</title>
  </head>
  <body id="home" style="height: 900px;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="logo.png" alt="" width="100px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="home2.php">Soal 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="data.php">Data Nilai</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        <!--jumbotron-->
        <div class="jumbotron text-center mt-1 p-5">
          <img src="logo.png" alt="fotoku" width="200px" class="">
          <h1>SELAMAT DATANG</h1>
          <h2><b>Aplikasi Penilaian Mata Pelajaran Produktif</b></h2>
        </div>
        <!--akhir navbar-->
        <section>
            <div class="row">
                <div class="col" align="center">
                    <div class="card" style="width: 440px;" align="left">
                        <div class="card-header">
                            <h5><b>Kriteria Penilaian Mata Pelajaran Produktif</b></h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Nilai Bulanan:35% <br><br>    
                                  Nilai PTS:15% <br><br>
                                  Nilai PAS:20% <br><br>
                                  Nilai Kehadiran:30% <br><br>
                                  <b>Nilai Raport:Bulanan + PTS + PAS + Kehadiran</b>
                                </li>
                              </ul>
                        </div>
                      </div>
                </div>
            </div>
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