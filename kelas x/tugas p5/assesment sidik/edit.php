<?php
require_once("koneksi.php");

// Periksa apakah $_POST['id'] telah diberikan sebelum memprosesnya
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    if(isset($_POST['save']) && isset($_POST['nama']) && isset($_POST['tugas']) && isset($_POST['waktu'])) {
        $nama = $_POST['nama'];
        $tugas = $_POST['tugas'];
        $waktu = $_POST['waktu'];
        
        // Validasi data yang diterima
        if(empty($nama) || empty($tugas) || empty($waktu)) {
            echo "Harap lengkapi semua field.";
        } else {
            $query = "UPDATE data SET nama = ?, tugas = ?, waktu = ? WHERE id = ?";
            $statement = $mysqli->prepare($query);
            $statement->bind_param('sssi', $nama, $tugas, $waktu, $id);
            
            if($statement->execute()) {
                echo "<script>
                alert('Data berhasil diperbarui');
                window.location.href = 'data.php';
              </script>";
            } else {
                echo "<h1>Gagal memperbarui data. Silakan coba lagi.</h1>";
            }
        }
    } else {
        // Form edit
        $query = "SELECT * FROM data WHERE id = ?";
        $statement = $mysqli->prepare($query);
        $statement->bind_param('i', $id);
        $statement->execute();
        $result = $statement->get_result();
        $row = $result->fetch_assoc();
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

    <title>Edit Data</title>
</head>
<body class="vh-100 gradient-custom-2">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <h3 style="font-size: 2em;"><b>Task List</b></h3>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"><b>Beranda</b></a>
                </li><li class="nav-item">
                    <a class="nav-link active" href="data.php"><b>Daftar</b></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-10">
            <div class="card mask-custom">
                <div class="card-body p-4 text-white">
                    <div class="text-center pt-3 pb-2">
                        <img src="img/bocchi.gif" style="border-radius: 40%;" alt="Check" width="100">
                        <h2 class="my-4">Edit Data</h2>
                    </div>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tugas" class="form-label">Tugas</label>
                            <select class="form-select" id="tugas" name="tugas">
                                <option value="manager" <?php if($row['tugas'] == 'manager') echo 'selected'; ?>>Manager</option>
                                <option value="staf" <?php if($row['tugas'] == 'staf') echo 'selected'; ?>>Staf</option>
                                <option value="karyawan" <?php if($row['tugas'] == 'karyawan') echo 'selected'; ?>>Karyawan</option>
                                <option value="pegawai" <?php if($row['tugas'] == 'pegawai') echo 'selected'; ?>>Pegawai</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="waktu" class="form-label">Waktu</label>
                            <input type="time" class="form-control" id="waktu" name="waktu" value="<?php echo $row['waktu']; ?>">
                        </div>
                        <button type="submit" name="save" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
    }
} else {
    echo "ID data tidak diberikan.";
}
?>
