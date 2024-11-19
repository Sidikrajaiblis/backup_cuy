<?php
require_once("connect.php");
$results = mysqli_query($mysqli, "SELECT * FROM kantin");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Kasir Toko</title>
    <form action="" method="post">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section>
        <h3 class="text-center mt-3">Kantin Kita</h3>
      </section>

      <section>
        <div class="row">
            <div class="col mt-3">
                <div class="card" style="width: 10rem; margin-left: 50px;">
                    <img src="nasi goreng.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"><b>Nasi goreng</b></p>
                    </div>
                  </div>
            </div>
            <div class="col-md-2 mt-3">
                <div class="card" style="width: 10rem;">
                    <img src="mie goreng.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"><b>Mie goreng</b></p>
                    </div>
                  </div>
            </div>
            <div class="col-md-2 mt-3">
                <div class="card" style="width: 10rem; margin-left: -30px;">
                    <img src="mie ayam.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"><b>Mie Ayam</b></p>
                    </div>
                  </div>
            </div>
            <div class="col">
              <div class="row">
                <div class="col text-center">
                  <h3>Tambahkan Pesan</h3>
                </div>
                <div class="col">
                  <input type="text" name="nama" id="" placeholder="Masukan Nama" class="form mt-3">
                  <select name="menu" id="" class="form mt-2">
                    <option value="menu">-Menu-</option>
                    <option value="nasi goreng">Nasi goreng</option>
                    <option value="mie goreng">Mie goreng</option>
                    <option value="mie ayam">Mie ayam</option>
                    <option value="jus buah">Jus Buah</option>
                    <option value="teh botol">Teh Botol</option>
                    <option value="air mineral">Air Mineral</option>
                  </select>
                  <input type="number" name="porsi" id="" placeholder="Porsi pesanan" class="form mt-2">
                  <input type="submit" name="save" value="proses" class="mt-2">
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 mt-3">
                <div class="card" style="width: 10rem; margin-left: 50px;">
                    <img src="jus.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"><b>Jus Buah</b></p>
                    </div>
                  </div>
            </div>
            <div class="col-md-2 mt-3">
                <div class="card" style="width: 10rem; margin-left: 25px">
                    <img src="teh.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"><b>Teh Botol</b></p>
                    </div>
                  </div>
            </div>
            <div class="col-md-2 mt-3">
                <div class="card" style="width: 10rem;">
                    <img src="air.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"><b>Air Mineral</b></p>
                    </div>
                  </div>
            </div>
            <?php
            if (isset($_POST['save'])) {
              $nama=$_POST['nama'];
              $menu=$_POST['menu'];
              $porsi=$_POST['porsi'];

              $result = mysqli_query($mysqli, "INSERT INTO kantin(nama, menu, porsi) VALUES('$nama','$menu','$porsi')");
              ?>
              <script>
                alert("Berhasil!");
                window.location.href = "index.php";
              </script>
              <?php
            }
            ?>
            <div class="col">
              <div class="row">
                <div class="col text-center">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Menu</th>
      <th scope="col">Porsi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody> 
    <?php
    
    while ($row=mysqli_fetch_assoc($results)) {

    ?>
    <tr>
      <td><?php echo $row['nama']; ?></td>
      <td><?php echo $row['menu']; ?></td>
      <td><?php echo $row['porsi']; ?></td>
      <td>
  <?php echo "<form action='edit.php' method='post'>"; ?>
  <?php echo "<input type='hidden' name='id' value='" . $row['id'] . "'>"; ?>
  <?php echo "<button type='submit' name='edit' class='btn btn-link'>Edit</button>"; ?>
  <?php echo "</form>"; ?>
  
  <?php echo "<form action='delete.php' method='post'>"; ?>
  <?php echo "<input type='hidden' name='id' value='" . $row['id'] . "'>"; ?>
  <?php echo "<button type='submit' name='delete' class='btn btn-link'>Delete</button>"; ?>
  <?php echo "</form>"; ?>
</td>

    </tr>
    <?php }?>
  </tbody>
</table>
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
  </form>
</html>