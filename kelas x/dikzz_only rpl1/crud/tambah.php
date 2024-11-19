<!DOCTYPE html>
<head>
    <title>Add Users</title>
</head>
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Telpon</td>
                <td><input type="text" name="telpon"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telpon = $_POST['telpon'];

        //cek di koneksi
        include_once("index.php");

        //Memasukan ke tabekl DB
        $result = mysqli_query($mysqli, "INSERT INTO user(name,email,telpon) 
        VALUES('$name', '$email', '$telpon')");
    }
    ?>
</body>
</html> 