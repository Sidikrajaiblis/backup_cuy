<?php

include_once("koneksi.php");
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $result = mysqli_query($mysqli, "SELECT * FROM data WHERE email='$email'");
    $data = mysqli_fetch_array($result);
    if($data == ""){
        $emailril = "";
    } else {
        $emailril = $data['email'];
    }

    $passs = mysqli_query($mysqli, "SELECT password FROM data WHERE password='$pass'");
    $passzz = mysqli_fetch_array($passs);
    if($passzz == ""){
        $passril = "";
    } else {
        $passril = $passzz['password'];
    }
    
    if($email == $emailril){
        if($pass == $passril){
            echo "Login Berhasil";
        } else {
            echo "Password salah!!";
        }
    } else {
        echo "email salah !!";
    }
}