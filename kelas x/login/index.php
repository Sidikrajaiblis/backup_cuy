<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="ceklogin.php" method="post">
        <table>
            <tr>
                <td colspan=2><h1>Login</h1></td>
            </tr>
            <tr>
                <th>Email : </th>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <th>Password : </th>
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