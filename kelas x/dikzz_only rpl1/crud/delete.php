<?php
//cek file koneksi
include_once("index.php");

//mengambil data berdasarkan id
$id = $_GET['id'];

//menghapus data berdasarkan id
$result = mysqli_query($mysqli, "DELETE FROM user WHERE id = $id");

header("location:index.php")
?>