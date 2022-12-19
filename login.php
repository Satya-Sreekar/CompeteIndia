<!DOCTYPE html>
<html>
    <Head>
        <title>Login</title>
    </head>
<body>
    <form action="process.php" method="POST">
        <br><br>
    <table style="text-align: center; margin-left:auto; margin-right: auto; font-size: large; padding:5px;">
        <TH colspan="2">Login</TH>
        <tr>
            <td>Username:</td>
            <td><input type="text" id="UN" name="UN" value="" placeholder="Enter Username"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="Password" id="pd" name="pd" value="" placeholder="Enter Password"></td>
        </tr>
        <tr>
            <td colspan="2" align="right"><button type="submit" value="submit"> Login</button></td>
        </tr>
        <tr>
            <td >Not Regestered Yet?</td>
            <td align="left"><button><a href="Register.php">Register</a></button></td>
        </tr>

    </form>
    </table>
</body>
</html>