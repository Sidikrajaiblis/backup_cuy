<?php

include_once("koneksi.php");
if(isset($_POST['register'])){
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $fek = mysqli_query($mysqli, "SELECT * FROM data WHERE email='$email'");
    $data = mysqli_num_rows($fek);

    if($data > 0){?>
        <b><?php echo "Email sudah terdaftar , silahkan gunakan email lain.";?></b>
        <form action="register.php">
            <button type="submit">Back</button>
        </form>
        <?php
    } else {
        $result = mysqli_query($mysqli, "INSERT INTO data(nama, email, password) VALUES('$nama','$email','$pass')");
        echo "Registrasi Berhasil";?>
        <form action="index.php">
            <button type="submit">Login</button>
        </form>
        <?php
    }
}