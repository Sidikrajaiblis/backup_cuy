<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="tab">
    <table  >
        <h2 align="center">REGISTER</h2>
        <link rel="stylesheet" href="coba.css">
        <hr size="5%" color="black">
    </table>
    <form action="register.php" method="post" name="from">
        <table  align="center" bgcolor="grey">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
            <tr>
                <td><p>sudah punya akun?</p></td>
                <td><a href="login.php">Masuk</a></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $name=$_POST['name'];
        $kelas=$_POST['kelas'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $result=mysqli_query($mysqli, "INSERT INTO login(name,kelas,email,password)");
    }
    ?>
</body>
</html>