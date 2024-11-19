<?php
//cek file koneksi
include_once("connect.php");
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $result = mysqli_query($mysqli, "DELETE FROM kantin WHERE id = $id");
    header("location:index.php");
}

?>