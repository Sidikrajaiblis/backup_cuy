<?php
require_once("connect.php");

// Periksa apakah $_POST['id'] telah diberikan sebelum memprosesnya
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Periksa apakah data nama, menu, dan porsi telah diberikan
    if(isset($_POST['nama']) && isset($_POST['menu']) && isset($_POST['porsi'])) {
        $nama = $_POST['nama'];
        $menu = $_POST['menu'];
        $porsi = $_POST['porsi'];
        
        // Validasi data yang diterima
        if(empty($nama) || empty($menu) || empty($porsi)) {
            echo "Harap lengkapi semua field.";
        } else {
            $query = "UPDATE kantin SET nama = ?, menu = ?, porsi = ? WHERE id = ?";
            $statement = $mysqli->prepare($query);
            $statement->bind_param('ssii', $nama, $menu, $porsi, $id);
            
            if($statement->execute()) {
                echo "<h1>Data berhasil diperbarui.</h1>";
            } else {
                echo "<h1>Gagal memperbarui data. Silakan coba lagi.</h1>";
            }
        }
    } else {
        echo "<h1>Edit Pesanan Anda.</h1>";
    }

    // Periksa apakah $_POST['id'] telah diberikan sebelum memprosesnya
    $id = $_POST['id'];
    $query = "SELECT * FROM kantin WHERE id = ?";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <title>Hello, world!</title>
  </head>
  <body>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>">
        <select name="menu">
            <option value="nasi goreng" <?php if($row['menu'] == 'nasi goreng') echo 'selected'; ?>>Nasi goreng</option>
            <option value="mie goreng" <?php if($row['menu'] == 'mie goreng') echo 'selected'; ?>>Mie goreng</option>
            <option value="mie ayam" <?php if($row['menu'] == 'mie ayam') echo 'selected'; ?>>Mie ayam</option>
            <option value="jus buah" <?php if($row['menu'] == 'jus buah') echo 'selected'; ?>>Jus Buah</option>
            <option value="teh botol" <?php if($row['menu'] == 'teh botol') echo 'selected'; ?>>Teh Botol</option>
            <option value="air mineral" <?php if($row['menu'] == 'air mineral') echo 'selected'; ?>>Air Mineral</option>
        </select>
        <input type="number" name="porsi" value="<?php echo $row['porsi']; ?>"><br><br>
        <input type="submit" name="save" value="Update"  class="btn btn-info">
    </form>

<?php
} else {
    echo "ID data tidak diberikan.";
}
?>
<a href="index.php" class="btn btn-info">Kembali</a>


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