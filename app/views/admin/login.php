<!DOCTYPE html>
<html>
<head>
    <title> Admin Login Page </title>
<style>
    table
    {
        background-color: black;
        border: 8px solid white;
        border-radius: 25px;
    }
    #type
    {
        width: 300px;
        height: 32px;
        border: 0;
        outline: 0;
        background: transparent;
        border-bottom: 3px solid white;
        color: white;
        font-size: 25px;
    }
    input::-webkit-input-placeholder
    {
        font-size: 20px;
        line-height: 3;
        color: white;
    }
    #btn
    {
        width: 200px;
        background-color: orange;
        height: 35px;
        font-size: 20px;
    }
</style>
</head>
<body background="<?php echo BASE_URL ?>public/images/background.jpg">
    <br><br><br><br><br><br><br>
    <form method="post" action="<?php BASE_URL?>adminlogin/authentication_login"/>
        <table width="20%" border="0" cellspacing="30" align="center">
            <tr>
                <td align="center"><img src="<?php echo BASE_URL ?>public/images/admin_logo.jpg" width="50%"></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="Email" id="type" name="email"></td>
            </tr>
            <tr>
                <td><input type="password" placeholder="********"  id="type" name="password"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="Login" id="btn"></td>
            </tr>
        </table>
    </form>
</body>
</html>
