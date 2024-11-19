<?php
        include_once("koneksi.php");

        $result = mysqli_query($mysqli, "SELECT FROM * name ORDER BY id DESC")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
    <br/><br/>

    <form action="login.php" method="post" name="form2">
         <table width="25%" border="1">
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
        $email = $_POST['email'];
        $password = $_POST['password'];
       
    

       

       
    }

   ?>
</body>
</html>