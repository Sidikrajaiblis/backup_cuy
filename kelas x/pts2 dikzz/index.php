<?php
include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM kedai ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai coffe</title>
</head>
<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td colspan="2" align="center">
                <h1>Kedai Coffe</h1>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <h2>Menu :</h2>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>Ammericano :</h3>
            </td>
            <td>
                RP.25,000
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>Kopisusu :</h3>
            </td>
            <td>
                RP.30,000
            </td>
        </tr> 
        <tr>
            <td align="center">
                <h3>Vietnam drip :</h3>
            </td>
            <td>
                RP.40,000
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><h2>Silahkan Masukan Pesanan</h2></td>
        </tr>
        <tr>
            <td align="center">
               <h3> Masukan Pesanan :</h3>
            </td>
            <td>
                <input type="text" name="pesanan" id="">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit"><h3>Pesan</h3></button></td>
        </tr>
    </table>
</body>
</html>