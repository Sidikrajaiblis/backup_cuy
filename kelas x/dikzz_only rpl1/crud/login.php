<?php
        include_once("koneksi1.php");

        $result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="login.php" method="post" name="form2">
         <table width="25%" border="0" >
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
            <td><input type="submit" name="submit" value="Add"></td>
         </tr>
         </table>
    </form>

     <?php
     
    if(isset($_POST['submit'])){
        $gmail = $_POST['email'];
        $password = $_POST['password'];

        $user_data = mysqli_fetch_array($result);
        if ($gmail == $user_data['email']) {
            if ($password == $user_data['password']) {
                echo "login berhasil";
            }else {
                echo "email atau password salah";
            }
        }else {
                echo "email atau password salah";
        }
    }
   ?>
</body>
</html>