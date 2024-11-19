<?php
//membuat koneksi ke database
include_once("koneksi.php");

//mengambil data dari database
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");
?>

<html>
    <head>
        <title>Homepage</title>
    </head>

    <body>
        <a href="tambah.php">Add new user</a><br/><br/>

        <table width="80%" border="1">

        <tr>
            <th>Name</th> <th>Telepon</th> <th>Email</th> <th>Update</th>
        </tr>
        <?php
        while($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$user_data['name']."</td>";
            echo "<td>".$user_data['telpon']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a>
            <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
        }

        ?>
        </table>
    </body>
</html>