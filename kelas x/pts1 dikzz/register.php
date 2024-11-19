<?php

include_once("koneksi.php");

?>
<html>
    <head>
        <title>Register</title>
    </head>
    <link rel="stylesheet" href="style.css">
    <body class="body">
        <form action="cek.php" method="post">
            <table class="login-container">
                <tr>
                <td colspan=2><h2>Register</h2></td>
                </tr><tr>
                    <th>Nama : </th>
                    <td><input type="text" name="name" id="" required></td>
                </tr>
                <tr>
                    <th>Kelas: </th>
                    <td><input type="text" name="kelas" id="" required></td>
                </tr>
                <tr>
                    <th>Email : </th>
                    <td><input type="email" name="email" id="" required></td>
                </tr>
                <tr>
                    <th>Password: </th>
                    <td><input type="text" name="pass" id="" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Register" name="register">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Have an account? <a href="index.php">Login</a></td>
                </tr>
            </table>
        </form>
    </body>
</html>