<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
<form action='home.php'>
  
<?php

include_once("koneksi.php");
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $result = mysqli_query($mysqli, "SELECT * FROM logis WHERE email='$email'");
    $data = mysqli_fetch_array($result);
    if($data == ""){
        $emailril = "";
    } else {
        $emailril = $data['email'];
    }

    $passs = mysqli_query($mysqli, "SELECT password FROM logis WHERE password='$pass'");
    $passzz = mysqli_fetch_array($passs);
    if($passzz == ""){
        $passril = "";
    } else {
        $passril = $passzz['password'];
    }
    
    if($email == $emailril){
        if($pass == $passril){  
            echo "
            <table class='login-container'>
                <tr>
                    <td>Login berhasil,</td>
                </tr>
                <tr>
                <td>Masuk ke beranda?</td>
                </tr>
                <tr>
                <td>
                <button type='submit'>Beranda</button>
                </td>
                <tr>
            </table>
        </form>";
        } else {
            echo "<h1>Password salah!!</h1>";
        }
    } else {
        echo "<h1>email salah !!</h1>";
    }
}

?>
  
  </body>
</html>