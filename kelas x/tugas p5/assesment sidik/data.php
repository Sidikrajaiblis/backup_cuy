<?php
require_once("koneksi.php");

class Task {
    private $id;
    private $nama;
    private $tugas;
    private $waktu;

    public function __construct($id, $nama, $tugas, $waktu) {
        $this->id = $id;
        $this->nama = $nama;
        $this->tugas = $tugas;
        $this->waktu = $waktu;
    }

    public function getId() {
        return $this->id;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getTugas() {
        return $this->tugas;
    }

    public function getWaktu() {
        return $this->waktu;
    }
}

$results = mysqli_query($mysqli, "SELECT * FROM data ORDER BY id DESC");
$tasks = [];

while ($row = mysqli_fetch_assoc($results)) {
    $task = new Task($row['id'], $row['nama'], $row['tugas'], $row['waktu']);
    $tasks[] = $task;
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!------ Include the above in your HEAD tag ---------->

    <title>list</title>
    <form action="" method="post">
</head>
<body class="vh-100 gradient-custom-2">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <h3 style="font-size: 2em;"><b>Task List</b></h3>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php"><b>Beranda</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="data.php"><b>Daftar</b></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section id="list">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-10">

                <div class="card mask-custom">
                    <div class="card-body p-4 text-white">

                        <div class="text-center pt-3 pb-2">
                            <img src="img/bocchi.gif" style="border-radius: 40%;"
                                 alt="Check" width="100">
                            <h2 class="my-4">Daftar Tugas</h2>
                        </div>

                        <table class="table text-white mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Tugas</th>
                                <th scope="col">Waktu Hadir</th>
                                <th scope="col">Tindakan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($tasks as $task) { ?>
                                <tr class="fw-normal">
                                    <th>
                                        <span class="ms-2"><?php echo $task->getNama(); ?></span>
                                    </th>
                                    <td>
                                        <span><?php echo $task->getTugas(); ?></span>
                                    </td>
                                    <td>
                                        <h6 class="mb-0"><span><?php echo $task->getWaktu(); ?></span></h6>
                                    </td>
                                    <td>
                                        <form action='edit.php' method='post'>
                                            <input type='hidden' name='id' value='<?php echo $task->getId(); ?>'>
                                            <button type='submit' name='edit' class='btn btn-link'><b class="bi bi-pencil-square btn-outline-info"> Edit</b></button>
                                        </form>
                                        <form action='delete.php' method='post'>
                                            <input type='hidden' name='id' value='<?php echo $task->getId(); ?>'>
                                            <button type='submit' name='delete' class='btn btn-link'><b class="bi bi-trash btn-outline-danger"> Delete</b></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container my-5">

<!-- Footer -->
<footer
        class="text-center text-lg-start text-white"
        style="background-color: #1c2331"
        >
  <!-- Section: Social media -->
  <section id="footer"
           class="d-flex justify-content-between p-4"
           style="background-color: #6351ce"
           >
    <!-- Left -->
    <div class="me-5">
      <span>Akhir Halaman</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold">Sidiciart</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
            Ini adalah website kecil buatan developer yang masih belajar,
            dan belum mahir dalam membuat sebuah website
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Products</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
            <a href="#!" class="text-white">MDBootstrap</a>
          </p>
          <p>
            <a href="#!" class="text-white">MDWordPress</a>
          </p>
          <p>
            <a href="#!" class="text-white">BrandFlow</a>
          </p>
          <p>
            <a href="#!" class="text-white">Bootstrap Angular</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Useful links</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
            <a href="#!" class="text-white">Your Account</a>
          </p>
          <p>
            <a href="#!" class="text-white">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!" class="text-white">Shipping Rates</a>
          </p>
          <p>
            <a href="#!" class="text-white">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Contact</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div
       class="text-center p-3"
       style="background-color: rgba(0, 0, 0, 0.2)"
       >
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/"
       >@Sidiciart</a
      >
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</div>
<!-- Optional JavaScript; choose one of the two! -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
-->
</body>
</form>
</html>