<?php
//cek file koneksi
include_once("koneksi.php");
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $result = mysqli_query($mysqli, "DELETE FROM data WHERE id = $id");
    header("location:data.php");
}

?>