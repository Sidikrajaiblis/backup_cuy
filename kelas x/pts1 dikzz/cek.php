<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<?php

include_once("koneksi.php");
if(isset($_POST['register'])){
    $nama = $_POST['name'];
    $kelas = $_POST['kelas'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $fek = mysqli_query($mysqli, "SELECT * FROM logis WHERE email='$email'");
    $data = mysqli_num_rows($fek);

    if($data > 0){?>
        <b><?php echo "<h1>Email sudah terdaftar , silahkan gunakan email lain.</h1>";?></b>
        <form action="register.php">
            <button type="submit"><h1>Back</h1></button>
        </form>
        <?php
    } else {
        $result = mysqli_query($mysqli, "INSERT INTO logis(name,kelas,email,password) VALUES('$nama','$kelas','$email','$pass')");
        echo "<table class='login-container'>
        <tr>
            <td>Registrasi berhasil :)</td>
        </tr>
    </table>
</form>";?>
        <form action="index.php">
            <button type="submit">Login</button>
        </form>
        <?php
    }
}
?>
</body>
</html>