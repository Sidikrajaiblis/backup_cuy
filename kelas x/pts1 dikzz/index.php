<html>
    <head>
        <title>Login</title>
    </head>
    <link rel="stylesheet" href="style.css">
    <body class="body">
        <form action="ceklogin.php" method="post">
        <table class="login-container">
            <tr>
                <td colspan=2><h2>Login</h2></td>
            </tr>
            <tr>
                <th>Email : </th>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <th>Password: </th>
                <td><input type="text" name="pass" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login" name="login"></td>
            </tr>
            <tr>
                <td></td>
                <td>Dont Have any account?<a href="register.php">Register</a></td>
            </tr>
        </table>
        </form>
    </body>
</html>