<?php
//cek ke file koneksi
include_once("koneksi.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $name=$_POST['id'];
    $telpon=$_POST['telpon'];
    $email=$_POST['email'];

    //update user data
    $result = mysql_query($mysql, "UPDATE user SET name='$name',
    email='$email',telpon='$telpon' WHERE id=$id");

     header("Location: index.php");
}
?>
<?php
//menampilkan data pengguna

$id = $_GET['id'];

// mengambil data user
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id='$id'");
while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email = $user_data['email'];
    $telpon = $user_data['telpon'];
}
?>
<html>
    <head>
        <title>Edit User Data</title>
    </head>

    <body>
        <a href="index.php">Home</a>
        <br/><br/>

       <form name="update_user" method="post" action="edit.php">
            <table border="0">
                <tr>
                    <td>Nama</td> 
                    <td><input type="text" name="name" <?php echo $name;?>></td>
                </tr>  <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" <?php echo $email;?>></td>
                </tr>  <tr>
                    <td>Telpon</td>
                    <td><input type="text" name="telpon" <?php echo $telpon;?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>