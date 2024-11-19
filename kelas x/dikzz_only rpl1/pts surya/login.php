<?php
        include_once("koneksi.php");

        $result = mysqli_query($mysqli, "SELECT * FROM  login ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body bgcolor="aquamarine">
    <form action="login.php" method="post" name="form2">
        <tr>
            <br><br>
            <td><h2 align="center">LOGIN</h2></td>
        </tr>
        <br>
        <hr size="10%" color="black">
        <br>
         <table width="25%" border="0" align="center" class="table">
         <tr>
             <td>Email</td>
            <td><input type="text" name="email"></td>
         </tr>
         <tr>
             <td>Password</td>
            <td><input type="text" name="password"></td>
         </tr>
         <tr>
            <td></td>
            <td><input type="submit" name="submit" value="login"></td>
         </tr>
         <tr>
            <td><a href="register.php">register</a></td>
         </tr>
         </table>
    </form>

     <?php
     
    if(isset($_POST['submit'])){
        $gmail = $_POST['email'];
        $password = $_POST['password'];

        //memasukan ke table db / database
        $result = mysqli_query($mysqli, "INSERT INTO login(email,password)
        values('email','$password')");
    }
   ?>
</body>
</html>